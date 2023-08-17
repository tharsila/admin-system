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
                <li class="breadcrumb-item"><a href="{{ route('empresas.index') }}?tipo={{ $type }}">Listagem de {{ $type }}</a></li>
            </ol>
        </div>
    </div>
@stop
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Entre com os dados</h3>
            </div>
            <div class="card-body"> 
                <form action="{{route('empresas.store')}}" method="post">
                   @include('company.form')
                </form>

            </div>
        </div>
    </div>
    
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}

@stop

@section('js')
   {{--  <script> console.log('Hi!'); </script> --}}
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
   <script>
        $(document).ready(function() {
            $('.celular').mask('(00) 00000-0000');
            $('.telefone').mask('(00) 0000-0000');
            $('.cep').mask('00000-000');

            const field = '.cpf_cnpj';

            $(field).keydown(function() {
                try{
                    $(field).unmask();
                } catch(e) {}
                
                const size = $(field).val().length;
    
                if(size < 11) {
                    $(field).mask('000.000.000-00')
                } else {
                    $(field).mask('00.000.000/0000-00')
                }
                
                const elem = this;
    
                setTimeout(() => {
                    elem.selectionStart = elem.selectionEnd = 10000;
                }, 0);
    
                const currentValue = $(this).val();
                $(this).val('');
                $(this).val(currentValue);
            })
            
            
        });
   </script>
@stop