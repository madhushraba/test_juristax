 
  
  <body>
    @extends('dashboard')
    @section('content') 
<div class="container"  >
    <h1>Contacted Messages</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($users as $user) --}}
            {{-- <tr>
                <td>{{ Auth::user()->id}}</td>
                <td>@auth
                                <div>{{ Auth::user()->name }}</div>
                            @endauth</td> --}}
                <td>message</td>
                {{-- <td>{{ $user->name }}</td> --}}
                {{-- <td>{{ $user->email }}</td> --}}
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
 
 
      </body>