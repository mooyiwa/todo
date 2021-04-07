@include('includes.site_header')

<body class="admin">

<div class="container">
    <div class="row">
        <div class="span7 logo">
            <a href="/"><img src="{{ URL::asset('img/logo.png') }}" /></a>
        </div>
    </div>

    <div class="row workspace">

        <div class="span3 dash">
            @yield('logged')
        </div>
    <div class="span8 workarea">
            @yield('create_cate')
            @yield('user_bio')
            @yield('post')
            @yield('posts')
            @yield('editpost')
            @yield('deletepost')
            @yield('pass')
            @yield('profile')
            @yield('avatar')
            @yield('cates')
    </div>


    </div>

</div>

<script type="text/javascript" src="{{ URL::asset('jodit/jodit.min.js') }}" charset="utf-8"></script>
<script>var editor = new Jodit('#editor');</script>
</body>
</html>
