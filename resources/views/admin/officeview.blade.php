{{--   Original File --}}

@extends('layouts.master')


@section('title')
    Dashboard | HTG EIS
@endsection

@section('content')

  <div>
  {{--      
      <ul>    
          @foreach ($data as $i)
              <li> {{ $i->name}} </li>
          @endforeach
      </ul>
  --}}
  
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Office List </h4>
         </div>

        <div class="col-md-5 align="left">
          <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF </a>

          {{--   <a href="{{ URL::to('/customers/pdf') }}">Export PDF</a> --}}
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table table-stripped">
              <thead class=" text-primary">
                <th class="w-10p">ID</th>
                <th class="w-10p">Name</th>
                <th class="w-10p">Location</th>
                <th class="w-10p">Group ID</th>
              </thead>
              <tbody>
                
                @foreach ($data as $field)
                <tr>
                  <td>{{ $field->id }}</td>
                  <td>{{ $field->name }}</td>

                  <td>
                    <div style="height: 30px overflow:hidden;">
                      {{ $field->location }}
                    </div>
                  </td>
                  <td>{{ $field->grpid }}</td>
                </tr>   
              @endforeach
                                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection


