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
@stop