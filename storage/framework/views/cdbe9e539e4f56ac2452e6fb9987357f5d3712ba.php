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


<?php $__env->startSection('cates'); ?>
<ul class="cates">
<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li><a href="/cate/<?php echo $cate->cate; ?>"> <?php echo $cate->cate; ?> </a></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>


<!-- <?php $__env->startSection('find'); ?>

<?php echo Form::open(array('action' => 'pagesController@find')); ?>

<ul class="sign">

<li>
        <select name='cate' style="width:270px" class=" select ent" required="required">
                                        <option selected value=''> Choose an option
                                      <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  <option>
                                    
                                            <?php echo $cate->cate; ?>

                                    
                                        </option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
</li>

<li><?php echo Form::submit('Find',['class' => 'button']); ?></li>

</ul>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?> -->

<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>