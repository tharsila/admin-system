@extends('adminlte::page')

@section('title', "Listagem de {$type}")


@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">
                @yield('title')
            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('empresas.index') }}?tipo={{ $type}}">Listagem de {{ $type }}</a></li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body"> 
                <div class="table-responsive ">
                    <input type="hidden" id="tipo" value="{{ $type }}">
                    <table class="table table-bordered table-striped text-nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Nome</th>
                                <th>Razão Social</th>
                                <th>Documento</th>
                                <th>Inscrição Estadual ou RG</th>
                                <th>Nome Contato</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>CEP</th>
                                <th>Logradouro</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>Obs</th>
                                <th width="105px">Action</th>
                            </tr>
                        </thead>
                    </table>

                </div>

            </div>
        </div>
    </div>
    

@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
@stop

@section('js')
   {{--  <script> console.log('Hi!'); </script> --}}
   <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript">
        $(function () {
            const tipo = $('#tipo').val();
            const table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('empresas.index') }}?tipo=" + tipo,
                responsive: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.5/i18n/pt-BR.json',
                },
                columns: [
                    {
                        data: 'id', name: 'id',
                    },
                    {
                        data: 'tipo' , name: 'tipo',
                    },
                    {
                        data: 'nome' , name: 'nome',
                    },
                    {
                        data: 'razao_social', name: 'razao_social',
                    },
                    {
                        data: 'documento', name: 'documento',
                    },
                    {
                        data: 'ie_rg', name: 'ie_rg',
                    },
                    {
                        data: 'nome_contato', name: 'nome_contato',
                    },
                    {
                        data: 'celular', name: 'celular',
                    },
                    {
                        data: 'email', name: 'email',
                    },
                    {
                        data: 'telefone', name: 'telefone',
                    },
                    {
                        data: 'cep', name: 'cep',
                    },
                    {
                        data: 'logradouro', name: 'logradouro',
                    },
                    {
                        data: 'cidade', name: 'cidade',
                    },
                    {
                        data: 'estado', name: 'estado',
                    },
                    {
                        data: 'observacao', name: 'observacao',
                    },
                    {
                        data: 'action', name: 'action', orderable: false, searchable: false,
                    },
                ]
            })
        }) 
    </script>
@stop