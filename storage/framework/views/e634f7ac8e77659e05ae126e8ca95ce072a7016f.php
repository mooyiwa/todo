<?php $__env->startSection('listing'); ?>
<ul class="listing">
<?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <li style="margin-top: 20px;"><b><?php echo e($song->title); ?></b></li><br />
                        <li class=""><?php echo e($song->fname); ?></li>
                        <li class=""><?php echo e($song->location); ?></li><br />
                        <li class="details"><?php echo $song->post; ?></li>


              <?php if (! ($song->url == '')): ?>

              <li><a href="<?php echo e($song->url); ?>" target="_blank"><button style="margin-top: 15px;">Apply</button></a></li>
              <?php endif; ?>

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