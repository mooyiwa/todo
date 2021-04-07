<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('profile'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>
<?php echo Form::open(array('action' => 'pagesController@updateProfile')); ?>

<ul>

<li>Professional Title</li>

<li><?php echo Form::text('title',$bio->cate,array('required','class' => 'ent', 'placeholder' => 'Web Developer' )); ?></li>


<li>Fullname</li>

<li><?php echo Form::text('fname',$bio->fullname,array('required','class' => 'ent', 'placeholder' => 'John Doe' )); ?></li>

 <li>e-mail</li>
 <li><?php echo Form::text('email',$bio->email,array('required','class' => 'ent', 'placeholder' => 'me@aol.com' )); ?></li>

<li>About me</li>
<li><?php echo Form::textarea('me',$bio->me,array('required','class' => 'textarea', 'id' => 'textarea', 'placeholder' => 'Professional Bio' )); ?></textarea></li>

<li style="margin-top: 5px;">Social </li>
<li><?php echo Form::text('fb',$bio->fb,array('required','class' => 'ent', 'placeholder' => 'Facebook ID' )); ?></li>
<li><?php echo Form::text('twitter',$bio->twitter,array('required','class' => 'ent', 'placeholder' => 'twitter' )); ?></li>
<li><?php echo Form::text('ln',$bio->linkedin,array('required','class' => 'ent', 'placeholder' => 'in' )); ?></li>

<li><?php echo Form::submit('Update Profile',array('class' => 'button')); ?></li>

</ul>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>