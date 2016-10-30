@extends('layouts.app')

@section('title')

    <title>Edit Machine</title>

@endsection

@section('content')


        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/machine'>Machines</a></li>
        <li><a href='/machine/{{$machine->id}}'>{{$machine->machine_name}}</a></li>
        <li class='active'>Edit</li>
        </ol>

        <h1>Edit Machine</h1>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/machine/'. $machine->id) }}">
        <input type="hidden" name="_method" value="patch">
        {!! csrf_field() !!}

        <!-- machine_name Form Input -->
            <div class="form-group{{ $errors->has('machine_name') ? ' has-error' : '' }}">
                <label class="control-label">Machine Name</label>

                    <input type="text" class="form-control" name="machine_name" value="{{ $machine->machine_name }}">

                    @if ($errors->has('machine_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('machine_name') }}</strong>
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