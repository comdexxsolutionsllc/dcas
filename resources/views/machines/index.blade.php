@extends('crudgenerator::layouts.master')

@section('content')


<h2 class="page-header">{{ ucfirst('machines') }}</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        List of {{ ucfirst('machines') }}
    </div>

    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                                        <th>Id</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Deleted At</th>
                                        <th>Type Id</th>
                                        <th>User Id</th>
                                        <th>Location Id</th>
                                        <th>Machine Name</th>
                                        <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <a href="{{url('machines/create')}}" class="btn btn-primary" role="button">Add machine</a>
    </div>
</div>




@endsection



@section('scripts')
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "responsive": true,
                "ajax": "{{url('machines/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{url('machines/show')}}/'+row[0]+'">'+data +'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{url('machines/update')}}/'+row[0]+'" class="btn btn-default">Update</a>';
                        },
                        "targets": 8                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{url('machines/delete')}}" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": 8+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax('{{url('machines/delete')}}/'+id).success(function() {
                theGrid.ajax.reload();
               });
                
            }
            return false;
        }
    </script>
@endsection