@extends('adminNew.layout.master')

@section('title', 'Brand')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="title text-center">
                    <h6>Brands</h6>
                </div>
                <a href="{{ route('brand.create') }}" class="btn btn-primary">add</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>icon</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($brands)
                        @foreach ($brands as $brand)
                            <tr>
                                <th scope="row">{{ $brand->id }}</th>
                                <td>{{ $brand->name }}</td>
                                <td><img src="{{ $brand->logo }}" alt="Brand Logo" style="max-width: 50px;"></td>
                                <td>
                                    <a href="{{ route('brand.edit', $brand->id) }}" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $brand->id }}"> Delete </a>
                                </td>
                            </tr>

                            <div class="modal fade" id="exampleModal{{ $brand->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel{{ $brand->id }}">Delete
                                                Confirmation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure to delete?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('brand.destroy', $brand->id) }}" class="btn btn-danger">
                                                Yes</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>no brand</h1>
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>icon</th>
                        <th>action</th>

                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection

@section('script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
