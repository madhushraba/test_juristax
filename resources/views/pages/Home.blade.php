 @extends('dashboard')

 @section('content')
     <div class="home" style="height: 91vh; position: sticky;">
         @auth
             <h1>Welcome,
                 @auth
                         <span>{{ Auth::user()->name }}</span>
                     @endauth
                
                 
             </h1>
         @else
             <h1>Welcome, Guest</h1>
         @endauth
     </div>
 @endsection
