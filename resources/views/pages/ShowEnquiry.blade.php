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





   
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
