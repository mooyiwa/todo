<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('post'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>
<?php echo Form::open(array('action' => 'pagesController@post')); ?>

<ul>

 <li>Post Under</li>

 <li><select name="cate" class="ent select">

    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> {
    <option><?php echo e($cate->cate); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select></li>


<li>Job Title</li>

<li><?php echo Form::text('title',null,array('required','class' => 'ent', 'placeholder' => 'Web Developer' )); ?></li>

 <li>Location</li>
 <li><?php echo Form::text('location',null,array('required','class' => 'ent', 'placeholder' => 'Anywhere' )); ?></li>

 <li>Application URL</li>
 <li><?php echo Form::text('url',null,array('required','class' => 'ent', 'placeholder' => 'http://example.com/apply' )); ?></li>

<li>Short Description</li>
<li><?php echo Form::textarea('short',null,array('required','class' => 'textarea', 'placeholder' => 'Web Developer. Remote. Anywhere' )); ?></textarea></li>

<li>Full Job Description</li>
<li><?php echo Form::textarea('post',null,array('required','class' => 'textarea','id' => 'textarea', 'placeholder' => 'Full job details here' )); ?></li>

<li><?php echo Form::submit('Post Work',array('class' => 'button')); ?></li>

</ul>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>