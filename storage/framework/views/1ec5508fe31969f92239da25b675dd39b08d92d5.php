<?php $__env->startSection('signin'); ?>


<?php echo Form::open(array('action' => 'pagesController@log_in')); ?>

<ul class="sign">
<li><p class='msg' style="position:relative; left:-6px;"><?php echo e(@$msg); ?></p></li>
<li><?php echo Form::text('user',null,['class' => 'ent', 'placeholder' => 'username']); ?></li>

<li><?php echo Form::password('pass',['class' => 'ent', 'placeholder' => 'password']); ?></li>


<li><?php echo Form::submit('Sign in',['class' => 'button']); ?></li>
<li><p style="margin-top: 10px">New User? <a href="/site/signup">Sign Up!</a></p></li>
<li><p style="margin-top: 10px"><a href="/site/recover">Forgot password?</a></p></li>
</ul>

<?php echo Form::close(); ?>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>