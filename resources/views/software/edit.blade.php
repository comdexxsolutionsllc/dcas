@extends('layouts.app')

@section('title')

    <title>Edit Software</title>

@endsection

@section('content')


        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/software'>Softwares</a></li>
        <li><a href='/software/{{$software->id}}'>{{$software->software_name}}</a></li>
        <li class='active'>Edit</li>
        </ol>

        <h1>Edit Software</h1>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/software/'. $software->id) }}">
        <input type="hidden" name="_method" value="patch">
        {!! csrf_field() !!}

        <!-- software_name Form Input -->
            <div class="form-group{{ $errors->has('software_name') ? ' has-error' : '' }}">
                <label class="control-label">Software Name</label>

                    <input type="text" class="form-control" name="software_name" value="{{ $software->software_name }}">

                    @if ($errors->has('software_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('software_name') }}</strong>
                                    </span>
                    @endif

            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Edit
                    </button>
            </div>

        </form>


@endsection