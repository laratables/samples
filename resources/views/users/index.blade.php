@extends('layouts.main')
@section('scripts')
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#users-table').DataTable({
                "order": [[0, 'desc']],
                serverSide: true,
                ajax: "{{ route('datatables') }}",
                columns: [
                    { name: 'name' },
                    { name: 'email' },
                    { name: 'created_at' },
                ]
            });
        });
    </script>
@endsection
@section('styles')
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table id="users-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
