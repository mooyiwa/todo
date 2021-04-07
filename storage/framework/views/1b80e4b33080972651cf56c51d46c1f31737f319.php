<?php $__env->startSection('listing'); ?>
<ul class="listing">
<?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <li>
                    <table class="listing">
                        <tbody>
                        <tr><td class="em"><?php echo e($song->title); ?></td></tr>
                        <tr><td class="apad"><?php echo e($song->fname); ?></td></tr>
                        <td class="apad"><?php echo e($song->location); ?></td></tr>
                    <tr><td class="details"><?php echo e($song->short); ?></td></tr>
                    <tr><td>Deadline: <?php echo e($song->finish); ?></td><td><a href="/single/<?php echo e($song->id); ?>">Apply</a></td></tr>

                     </tbody>
                    </table>
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

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>