<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('create_cate'); ?>

<?php echo Form::open(array('action' => 'pagesController@createCate')); ?>   
<ul class="">  
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><div class="input-group-lg">
<label>New Category</label>
</div>
</li>


<li><div class="input-group-lg">
  <input type="text" name="cate" class="form-control" placeholder="Category">
 </div>
</li>

 
 <li><div class="input-group-lg">
<button type="submit" name="submit">Create</button> 
</div>
</li>


</ul>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>