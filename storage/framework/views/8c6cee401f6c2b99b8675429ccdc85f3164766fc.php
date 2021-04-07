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


<li>Title of song /track</li>

<li><?php echo Form::text('title',null,array('required','class' => 'ent', 'placeholder' => 'A blue evening' )); ?></li><br>

<li>About song /track</li>
<li><?php echo Form::textarea('short',null,array('required','class' => 'textarea', 'placeholder' => 'A summary about this song or track','id' => 'editor' )); ?></textarea></li><br>

<li>Add Cover Photo</li>
<li>
<li>
<?php echo Form::file('image', array('class' => 'image')); ?>

</li><br>

<li>Upload Song /Track</li>
<li>
<li>
<?php echo Form::file('song', array('class' => 'image')); ?>

</li><br>

<li><?php echo Form::submit('Post Song',array('class' => 'button')); ?></li>

</ul>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>