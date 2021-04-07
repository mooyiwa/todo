<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="signup">

<div class="container">
    <div class="row">
        <div class="span7 logo">
            <a href="/"><img src="<?php echo e(URL::asset('img/logo.png')); ?>" /></a>
        </div>
    </div>
    
       <div class="row"> 
        <div class="offset7 span4 login">
            
            <?php echo $__env->yieldContent('signup'); ?>
            <?php echo $__env->yieldContent('signin'); ?>
            <?php echo $__env->yieldContent('recover'); ?>
           
       
        </div>
     </div>   
</div><!--class="container" -->
	
</body>
</html>
