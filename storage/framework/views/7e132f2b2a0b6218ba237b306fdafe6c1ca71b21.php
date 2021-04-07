<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
           
    
<?php $__env->stopSection(); ?>	

<?php $__env->startSection('pass'); ?>

<?php echo Form::open(array('action' => 'pagesController@changePass')); ?>

<ul>
<li><p class="msg"><?php echo e(@$msg); ?> </p></li>

<li><label>New Password</label></li>
<li><input type="password" name="newpass" class="ent" required="" /></li>
<li><button type="submit" name="submit">Change</button></li>
</ul>
<?php echo Form::close(); ?>     
    
<?php $__env->stopSection(); ?>	


<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>