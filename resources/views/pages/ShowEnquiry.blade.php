



   
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
     
    
</head>
<body>
    @extends('dashboard')
@section('content')
    <h1>User Enquiries</h1>

    @if($enquiries->isEmpty())
        <p>No enquiries found.</p>
    @else
      
<table id="dataTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($enquiries as $enquiry)
                    <tr>
                        <td>{{ $enquiry->name }}</td>
                        <td>{{ $enquiry->number }}</td>
                        <td>{{ $enquiry->email }}</td>
                        <td>{{ $enquiry->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection


    
</body>

  
<script src="cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="js/scripts.js"></script>

 
</html>
