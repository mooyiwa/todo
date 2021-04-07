<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="home">
 
   <!--off canvas plugin-->
 <div id="wrapper">
  <div class="overlay"></div>
  
  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
  <ul class="sidebar-nav">
  <li class="sidebar-brande"> </li>   


 <?php echo $__env->yieldContent('cates'); ?> 


  </ul>

  </nav>

  <!-- /#sidebar-wrapper for off canvas --> 
  <!-- main content --> 
<div id="page-content-wrapper"> 
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span> 
            <span class="hamb-middle"></span> 
            <span class="hamb-bottom"></span> 
        </button>
<!--off canvas plugin-->

    <div class="top">
<div class="container">
  
<?php echo $__env->make('includes.logonav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <div class="row">
            <div class="container">
                <div class="offset3 span6">
            <p class="intro"> A mini Todo app in PHP/Laravel </p>
          </div>
         </div>
        </div>
        
        
    </div><!--class="container" -->
    
        
</div>

	
    
<div class="mid">
<div class="container">
    <div class="row">
        <div class="span7">
       <?php echo $__env->yieldContent('listing'); ?>
       <?php echo $__env->yieldContent('signin'); ?>  
        </div>
        <div class="span5 aside">
       <?php echo $__env->yieldContent('cates'); ?>          
        </div>
        </div>
    
        
</div><!--class="container" -->
</div>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
<script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listing li:odd').css('background-color','#f8fafb');
$k('ul.listing li:even').css('background-color','#e1e1f4');
});
</script>

      <script type='text/javascript'>
    $m = jQuery.noConflict(); 
$m(document).ready(function() {
$m('ul.listing.s').pagination();

});
</script> 

</div></div><!--closing divs for off canvas-->
</body>

</html>
