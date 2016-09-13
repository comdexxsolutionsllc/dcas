<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>

        <div class="doccontainer">

            <header>
                @include('includes.header')
            </header>

            <main>

                <!-- sidebar content -->
                    @include('includes.sidebar')
                <!-- main content -->
                    @yield('content')

            </main>

            <footer class="page-footer">
                @include('includes.footer')
            </footer>
        
        </div>
        
        @include('includes.scripts')

    </body>
</html>