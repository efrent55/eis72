@extends('layouts.master')


@section('title')
    Office Edit | HTG EIS
@endsection



@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card-header">
            <h4 class="card-title"> Office - Edit Data </h4>

            <form action="{{ url('update-office/'.$offices->id) }}" method="POST">

                {{ csrf_field() }}
                {{ method_field('PUT') }}
                        
                <div class="modal-body">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Name:</label>
                      <input type="text" name="name" class="form-control" value="{{ $offices->name }}" >

                    </div>
        
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Location:</label>
                        <input type="text" name="location" class="form-control" value="{{ $offices-> location }}" >
                      </div>
                    
                     <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Group ID:</label>
                        <input type="text" name="grpid" class="form-control" value="{{ $offices-> grpid }}">
                      </div>
                </div>
        
                <div class="modal-footer">
                  <a href="{{url('officemgt')}}" class="btn btn-secondary">BACK</a>
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
        
            </form>

        </div>
    </div>
</div>
@endsection