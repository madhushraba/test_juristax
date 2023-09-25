<x-app-layout>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>madhushraba21</title>
        <link href="{{ asset('backend') }}/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="body" >


            <header class="topnav">
                @include('commons.navbar')
            </header>
            <div class="bodies" style="display: flex;">


                <aside style="flex: 1.3;"> 
                    @include('commons.sidebar')
                </aside>


                <main style="flex: 9; padding: 2rem;">
                    @yield('content')
                </main>
            </div>
            <footer>
                @yield('commons.footer')
            </footer>

        </div>

    </body>

    </html>

</x-app-layout>
















 