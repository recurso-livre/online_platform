<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') - Recurso Livre</title>
        @stack("stylesheets")
        @stack('prescripts')
    </head>
    <body>
        <header id='rl-header'>
            @yield('header')
        </header>
        
        <div id="rl-content">
            @yield('content')
        </div>
        
        <footer id="rl-footer">
            @yield('footer')
        </footer>
        
        @stack('posscripts')
    </body>
</html>
