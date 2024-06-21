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
            @slot('title') Logo @endslot
        @endcomponent

        <div class="row">
            <div class="col-12">

                <div class="mb-3 row d-none">
                    <label class="form-label col-sm-2 align-self-centeralign-self-center mb-lg-0 text-end" for="exampleFormControlSelect1">Categoria 2</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="exampleFormControlSelect1">
                            <option>seleccione</option>
                            <option>peliculas</option>
                            <option>Series</option>
                            <option>Series Ingles</option>
                            <option>Adultos</option>
                            <option>LiveTV</option>
                            <option>24/7</option>
                            <option>ppv</option>
                            <option>peliculas Ingles</option>
                        </select>
                    </div>
                    
                </div>


            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nombre</th>
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
                { data: 'action', name: 'action' }
            ],
            responsive: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json',

            }
        });
    </script>
@endsection
