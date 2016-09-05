<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div>
    
    <header>
        @include('includes.header')
    </header>

    
    <main>
            @yield('content')
    </main>


    
    <footer class="page-footer">
        @include('includes.footer')
    </footer>
    
    @include('includes.scripts')
    
</div>
</body>
</html>