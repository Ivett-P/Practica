@extends('plantilla')
@section('contenido')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de productos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>Q. {{ $product->precio }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->cantidad }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <a href="{{ route('productos.editar', $product->id) }}"
                                class="btn btn-warning" title="Editar"><i>
                                class="fas fa-user-edit"></i></a>
                        </td>
                        <td>
                            <a href="{{ route('productos.eliminar', $product->id) }}"
                                class="btn btn-danger" title="Eliminar"><i>
                                class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection