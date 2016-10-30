@extends('layouts.app')

@section('title')

    <title>Ticket</title>

@endsection

@section('content')

        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/ticket'>Tickets</a></li>
        <li><a href='/ticket/{{ $ticket->id }}'>{{ $ticket->ticket_name }}</a></li>
        </ol>

        <h1>Ticket Details</h1>

        <hr/>

        <div class="panel panel-default">

                <!-- Table -->
                <table class="table table-striped">
                    <tr>

                        <th>Id</th>
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>


                    <tr>
                        <td>{{ $ticket->id }} </td>
                        <td> <a href="/ticket/{{ $ticket->id }}/edit">
                                {{ $ticket->ticket_name }}</a></td>
                        <td>{{ $ticket->created_at }}</td>

                        <td> <a href="/ticket/{{ $ticket->id }}/edit">

                                <button type="button" class="btn btn-default">Edit</button></a></td>

                        <td>

                        <div class="form-group">

                       <form class="form" role="form" method="POST" action="{{ url('/ticket/'. $ticket->id) }}">
                       <input type="hidden" name="_method" value="delete">
                       {!! csrf_field() !!}

                       <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                            </form>
                       </div>
                       </td>

                    </tr>

                </table>


        </div>

@endsection
@section('scripts')
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
@endsection