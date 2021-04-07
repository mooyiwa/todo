<?php $__env->startSection('avatar'); ?>

<ul class="bio">

     <li><img class="bio" src="photos/<?php echo e($me->photo_id); ?>" /></li><br />
     <li><?php echo e($me->fullname); ?></li><br />
     <li>Facebook: <?php echo e($me->fb); ?></li>
     <li>Twitter: <?php echo e($me->twitter); ?></li>
     <li>Instagram: <?php echo e($me->ig); ?></li>

</ul>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('me'); ?>
<span class="me">
<p>
   <?php echo e($me->me); ?>

</p>
</span>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.slash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>