 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Testimonials</title>

     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />


 </head>

 <body>
     @extends('dashboard')
     @section('content')
         <h1>Show Testimonials</h1>

         {{-- @if ($enquiries->isEmpty())
            <p>No enquiries found.</p>
        @else --}}
         <table id="testim" class="table table-striped table-bordered">
             <thead>
                 <tr>
                     <th>Name</th>
                     <th>Number</th>
                     <th>Email</th>
                     <th>Message</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($testimonials as $testimonial)
                     <tr>
                         {{-- <td>m21

                     </td><td>m21

                     </td><td>m21

                     </td><td>m21 

                         {{-- </td> --}}
                         <td>{{ $testimonial->name }}</td>
                         <td>{{ $testimonial->number }}</td>
                         {{-- <td>{{ $testimonial->email }}</td> --}}
                         <td>gfxf</td>
                         <td>{{ $testimonial->message }}</td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
         {{-- @endif --}}

         <script>
             $(document).ready(function() {
                 $('#testim').DataTable();
             });
         </script>
     @endsection



 </body>

 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
 <script src="js/scripts.js">
     let table = new DataTable('#testim', {

     });
 </script>


 </html>
