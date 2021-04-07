<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
             
<?php $__env->stopSection(); ?>


<?php $__env->startSection('cates'); ?>


<table class="table">
    <tr><th>Cate</th></tr>
    <tbody id='go'>
        
   <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr class="bolder"><td><?php echo e($cate->cate); ?></td>
        
    <td><a href="/user/editcate/<?php echo e($cate->id); ?>"> Edit </a></td>
    <td><a href='/user/deletecate/<?php echo e($cate->id); ?>'> Delete </a></td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
</tbody></table> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>