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
        <table id="contacted_users_table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>contact no.</th>
                    <th>message</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($users as $user) --}}
                <tr>
                    <td>@auth
                            <div>{{ Auth::user()->name }}</div>
                        @endauth
                    </td>
                    <td>{{ Auth::user()->email }}</td>
                    <td>64364756</td>
                    <td>data5757</td>
                </tr>
                {{-- @endforeach --}}

                <tr>
                    <td>User 1 Name</td>
                    <td>User 1 Email</td>
                    <td>64364756</td>
                    <td>Message 1</td>
                </tr>
                <tr>
                    <td>User 2 Name</td>
                    <td>User 2 Email</td>
                    <td>12345678</td>
                    <td>Message 2</td>
                </tr>
                <tr>
                    <td>User 3 Name</td>
                    <td>User 3 Email</td>
                    <td>98765432</td>
                    <td>Message 3</td>
                </tr>
                <tr>
                    <td>madhu</td>
                    <td>User 1 Email</td>
                    <td>64364756</td>
                    <td>Message 1</td>
                </tr>
                <tr>
                    <td>manisha</td>
                    <td>User 2 Email</td>
                    <td>12345678</td>
                    <td>Message 2</td>
                </tr>
                <tr>
                    <td>sahlie</td>
                    <td>User 3 Email</td>
                    <td>98765432</td>
                    <td>Message 3</td>
                </tr>
                <tr>
                    <td>sourav</td>
                    <td>User 1 Email</td>
                    <td>64364756</td>
                    <td>Message 1</td>
                </tr>
                <tr>
                    <td>sahil</td>
                    <td>User 2 Email</td>
                    <td>12345678</td>
                    <td>Message 2</td>
                </tr>
                <tr>
                    <td>rajesh</td>
                    <td>User 3 Email</td>
                    <td>98765432</td>
                    <td>Message 3</td>
                </tr>
                <tr>
                    <td>chandan</td>
                    <td>User 1 Email</td>
                    <td>64364756</td>
                    <td>Message 1</td>
                </tr>
                <tr>
                    <td>aritra</td>
                    <td>User 2 Email</td>
                    <td>12345678</td>
                    <td>Message 2</td>
                </tr>
                <tr>
                    <td>bird</td>
                    <td>User 1 Email</td>
                    <td>64364756</td>
                    <td>Message 1</td>
                </tr>
                <tr>
                    <td>jay</td>
                    <td>User 2 Email</td>
                    <td>12345678</td>
                    <td>Message 2</td>
                </tr>
                <tr>
                    <td>sneha</td>
                    <td>User 3 Email</td>
                    <td>99999999</td>
                    <td>Message 3</td>
                </tr>
                <tr>
                    <td>User 3 Name</td>
                    <td>User 3 Email</td>
                    <td>98765432</td>
                    <td>Message 3</td>
                </tr>
                
            </tbody>
        </table>
        {{-- @endif --}}

        <script>
            $(document).ready(function() {
                $('#contacted_users_table').DataTable();
            });
        </script>
    @endsection



</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script src="js/scripts.js">
    let table = new DataTable('#contacted_users_table', {

    });
</script>


</html>
