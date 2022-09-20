


<form action="action= {{route('productos.update', $prodc->id) }}" method="POST" enctype="multipart/form-data">
@method('PUT')    
@csrf
<div class="card-body">
            <div class="form-group">
                <label for="nombre">Nombre del producto</label>
                <input type="text" class="form-control" id="nombre" placeholder="Digite nombre" value="{{$prodc->nombre}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" placeholder="..." value="{{$prodc->descripcion}}">
            </div>
            
                <div class="col-sm-12">
                    <label for="precio">Precio</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Q</span>
                        </div>
                        <input type="number" id="precio" name="precio" class="form-control required" value="{{$prodc->precio}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" placeholder="Digite cantidad" value="{{$prodc->cantidad}}">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

</form>