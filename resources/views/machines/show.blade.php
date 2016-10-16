@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Machine</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Machine    </div>

    <div class="panel-body">
                
        <form action="{{ url('/machines') }}" method="POST" class="form-horizontal">
                
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="created_at" class="col-sm-3 control-label">Created At</label>
            <div class="col-sm-6">
                <input type="text" name="created_at" id="created_at" class="form-control" value="{{$model['created_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="updated_at" class="col-sm-3 control-label">Updated At</label>
            <div class="col-sm-6">
                <input type="text" name="updated_at" id="updated_at" class="form-control" value="{{$model['updated_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="deleted_at" class="col-sm-3 control-label">Deleted At</label>
            <div class="col-sm-6">
                <input type="text" name="deleted_at" id="deleted_at" class="form-control" value="{{$model['deleted_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="type_id" class="col-sm-3 control-label">Type Id</label>
            <div class="col-sm-6">
                <input type="text" name="type_id" id="type_id" class="form-control" value="{{$model['type_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="user_id" class="col-sm-3 control-label">User Id</label>
            <div class="col-sm-6">
                <input type="text" name="user_id" id="user_id" class="form-control" value="{{$model['user_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="location_id" class="col-sm-3 control-label">Location Id</label>
            <div class="col-sm-6">
                <input type="text" name="location_id" id="location_id" class="form-control" value="{{$model['location_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="machine_name" class="col-sm-3 control-label">Machine Name</label>
            <div class="col-sm-6">
                <input type="text" name="machine_name" id="machine_name" class="form-control" value="{{$model['machine_name'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/machines') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>

        </form>
    

    </div>
</div>







@endsection