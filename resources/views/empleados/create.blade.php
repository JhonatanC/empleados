@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Nuevo empleado</h1>
        </div>
        <div class="col-md-12">
            <div class="alert alert-info text-center" role="alert">
                Los campos con asterisco (*) son obligatorios
            </div>
        </div>
    </div>

    @include('empleados.partials.error')

    <form action="{{ route('users.store' ) }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nombre Completo *</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="" placeholder="Nombre completo del empleado">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Correo Electrónico *</label>
            <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="" placeholder="Correo electrónico">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="femenino" value="femenino">
                    <label class="form-check-label" for="femenino">
                        Femenino
                    </label>
                </div>
            </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <div class="col-sm-2">Área *</div>
            <div class="col-sm-10">
                <select name="area_id" class="form-control" id="area">
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">Descripción *</div>
            <div class="col-sm-10">
                <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción de la experiencia del empleado"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input name="boletin" class="form-check-input" type="checkbox" id="" value="Si">
                    <label class="form-check-label" for="">
                        Deseo recibir boletín informativo
                    </label>
                </div>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-2">Roles *</div>
            <div class="col-sm-10">

                @foreach($roles as $rol)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="rol_id[]" id="" value="{{ $rol->id }}">
                        <label class="form-check-label" for="">
                            {{ $rol->nombre }}
                        </label>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>

@endsection