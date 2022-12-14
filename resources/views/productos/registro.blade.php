@extends('plantilla')
@section('contenido')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Registro de productos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('productos.guardar')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nombre">Nombre del producto</label>
                <input type="text" class="form-control" id="nombre" placeholder="Digite nombre">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" placeholder="...">
            </div>
            
                <div class="col-sm-12">
                    <label for="precio">Precio</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Q</span>
                        </div>
                        <input type="number" id="precio" name="precio" class="form-control required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" placeholder="Digite cantidad">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection