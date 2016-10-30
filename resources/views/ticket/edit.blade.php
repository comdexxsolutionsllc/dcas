@extends('layouts.app')

@section('title')

    <title>Edit Ticket</title>

@endsection

@section('content')


        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/ticket'>Tickets</a></li>
        <li><a href='/ticket/{{$ticket->id}}'>{{$ticket->ticket_name}}</a></li>
        <li class='active'>Edit</li>
        </ol>

        <h1>Edit Ticket</h1>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/ticket/'. $ticket->id) }}">
        <input type="hidden" name="_method" value="patch">
        {!! csrf_field() !!}

        <!-- ticket_name Form Input -->
            <div class="form-group{{ $errors->has('ticket_name') ? ' has-error' : '' }}">
                <label class="control-label">Ticket Name</label>

                    <input type="text" class="form-control" name="ticket_name" value="{{ $ticket->ticket_name }}">

                    @if ($errors->has('ticket_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('ticket_name') }}</strong>
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