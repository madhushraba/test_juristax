 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>enquiries</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />


</head>

<body>
    @extends('dashboard')
    @section('content')
        <h1>User categories</h1>

        @if ($categories->isEmpty())
            <p>No categories found.</p>
        @else
            <table id="category_table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>23</td>
                        <td>{{ $category->name }}</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <script>
            $(document).ready(function() {
                $('#category_table').DataTable();
            });
        </script>
    @endsection



</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script src="js/scripts.js">
 let table = new DataTable('#category_table', {
   
});
</script>


</html>









