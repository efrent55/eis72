<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
  </head>
<body>
  {{--  
  <h1>{{ $heading}}</h1>
  <div>
     <p>{{$content}}</p>
  </div>
  --}}
  <h1>Office List</h1>
  <table>
    <thead> 
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
        <th>GRP ID</th>
      </tr>
    </thead>

  <tbody>
  {{--  
    <tr>
       <th>{{ $content }}</th> 
       <th>Name</th>
       <th>Location</th>
       <th>GRP ID</th>
     </tr>
    
   --}}

   @foreach($data as $field)
      <tr>
        <td>{{ $field->id }}</td>
         <td>{{ $field->name }}</td>
         <td>{{ $field->location }}</td>
         <td>{{ $field->grpid }}</td>
        </tr>   
    @endforeach
    
  </tbody>
  </table> 
 </body>
</body>
</html>