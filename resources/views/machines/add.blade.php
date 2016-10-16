@extends('crudgenerator::layouts.master')

@section('content')


    <h2 class="page-header">Machine</h2>

    <div class="panel panel-default">
        <div class="panel-heading">
            Add/Modify Machine
        </div>

        <div class="panel-body">

            <form action="{{ url('/machines') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="type_id" class="col-sm-3 control-label">Type Id</label>
                    <div class="col-sm-2">
                        <input type="number" name="type_id" id="type_id" class="form-control" value="{{$model['type_id'] or ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_id" class="col-sm-3 control-label">User Id</label>
                    <div class="col-sm-2">
                        <input type="number" name="user_id" id="user_id" class="form-control" value="{{$model['user_id'] or ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="location_id" class="col-sm-3 control-label">Location Id</label>
                    <div class="col-sm-2">
                        <input type="number" name="location_id" id="location_id" class="form-control" value="{{$model['location_id'] or ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="machine_name" class="col-sm-3 control-label">Machine Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="machine_name" id="machine_name" class="form-control" value="{{$model['machine_name'] or ''}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus"></i> Save
                        </button>
                        <a class="btn btn-default" href="{{ url('/machines') }}"><i
                                    class="glyphicon glyphicon-chevron-left"></i> Back</a>
                    </div>
                </div>
            </form>

        </div>
    </div>






@endsection