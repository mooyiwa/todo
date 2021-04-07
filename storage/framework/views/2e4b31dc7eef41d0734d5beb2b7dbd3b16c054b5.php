<?php $currentPage = basename(Request::url()); ?>
<ul class="dash ui-widget-content" style="margin-bottom: 40px;">

       <p class=""><img src="<?php echo e(URL::asset('img/avatar.jpg')); ?>" />
<br /> <?php echo e(session()->get('logged')); ?> <br /> </p>
       
      <?php if(session()->get('who') == 'user'): ?>

       <li <?php if($currentPage == 'avatar'): ?> id = 'here' <?php endif; ?>><a href="/user/avatar"><img src="<?php echo e(URL::asset('img/avatar.png')); ?>" /> Attach Avatar</a></li>        
       <li <?php if($currentPage == 'bio'): ?> id = 'here' <?php endif; ?>><a href="/user/bio"><img src="<?php echo e(URL::asset('img/bio.png')); ?>" /> Update Bio</a></li>

       <li <?php if($currentPage == 'post'): ?> id = 'here' <?php endif; ?>><a href="/user/post"><img src="<?php echo e(URL::asset('img/go.png')); ?>" /> New Post / TODO </a></li>

       <li <?php if($currentPage == 'posts' || $currentPage == 'edit'): ?> id = 'here' <?php endif; ?>><a href="/user/posts"><img src="<?php echo e(URL::asset('img/sales.png')); ?>" /> All TODOS </a></li>

       <li <?php if($currentPage == 'completed'): ?> id = 'here' <?php endif; ?>><a href="/user/completed"><img src="<?php echo e(URL::asset('img/go.png')); ?>" /> All Completed </a></li>

       <li <?php if($currentPage == 'pending'): ?> id = 'here' <?php endif; ?>><a href="/user/pending"><img src="<?php echo e(URL::asset('img/go.png')); ?>" /> All Pending </a></li>

       <li <?php if($currentPage == 'pass' || $currentPage == 'edit'): ?> id = 'here' <?php endif; ?>><a href="/user/pass"><img src="<?php echo e(URL::asset('img/settings.png')); ?>" /> Change Password </a></li>

       <li><a href='/'><img src="<?php echo e(URL::asset('img/power.png')); ?>" /> Sign Out </a></li>
     <?php endif; ?>
     
      <?php if(session()->get('who') == 'creative'): ?>
     
       <li <?php if($currentPage == 'avatar'): ?> id = 'here' <?php endif; ?>><a href="/user/avatar"><img src="<?php echo e(URL::asset('img/avatar.png')); ?>" /> Attach Avatar</a></li>        
       <li <?php if($currentPage == 'profile'): ?> id = 'here' <?php endif; ?>><a href="/user/profile"><img src="<?php echo e(URL::asset('img/bio.png')); ?>" /> My Profile</a></li>

       <li <?php if($currentPage == 'pass' || $currentPage == 'edit'): ?> id = 'here' <?php endif; ?>><a href="/user/pass"><img src="<?php echo e(URL::asset('img/settings.png')); ?>" /> Change Password </a></li>
       <li><a href='/'><img src="<?php echo e(URL::asset('img/power.png')); ?>" /> Sign Out </a></li>
       
      <?php endif; ?>

            <?php if(session()->get('who') == 'admin1'): ?>
     
       <li <?php if($currentPage == 'catecreate'): ?> id = 'here' <?php endif; ?>><a href="/user/catecreate"><img src="<?php echo e(URL::asset('img/go.png')); ?>" /> Create Cate</a></li>        
     
     <li <?php if($currentPage == 'cates'): ?> id = 'here' <?php endif; ?>><a href="/user/cates"><img src="<?php echo e(URL::asset('img/go.png')); ?>" /> Manage Cates</a></li> 

       <li <?php if($currentPage == 'pass' || $currentPage == 'edit'): ?> id = 'here' <?php endif; ?>><a href="/user/pass"><img src="<?php echo e(URL::asset('img/settings.png')); ?>" /> Change Password </a></li>
       <li><a href='/'><img src="<?php echo e(URL::asset('img/power.png')); ?>" /> Sign Out </a></li>
       
      <?php endif; ?>
       
       </ul>
