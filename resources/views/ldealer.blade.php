@extends('layouts.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Ecommerce @endslot
            @slot('li_3') List @endslot
            @slot('title') Listado Dealer @endslot
        @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Tipo de usuario</th>
                            <th>Subs</th>
                            <th>Creditos</th>
                            <th>Dealer</th>
                            <th>Estatus</th>
                            <th>Fecha de registro</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>                       
                        </tbody>
                    </table>
                </div>
            </div> <!-- end col -->
        </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script>
        $('#datatable').DataTable({
            processing: false,
            serverSide: false,
            ajax: {
                url: '{{ route('suscriptores-list') }}',
                type: 'GET'
            },
            order: [[1, 'asc']],
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nombre', name: 'nombre' },
                { data: 'email', name: 'email' },
                { data: 'status', name: 'status' },
                { data: 'status', name: 'status' },
                { data: 'status', name: 'status' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' }
            ],
            responsive: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json',

            }
        });
    </script>
@endsection
