@extends('layouts.admin') 
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Artículo</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif 
    </div>
</div>


        {!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true')) !!} 
        {{Form::token()}}
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre..">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="idcategoria">Categoria</label>
                    <select name="idcategoria" class="form-control">
                        @foreach ($categorias as $item)
                            <option value="{{$item->idcategoria}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="Código del articulo..">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" name="stock" required value="{{old('stock')}}" class="form-control" placeholder="Stock del articulo..">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion"  value="{{old('descripcion')}}" class="form-control" placeholder="Descripción del articulo..">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" required  class="form-control">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>

        </div>
        {!!Form::close()!!}

@endsection