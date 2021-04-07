<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
             
<?php $__env->stopSection(); ?>


<?php $__env->startSection('user_bio'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>           
<?php echo Form::open(array('action' => 'pagesController@updateBio')); ?>

<ul class="">

<li><?php echo Form::text('first',$details->first, array('required','class' => 'ent', 'placeholder' => 'First name' )); ?></li>

<li><?php echo Form::text('last',$details->last, array('required','class' => 'ent', 'placeholder' => 'Surname' )); ?></li>

<li><?php echo Form::text('email',$details->email,array('required','class' => 'ent', 'placeholder' => 'email address' )); ?></li>

<li><?php echo Form::text('phone',$details->phone, array('required','class' => 'ent', 'placeholder' => 'Phone no')); ?></li>

<li><?php echo Form::text('fb',$details->fb, array('class' => 'ent', 'placeholder' => 'Facebook')); ?></li>

<li><?php echo Form::text('twitter',$details->twitter, array('class' => 'ent', 'placeholder' => 'Twitter')); ?></li>

<li><?php echo Form::text('ig',$details->ig, array('class' => 'ent', 'placeholder' => 'Instagram')); ?></li>

<li><?php echo Form::textarea('me',$details->me, array('class' => 'ent, textarea', 'placeholder' => 'About me')); ?></li>

<li><?php echo Form::submit('Update Bio',['class' => 'button']); ?></li>

</ul>

<?php echo Form::close(); ?>  

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>