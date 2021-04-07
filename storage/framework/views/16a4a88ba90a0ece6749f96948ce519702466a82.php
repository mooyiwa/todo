<?php $__env->startSection('signup'); ?>



                     <?php echo Form::open(array('url' => '/site/signup', 'action' => 'pagesController@signUp', 'class'=>'form')); ?>


                     <ul class="sign">


<li><h3>Sign up to Get Started</h3></li>
<li><p class='msg' style="position:relative; left:-6px;"><?php echo e(@$msg); ?></p></li>

<li><div class="input-group-lg">
  <?php echo Form::text('user','',array('required','class' => 'form-control', 'placeholder' => 'Username' )); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <?php echo Form::text('first','',array('required','class' => 'form-control', 'placeholder' => 'First name' )); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <?php echo Form::text('last','',array('required','class' => 'form-control', 'placeholder' => 'Last name' )); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <?php echo Form::text('email','',array('required','class' => 'form-control', 'placeholder' => 'email' )); ?>

 </div>
</li>
    

<li><div class="input-group-lg">
  <?php echo Form::text('phone','',array('required','class' => 'form-control', 'placeholder' => 'Mobile number' )); ?>

 </div>
</li>    


<li><div class="input-group-lg">
  <?php echo Form::select('sex', array('M' => 'Male', 'F' => 'Female')); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <?php echo Form::date('bday','',array('required','class' => 'form-control', 'placeholder' => 'Birthday' )); ?>

 </div>
</li>                

                  <tr><td><button type="submit" name="submit" style="margin-top: 3px">Sign Up</button> </td></tr>

                  <tr><td><p style="margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></p></td></tr>



                  </ul>

                        <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>