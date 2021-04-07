@include('includes.site_header')

<body class="home">
    
    <div class="top">
<div class="container">
  
@include('includes.logonav')
        
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
        <div class="span7 signup">
       @yield('signup')
       @yield('signin') 
       @yield('recover')  
        </div>
        <div class="span5">
       @yield('cates')          
        </div>
        </div>
    
        
</div><!--class="container" -->
</div>


@include('includes.footer')
    


</body>
</html>
