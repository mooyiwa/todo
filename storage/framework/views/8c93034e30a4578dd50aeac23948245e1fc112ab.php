<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
             
<?php $__env->stopSection(); ?>


<?php $__env->startSection('posts'); ?>


<table class="table">
    <tr><th>TODOs</th> <th>Category</th> <th>Status</th> <th>Timestamp</th></tr>
    <tbody id='go'>
        
   <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr class="bolder">
    	<td><?php echo e($song->title); ?></td>
        <td><?php echo e($song->cate); ?></td>
        <td><?php echo e($song->status); ?></td>
        <td><?php echo e($song->timestamp); ?></td>
    <td><a href="/user/edit/<?php echo e($song->id); ?>"> <img src="<?php echo e(URL::asset('img/edit.png')); ?>" /> </a></td>
    <td><a href='/user/delete/<?php echo e($song->id); ?>'> <img src="<?php echo e(URL::asset('img/delete.png')); ?>" /> </a></td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
</tbody></table> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>