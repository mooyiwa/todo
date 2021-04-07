<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="home">
    
    <div class="top">
<div class="container">
  
<?php echo $__env->make('includes.logonav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <div class="row">
            <div class="container">
                <div class="offset3 span6">
            <p class="intro"> A mini Todo app in PHP/Laravel </p>
          </div>
         </div>
        </div>
        
        
    </div><!--class="container" -->
    
        
</div>

    
    
<div class="mid">
<div class="container">
    <div class="row">
        <div class="span7 signup">
       <?php echo $__env->yieldContent('signup'); ?>
       <?php echo $__env->yieldContent('signin'); ?> 
       <?php echo $__env->yieldContent('recover'); ?>  
        </div>
        <div class="span5">
       <?php echo $__env->yieldContent('cates'); ?>          
        </div>
        </div>
    
        
</div><!--class="container" -->
</div>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    


</body>
</html>
