@extends('adminlte::page')

@section('title', 'Investigador')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Investigador</h1>
@stop

@section('content')


<div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Registrar Investigador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Investigadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Crear cuenta</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            <div class="card">
                <div class="card-header">
                  <h4 class="modal-title">Registrar Nuevo Investigador</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" action="{{route('investigador.store')}}" method="POST">
                      @csrf
                      <div class="card-body">
                          <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre..." name="nombre" value="{{old('nombre')}}">
                              @error('nombre')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="apPaterno">Apellido Paterno</label>
                              <input type="text" class="form-control" id="apPaterno" placeholder="Ingrese apellido paterno" name="apPaterno" value="{{old('apPaterno')}}">
                              @error('apPaterno')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="apMaterno">Apellido Materno</label>
                              <input type="text" class="form-control" id="apMaterno" placeholder="Ingrese apellido materno" name="apMaterno" value="{{old('apMaterno')}}">
                              @error('apMaterno')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="tipoUsuario">Tipo Usuario del Sistema</label>
                              <input type="text" class="form-control" id="tipoUsuario" placeholder="Ingrese tipo usuario" name="tipoUsuario" value="{{old('tipoUsuario')}}">
                              @error('tipoUsuario')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" class="form-control" id="email" placeholder="Ingrese email" name="email" value="{{old('email')}}">
                              @error('email')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="tipoDocumento">Tipo Documento</label>
                              <input type="text" class="form-control" id="tipoDocumento" placeholder="Ingrese tipo documento" name="tipoDocumento" value="{{old('tipoDocumento')}}">
                              @error('tipoDocumento')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="nroDocumento">Nro de Documento</label>
                              <input type="text" class="form-control" id="nroDocumento" placeholder="Ingrese nro de documento" name="nroDocumento" value="{{old('nroDocumento')}}">
                              @error('nroDocumento')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="pais">pais</label>
                              <input type="text" class="form-control" id="pais" placeholder="Ingrese pais" name="pais" value="{{old('pais')}}">
                              @error('pais')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="genero">Genero</label>
                              <input type="text" class="form-control" id="genero" placeholder="Ingrese genero" name="genero" value="{{old('genero')}}">
                              @error('genero')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="estado">Estado</label>
                              <input type="text" class="form-control" id="estado" placeholder="Ingrese estado" name="estado" value="{{old('estado')}}">
                              @error('estado')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="direccion">Direccion</label>
                              <input type="text" class="form-control" id="direccion" placeholder="Ingrese direccion" name="direccion" value="{{old('direccion')}}">
                              @error('direccion')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="telefono">Telefono</label>
                              <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono" name="telefono" value="{{old('telefono')}}">
                              @error('telefono')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="formacion_academica_id">Formacion Academica</label>
                              <input type="text" class="form-control" id="formacion_academica_id" placeholder="Ingrese formacion academica" name="formacion_academica_id" value="{{old('formacion_academica_id')}}">
                              @error('formacion_academica_id')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="area_id">Area</label>
                              <input type="text" class="form-control" id="area_id" placeholder="Ingrese area" name="area_id" value="{{old('area_id')}}">
                              @error('area_id')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                          <button type="submit" class="btn btn-info">Guardar</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Investigadores</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                        <th>Tipo Usuario</th>
                        <th>Tipo Documento</th>
                        <th>Nro Documento</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($investigadores as $investigador)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$investigador->nombre}}</td>
                                <td>{{$investigador->apPaterno}}</td>
                                <td>{{$investigador->apMaterno}}</td>
                                <td>{{$investigador->tipoUsuario}}</td>
                                <td>{{$investigador->tipoDocumento}}</td>
                                <td>{{$investigador->nroDocumento}}</td>
                                <td>
                                    <form action="{{ route('investigador.destroy',$investigador) }}" method="POST">
        
                                        <a class="btn btn-info" href="{{ route('investigador.show',$investigador) }}">Ver</a>
        
                                        <a class="btn btn-primary" href="{{ route('investigador.edit',$investigador) }}">Editar</a>
        
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-confirm" id="button-delete" class="button delete-confirm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('#button-delete').on('click',function(e){
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: '¿Seguro que quiere eliminar?',
            text: "¡No podrás revertir esto!",
            type: 'Cuidado',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar'
        }).then((result) => {
            if (result.value) {

                form.submit();
            }
        });
    });
    </script>
@stop
