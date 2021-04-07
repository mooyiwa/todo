<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use DB;
use App\Song;
use App\Cate;
use App\User;
use App\Mail\SignedUp;
use App\Mail\Recovered;

class pagesController extends Controller
{

    public function __Construct(Song $song, Cate $cate, User $user) {

        $this->user = $user;
        $this->song = $song;
        $this->cate = $cate;

    }
    public function index() {

        //$songs = DB::table('jobs')->limit(5)->get();
        //$cates = DB::table('cates')->get();

       // $songs = Job::limit(5)->get();
        //$cates = Cate::get();
        // session()->flush();

        $songs = $this->song->limit(5)->orderBy('timestamp','desc')->get();
        $cates = $this->cate->get();
        return view('index', compact('songs','cates'));
    }

        public function find(Request $request) {
         

         $songs = $this->song->where('cate',$request->input('cate'))->get();
        $cates = $this->cate->get();
        return view('index', compact('songs','cates'));
    }

    public function signUpPage() {
        return view('signup');
    }

    public function signIn() {

        return view('signin');
    }

    public function recover() {

        return view('recover');
    }

         //create cate page
      public function createCatePage() {
       if(session()->get('logged') != ''){
        
        return view('user.create_cate');
      } 
    }
  // create cate
      public function createCate(Request $request) {

             $cate = $request->input('cate');
            

     $create = $this->cate->insert(
                     ['cate' => $cate
                      
                     ]
      );


      if($create){
        $msg = "Category created!";
      }

       if(session()->get('logged') != ''){
      
        return view('user.create_cate', compact('msg'));
      } 
    }

    public function allCates() {

     if(session()->get('logged') != ''){

       $cates = $this->cate->get();
       return view('user.cates', compact('cates'));
     }

    } 

        public function editCatePage($id) {

     if(session()->get('logged') != ''){

       $cates = $this->cate->where('id',$id)->get();
       return view('user.editcate', compact('cates'));
     }


    }

          public function editCate($id, Request $request) {

     if(session()->get('logged') != ''){

           $post = $this->cate->where('id',$id)->update(['cate' => $request->input('cate')

                           ]);

      if($post){
       //$msg = 'Cate Edited!';
       $cates = $this->cate->where('id',$id)->get();
   
      return redirect()->action('pagesController@allCates');

     }
     }

  }  


        public function deleteCatePage($id) {

     if(session()->get('logged') != ''){

       $cates = $this->cate->where('id',$id)->get();
       return view('user.deletecate', compact('cates'));
      }
    }

       public function deleteCate($id) {

     if(session()->get('logged') != ''){

       $this->cate->where('id',$id)->delete(); //run delete
       $cates = $this->cate->get(); //fetch cates
       return view('user.cates', compact('cates')); // return all cates view
      }
    }   



    public function single($id) {

        $songs = $this->song->where('id',$id)->get();
        $cates = $this->cate->get();
        return view('single',compact('songs','cates'));
    }

    public function songs($cate) {

        $songs = $this->song->where('cate',$cate)->get();
        $cates = $this->cate->get();
        return view('songs',compact('songs','cates'));
    }

    public function log_in(Request $request) {

        $user = $this->user->where('username',$request->input('user'))->first();
        if($user){ //username exists , go for password test

            $hashed = md5($request->input('pass')); //hash the password

            $pass = $this->user->where([
                ["username",$request->input('user')],
                ["password",$hashed],
                ])->first();

            if($pass){ // return 'user found and password is correct';
               //session()->put('hash','moo'); session()->get('hash');
               session()->put('logged',$user->username);
               session()->put('fname',$user->fullname);
               session()->put('who',$pass->who);

               return view('user.index', compact('user'));


            }
            elseif(!$pass){

                $msg = "User found but password is not correct";
                $cates = $this->cate->get();
                return view('signin', compact('cates','msg'));
            }
        }
        elseif(!$user){

            $msg = "Username does not exist!";
            $cates = $this->cate->get();
            return view('signin', compact('cates','msg'));;
        }

    }

     public function userIndex() {

     if(session()->get('logged') != ''){
       return view('user.index');
     }

    }

    public function userBio() {

      if(session()->get('logged') != ''){

       $details = $this->user->where('username',session()->get('logged'))->first();
       return view('user.user_bio', compact('details'));
      }


       //return redirect()->action('pagesController@index');

    }

   public function updateBio(Request $request) {
       $update = $this->user->where('username',session()->get('logged'))
                            ->update(['first' => $request->input('first'),
                                      'last' => $request->input('last'),
                                      'email' => $request->input('email'),
                                      'phone' => $request->input('phone'),
                                      'fb' => $request->input('fb'),
                                      'twitter' => $request->input('twitter'),
                                      'ig' => $request->input('ig'),
                                      'me' => $request->input('me')

                                    ]
                          );
      if($update){
        $msg = 'Bio updated!';
        $details = $this->user->where('username',session()->get('logged'))->first();
        return view('user.user_bio', compact('msg','details'));
      }
      //
    }

    public function userPost() { //method to display user job post form

     if(session()->get('logged') != ''){

       $cates = $this->cate->get();
       return view('user.post',compact('cates'));
     }

    }



    public function post(Request $request) { //method to handle posts

                $start = date('Y-m-d');
                $finish = date('Y-m-d', strtotime($start. ' + 30 days'));
                $timestamp = date('Y-m-d H:i:s');
                $post_id = substr(number_format(time() * rand(),0,'',''),0,5);

    $post = $this->song->insert(['title' => $request->input('title'),
                                      'cate' => $request->input('cate'),
                                  
                                      'short' => $request->input('short'),
                                      'start' => $start,
                                      'finish' => $finish,
                                      'timestamp' => $timestamp,
                                      'post_id' => $post_id,
                                      'status' => $request->input('status'),
                                      'accepted' => 'Y',
                                      'auth' => session()->get('logged')

                           ]);       


      if($post){
        $msg = 'TODO  Posted!';
        $cates = $this->cate->get();
        return view('user.post', compact('msg','cates'));
      }
      //
    }


     public function allPosts() {

     if(session()->get('logged') != ''){

       $songs = $this->song->where('auth',session()->get('logged'))->get();
       return view('user.posts', compact('songs'));
     }

    }

       public function completed() {

     if(session()->get('logged') != ''){

       $songs = $this->song->where('auth',session()->get('logged'))
                           ->where('status','Completed')->get();
       return view('user.posts', compact('songs'));
     }

    } 

           public function pending() {

     if(session()->get('logged') != ''){

       $songs = $this->song->where('auth',session()->get('logged'))
                           ->where('status','Pending')->get();
       return view('user.posts', compact('songs'));
     }

    }  

    public function editPage($id) {

     if(session()->get('logged') != ''){

       $songs = $this->song->where('id',$id)->get();
       return view('user.edit', compact('songs'));
     }


    }

    public function editPost($id, Request $request) {

     if(session()->get('logged') != ''){

           $post = $this->song->where('id',$id)->update(['title' => $request->input('title'),

                                      'short' => $request->input('short')

                           ]);

      if($post){
       $msg = 'Post Edited!';
       $songs = $this->song->where('id',$id)->get();
       return view('user.edit', compact('songs','msg'));
     }
     }

  }

      public function deletePage($id) {

     if(session()->get('logged') != ''){

       $songs = $this->song->where('id',$id)->get();
       return view('user.delete', compact('songs'));
      }
    }

      public function deletePost($id) {

     if(session()->get('logged') != ''){

       $this->song->where('id',$id)->delete(); //run delete
       $songs = $this->song->where('auth',session()->get('logged'))->get(); //fetch jobs
       return view('user.posts', compact('songs')); // return all jobs view
      }
    }

    public function signUp(Request $request) {

     $username = $request->input('user');
     $first = $request->input('first');
     $last = $request->input('last');
     $email = $request->input('email');
     $phone = $request->input('phone');
     $sex = $request->input('sex');
     $bday = $request->input('bday');


     $user_id = substr(number_format(time() * rand(),0,'',''),0,5);
     $pass = "pass8008!";
     $hash_pass = md5($pass);
     $secret = substr(number_format(time() * rand(),0,'',''),0,6);
     $hash_secret = md5($secret);

  
             //chk for existing user
     $exist = $this->user->where('username',$username)->first();
     if($exist){
      $msg = 'Username has been taken';
      
      return view('signup', compact('msg'));
    }

     $create = $this->user->insert(['username' => $username,
                                    'first' => $first,
                                    'last' => $last,
                                    'email' => $email,
                                    'phone' => $phone,
                                    'sex' => $sex,
                                    'bday' => $bday,  
                                    'who' => 'user',
                                    'password' => $hash_pass,
                                    'user_id' => $user_id,
                                    'secret' => $secret,
                                    'hash_secret' => $hash_secret

                     ]);



      if($create){
        \Mail::to($request->input('email'))->send(new SignedUp);
        $msg = "Account created! See your email.";
      }

     return view('signup', compact('msg')); // return signup view

  }

       public function pass() {

     if(session()->get('logged') != ''){
       return view('user.pass');
     }

    }


       public function changePass(Request $request) {

     if(session()->get('logged') != ''){

         $newpass = md5($request->input('newpass'));


         $change = $this->user->where('username',session()->get('logged'))
                              ->update(['password' => $newpass ]);
         if($change){
           $msg = "Password changed!";
           return view('user.pass', compact('msg'));
         }
     }

    }


    public function profilePage() {

  if(session()->get('logged') != ''){

    $bio = $this->user->where('username',session()->get('logged'))->first();
    return view('user.profile', compact('bio'));
  }

 }

    public function updateProfile(Request $request) {

   if(session()->get('logged') != ''){

     $post = $this->user->where('username',session()->get('logged'))
                        ->update(['cate' => $request->input('title'),
                                  'fullname' => $request->input('fname'),
                                  'email' => $request->input('email'),
                                  'me' => $request->input('me'),
                                  'fb' => $request->input('fb'),
                                  'twitter' => $request->input('twitter'),
                                  'linkedin' => $request->input('ln')

                     ]);

      if($post){

     $msg = "Bio Updated!";
     $bio = $this->user->where('username',session()->get('logged'))->first();
     return view('user.profile',compact('msg','bio'));
    }
   }

 }


 public function avatarPage() {

if(session()->get('logged') != ''){

 return view('user.avatar');
  }
 }


 public function postAvatar(Request $request)

 {
   if(session()->get('logged') != ''){

     $this->validate($request, [

         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

     ]);


     $image = $request->file('image');

     $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

     $destinationPath = public_path('/photos');

     $image->move($destinationPath, $input['imagename']);


     $attach = $this->user->where('username',session()->get('logged'))
                ->update(['photo_id' => $input['imagename']

  ]);

    if($attach){
      $msg = "Avatar attached!";
      return view('user.avatar',compact('msg'));
     }
   }
 }

 public function slash($user) {

    $me = $this->user->where('username',$user)->first();
    if(!$me){
       exit; 
    }else{
    return view('slash', compact('me'));

    }
 }

 public function recoverPass(Request $request) {

   //get podt data

   $pass = substr(number_format(time() * rand(),0,'',''),0,5);

     $user = $this->user->where('username',$request->input('user'))->first();
     if($user){ //username exists , go for secret password test

         $hashed_secret = md5($request->input('secret')); //hash the secret password

         $testpass = $this->user->where([
             ["username",$request->input('user')],
             ["hash_secret",$hashed_secret],
             ])->first();

         if($testpass){ // insert new temporary pass

            $recover = $this->user->where('username',$request->input('user'))
                            ->update(['password' => md5($pass), 'passcode' => $pass ]);
            
            
            
             if($recover){
                 
            \Mail::to($request->input('email'))->send(new Recovered);    
            $msg = "Password recovered. See your email!";
            return view('recover', compact('msg'));
          } 
          //else{return view('index');}

         }

     }


 }

}
