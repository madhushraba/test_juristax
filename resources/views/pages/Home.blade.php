 @extends('dashboard')

 @section('content')
     <div class="home" style="height: 91vh; position: sticky;">
         @auth
             <h1>Welcome,
                 @auth
                         <span style="padding: 12px; color:rgb(236, 3, 42);">{{ Auth::user()->name }}</span>
                     @endauth
                
                 
             </h1>
         @else
             <h1>Welcome, Guest</h1>
         @endauth
     </div>
 @endsection
