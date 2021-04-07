<?php $__env->startSection('listing'); ?>
<ul>
<?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <li><img class='single' src="/photos/<?php echo e($song->post_img); ?>" /></li>
               <li style="margin-top: 20px;"><b><?php echo e($song->title); ?></b></li>
                        <li class=""><?php echo e($song->fname); ?></li><br />
                        <li class="details"><?php echo $song->short; ?></li><br>
<li>
<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="/uploads/<?php echo $song->song_id; ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
</li>
            

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('cates'); ?>
<ul class="cates">
<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li><a href="/cate/<?php echo e($cate->cate); ?>"> <?php echo e($cate->cate); ?> </a></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>