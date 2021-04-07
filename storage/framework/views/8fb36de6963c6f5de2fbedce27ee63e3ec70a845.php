<?php $__env->startSection('signup'); ?>



                     <?php echo Form::open(array('url' => '/site/signup', 'action' => 'pagesController@signUp')); ?>


                     <ul class="sign">


                   <li><h4>Get Started</h4></li>
                   <li><p class='msg' style="position:relative; left:-6px;"><?php echo e(@$msg); ?></p></li>
                   <li><input type='text' name='user' placeholder="username" style='height:28px;width:255px;' required="required" /></li>
                   <li><input type='email' name='email' placeholder="e-mail" style='height:28px;width:255px;' required="required" /></li>
                

                  <tr><td><button type="submit" name="submit" style="margin-top: 3px">Sign Up</button> </td></tr>

                  <tr><td><p style="margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></p></td></tr>



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
<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>