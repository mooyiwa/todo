<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('editpost'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>
<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php echo Form::open(array('url' => '/user/editcate/'.$cate->id, 'action' => 'pagesController@editCate') ); ?>

<ul>

<li>Cate</li>
<li><?php echo Form::text('cate',$cate->cate,array('required','class' => 'ent' )); ?></li>


<li><?php echo Form::submit('Edit Cate',array('class' => 'button')); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>