<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('avatar'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>
<?php echo Form::open(array('url' => '/user/avatar/','enctype' => 'multipart/form-data')); ?>

<ul class="">

<li><?php echo Form::file('image', array('class' => 'image')); ?></li>
<li><?php echo Form::submit('Attach Avatar',['class' => 'button']); ?></li>

</ul>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>