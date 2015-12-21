<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        
        <link href="assets/css/bootstrap.css" rel="stylesheet"/>
        <link href="assets/css/blog.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
    </head>
    <body>
        @section('sidebar')
        <div class="blog-masthead">
            <div class="container">
              <nav class="blog-nav">
                <a class="blog-nav-item active" href="http://localhost/laravel_blog/public/">Home</a>
                <a class="blog-nav-item" href="http://localhost/laravel_blog/public/create">New article</a>
                <a class="blog-nav-item" href="http://localhost/laravel_blog/public/about">About</a>
                
                
              </nav>
            </div>
        </div>
        
        @show

        <div class="container">
            
            
            <div class="col-sm-8 blog-main">
                @yield('content')
                
                
            </div>
            
            
         </div>
        <div class="tb"></div>
        @yield('footer')
         <footer class="blog-footer ">
             <p> 2015 &COPY; All rights reserved</p>
            <p>
              <a href="#">Back to top</a>
            </p>
        </footer>
    </body>
</html>
