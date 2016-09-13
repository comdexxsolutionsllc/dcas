<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div>
    <div class="doccontainer">
        <header>
            @include('includes.header')
        </header>


        <main class="row">
                @yield('content')
        </main>



        <footer class="page-footer">
            @include('includes.footer')
        </footer>
    </div>
    
    @include('includes.scripts')
    
</div>
</body>
</html>