@section('content')
<h1>Customer List</h1>
<a href="{{ URL::to('/customers/pdf') }}">Export PDF</a>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Location</th>
      <th>GRPID</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $customer)
      <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->location }}</td>
        <td>{{ $customer->grpid }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection