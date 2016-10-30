@extends('layouts.app')

@section('title')

    <title>Create a Software</title>

@endsection

@section('content')

        <ol class='breadcrumb'><li><a href='/'>Home</a></li><li><a href='/software'>Softwares</a></li><li class='active'>Create</li></ol>

        <h2>Create a New Software</h2>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/software') }}">

        {!! csrf_field() !!}

        <!-- software_name Form Input -->
            <div class="form-group{{ $errors->has('software_name') ? ' has-error' : '' }}">
                <label class="control-label">Software Name</label>

                    <input type="text" class="form-control" name="software_name" value="{{ old('software_name') }}">

                    @if ($errors->has('software_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('software_name') }}</strong>
                                    </span>
                    @endif

            </div>


            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Create
                    </button>
            </div>

        </form>

@endsection