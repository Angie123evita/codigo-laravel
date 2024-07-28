@extends('layout')

@section('title', 'Servicios')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-right">
            <a href="{{ route('servicios.create') }}" class="btn btn-primary"><strong>Nuevo Servicio</strong></a>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <h3>Listado de Servicios</h3>
        </div>
    </div>

    <div class="row">
        @if($servicios->count())
            @foreach($servicios as $servicio)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($servicio->image)
                            <img src="{{ asset('storage/' . $servicio->image) }}" class="card-img-top" alt="{{ $servicio->titulo }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('servicios.show', $servicio) }}">{{ $servicio->titulo }}</a></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="alert alert-info" role="alert">
                    No hay servicios que mostrar
                </div>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-12">
            <div class="pagination-wrapper">
                {{ $servicios->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
