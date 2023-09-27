{{-- @extends('dashboard')
@section('content') 
<div class="container"  >
    <h1>User List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ Auth::user()->id}}</td>
                <td>@auth
                                <div>{{ Auth::user()->name }}</div>
                            @endauth</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}
{{-- ================================================= --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />


</head>

<body>
    @extends('dashboard')
    @section('content')
        <h1>User categories</h1>

        {{-- @if ($categories->isEmpty())
            <p>No categories found.</p>
        @else --}}
            <table id="users_table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($users as $user) --}}
                    <tr>
                        <td>{{ Auth::user()->id }}</td>
                        <td>@auth
                                <div>{{ Auth::user()->name }}</div>
                            @endauth
                        </td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        {{-- @endif --}}

        <script>
            $(document).ready(function() {
                $('#users_table').DataTable();
            });
        </script>
    @endsection



</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script src="js/scripts.js">
    let table = new DataTable('#users_table', {

    });
</script>


</html>
