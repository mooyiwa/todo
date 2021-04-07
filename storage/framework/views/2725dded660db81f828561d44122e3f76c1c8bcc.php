<?php $__env->startSection('signup'); ?>



                     <?php echo Form::open(array('url' => '/site/signup', 'action' => 'pagesController@signUp')); ?>


                     <ul class="sign">


                   <li><h4>Sign Up</h4></li>
                   <li><p class='msg' style="position:relative; left:-6px;"><?php echo e(@$msg); ?></p></li>
                   <li><input type='text' name='user' placeholder="username" style='height:28px;width:255px;' required="required" /></li>
                   <li><input type='email' name='email' placeholder="e-mail" style='height:28px;width:255px;' required="required" /></li>
                   <li>
                                        <select name='who' style="width:270px" class=" select ent" required="required">
                                        <option selected value=''> ----
                                        <option>I am a Creative</option>
                                        <option>I want to hire</option>

                                    </select>
                                    </li>

                  <tr><td><button type="submit" name="submit" style="margin-top: 3px">Sign Up</button> </td></tr>

                  <tr><td><p style="color: snow; margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></p></td></tr>



                  </ul>

                        <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>