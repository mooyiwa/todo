<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="admin">

<div class="container">
    <div class="row">
        <div class="span7 logo">
            <a href="/"><img src="<?php echo e(URL::asset('img/logo.png')); ?>" /></a>
        </div>
    </div>

    <div class="row workspace">

        <div class="span3 dash">
            <?php echo $__env->yieldContent('logged'); ?>
        </div>
    <div class="span8 workarea">
            <?php echo $__env->yieldContent('create_cate'); ?>
            <?php echo $__env->yieldContent('user_bio'); ?>
            <?php echo $__env->yieldContent('post'); ?>
            <?php echo $__env->yieldContent('posts'); ?>
            <?php echo $__env->yieldContent('editpost'); ?>
            <?php echo $__env->yieldContent('deletepost'); ?>
            <?php echo $__env->yieldContent('pass'); ?>
            <?php echo $__env->yieldContent('profile'); ?>
            <?php echo $__env->yieldContent('avatar'); ?>
            <?php echo $__env->yieldContent('cates'); ?>
    </div>


    </div>

</div>

<script type="text/javascript" src="<?php echo e(URL::asset('jodit/jodit.min.js')); ?>" charset="utf-8"></script>
<script>var editor = new Jodit('#editor');</script>
</body>
</html>
