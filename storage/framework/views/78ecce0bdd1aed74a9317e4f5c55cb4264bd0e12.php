<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
             
<?php $__env->stopSection(); ?>


<?php $__env->startSection('deletepost'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>
<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<?php echo Form::open(array('url' => '/user/deletecate/'.$cate->id, 'action' => 'pagesController@deleteCate') ); ?>

<ul>

<li><h3>Cate</h3></li>  
<li><?php echo $cate->cate; ?></li>
<li><?php echo $cate->subcate; ?></li>

<br /> 
   
<li><?php echo Form::submit('Delete Cate',array('class' => 'button')); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</ul>
<?php echo Form::close(); ?>  

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>