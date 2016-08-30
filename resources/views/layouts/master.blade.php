<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#3e3595">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
