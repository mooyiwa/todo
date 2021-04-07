<?php $__env->startComponent('mail::message'); ?>
# Password Recovery

A temporary password has been generated for you. Change the password to a desired one once you sign in.
<p>Your Username is : <?php echo e($details->username); ?></p>
<p>Your recovery password is: <?php echo e($details->passcode); ?></p>

<?php $__env->startComponent('mail::button', ['url' => 'https://pullwork.net']); ?>
Sign In
<?php echo $__env->renderComponent(); ?>

Enjoy,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
