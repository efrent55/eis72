@extends('layouts.master')


@section('title')
    Equipment Issuance | HTG EIS
@endsection



@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Office</h5>
          <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
          
          
    </div>

    <form action="/save-issued-equip" method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Equipment Serial Number</label>
              <input type="text" name="Serial Nr" class="form-control" id="recipient-name">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Description:</label>
                <input type="text" name="location" class="form-control" id="recipient-name">
              </div>
            
             <div class="form-group">
                <label for="recipient-name" class="col-form-label">Group ID:</label>
                <input type="text" name="grpid" class="form-control" id="recipient-name">
              </div>
        </div>

        <div class="modal-footer">
          <a href="/load-issuancetran" class="btn btn-danger">Close</a>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </div>


    </form>
        
      </div>
    </div>
  </div>
  


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Transaction  
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal2" >View List</button>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >   Add Equipment  </button>         
          </h4>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <style>
          .w-10p{
            width: 10% !important;
          }
        </style>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table">
              <thead class=" text-primary">
                <th class="w-10p">ID</th>
                <th class="w-10p">Serial Nr</th>
                <th class="w-10p">Description</th>
              </thead>
              <tbody>
                
                @foreach ($data as $field)
                <tr>
                  <td>{{ $field->id }}</td>
                  <td>{{ $field->serialnr }}</td>
                  <td>{{ $field->description }}</td>
                  
                  <td>
                    <a href="/load-personaltransaction/{{$field->id}}" class="btn-success">Issue</a>
                  </td>

                  {{--  
                  <td>
                    <form action = "delete-office/{{$field->id}}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    
                      <button type="submit" class="btn btn-danger">DELETE</button>
                    </form> 
                  </td>
                   --}}
                </tr>   
               @endforeach
                                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection


@section('scripts')

  <!-- Script from .net Efren -->
  <script>
      $(document).ready( function () {
      $('#datatable').DataTable();
        } );

  </script>

  <!--- End -->

@endsection
