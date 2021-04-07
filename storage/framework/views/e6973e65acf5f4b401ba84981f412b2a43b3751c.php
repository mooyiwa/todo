<?php $__env->startSection('listing'); ?>
<ul class="listing s">
<?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <li>
                    <table class="listing l">
                        <tbody>
                        <tr>


                    <td><img class='feat' src="/photos/<?php echo e($song->post_img); ?>" /></td>

                    <td class="txt">
                        <span class='em'>
                            <a href="/single/<?php echo e($song->id); ?>"><?php echo e($song->title); ?></a>
                        </span>
                            <br>

                        
                        <span><?php echo e($song->fname); ?></span>
                        <br><br><br>
                        
                    <span>
                        <?php echo e($song->cate); ?>

                    </span>
                </td>
                    </tr>

                     </tbody>
                    </table>
                </li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

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

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>