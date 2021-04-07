<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**Route::get('/', function () {
    return view('site.index');
});*/
//use App\Mail\Welcome;

/**Route::get('/site/signup', function () {
    
    Mail::to('sdelesil@gmail.com')->send(new Welcome);
    return view('signup');
});*/


Route::get('/','pagesController@signIn');

Route::post('/','pagesController@find');

Route::get('/{user}','pagesController@slash');

Route::get('/site/signup','pagesController@signUpPage');
Route::post('/site/signup','pagesController@signUp');

Route::get('/site/signin','pagesController@signIn');

Route::get('/site/recover','pagesController@recover');
Route::post('/site/recover','pagesController@recoverPass');

Route::get('/single/{id}','pagesController@single');
Route::get('/cate/{cate}','pagesController@songs');

Route::get('/user/bio','pagesController@userBio');
Route::post('/user/bio','pagesController@updateBio');

Route::get('/user/avatar','pagesController@avatarPage');
Route::post('/user/avatar','pagesController@postAvatar');

Route::get('/user/profile','pagesController@profilePage');
Route::post('/user/profile','pagesController@updateProfile');

Route::get('/user/posts','pagesController@allPosts');
Route::get('/user/completed','pagesController@completed');
Route::get('/user/pending','pagesController@pending');

Route::get('/user/catecreate','pagesController@createCatePage');
Route::post('/user/catecreate','pagesController@createCate');

Route::get('/user/cates','pagesController@allCates');

Route::get('/user/editcate/{id}','pagesController@editCatePage');
Route::post('/user/editcate/{id}','pagesController@editCate');

Route::get('/user/deletecate/{id}','pagesController@deleteCatePage');
Route::post('/user/deletecate/{id}','pagesController@deleteCate');

/**Route::get('/user/edit/{id}',[
    'as' => 'editpage',
    'uses'=>'pagesController@editPage'
]); */

Route::get('/user/pass','pagesController@pass');
Route::post('/user/pass','pagesController@changePass');

Route::get('/user/edit/{id}','pagesController@editPage');
Route::post('/user/edit/{id}','pagesController@editPost');

Route::get('/user/delete/{id}','pagesController@deletePage');
Route::post('/user/delete/{id}','pagesController@deletePost');


Route::get('/user/post','pagesController@userPost');
Route::post('/user/post','pagesController@post');

Route::get('/user/index','pagesController@userIndex');
Route::post('/user/index','pagesController@log_in');

Route::get('/logout','pagesController@logout');
