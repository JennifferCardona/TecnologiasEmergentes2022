@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Product:</strong>
                            {{ $producto->cod_product }}
                        </div>
                        <div class="form-group">
                            <strong>Nameprod:</strong>
                            {{ $producto->nameProd }}
                        </div>
                        <div class="form-group">
                            <strong>Descprod:</strong>
                            {{ $producto->descProd }}
                        </div>
                        <div class="form-group">
                            <strong>Typeprod:</strong>
                            {{ $producto->typeProd }}
                        </div>
                        <div class="form-group">
                            <strong>Costunit:</strong>
                            {{ $producto->costUnit }}
                        </div>
                        <div class="form-group">
                            <strong>Cantexist:</strong>
                            {{ $producto->cantExist }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
