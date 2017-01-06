@extends('layouts.app')

@section('title')

    <title>Create a Machine</title>

@endsection

@section('content')

        <ol class='breadcrumb'><li><a href='/'>Home</a></li><li><a href='/machine'>Machines</a></li><li class='active'>Create</li></ol>

        <h2>Create a New Machine</h2>

        <hr/>

        <div id="machine"></div>

        <form class="form" role="form" method="POST" action="{{ url('/machine') }}">

        {!! csrf_field() !!}

        <!-- machine_name Form Input -->
            <div class="form-group{{ $errors->has('machine_name') ? ' has-error' : '' }}">
                <label class="control-label">Machine Name</label>

                    <input type="text" class="form-control" name="machine_name" value="{{ old('machine_name') }}">

                    @if ($errors->has('machine_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('machine_name') }}</strong>
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