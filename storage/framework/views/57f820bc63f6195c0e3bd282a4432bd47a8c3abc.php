<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('post'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>
<?php echo Form::open(array('action' => 'pagesController@post','enctype' => 'multipart/form-data') ); ?>

<ul>

 <li>Post Under</li>

 <li><select name="cate" class="ent select">

    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> {
    <option><?php echo e($cate->cate); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select></li><br>


<li>TODO Title </li>

<li><?php echo Form::text('title',null,array('required','class' => 'ent', 'placeholder' => 'Example Title' )); ?></li><br>

<li>Description</li>
<li><?php echo Form::textarea('short',null,array('required','class' => 'textarea', 'placeholder' => 'Details on TODO','id' => 'editor' )); ?></textarea></li><br>

<li>Status</li>
<li><div class="input-group-lg">
  <?php echo Form::select('status', array('Pending' => 'Pending', 'Completed' => 'Completed')); ?>

 </div>
</li>

<li><?php echo Form::submit('Post TODO',array('class' => 'button')); ?></li>

</ul>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>