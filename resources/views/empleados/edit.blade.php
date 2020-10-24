@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-12">
                <h1>Editar empleado: </h1>
            </div>
        </div>

        @include('empleados.partials.error')
        
        <form action="{{ route('users.update', $user['id'] ) }}" method="POST">

            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Nombre Completo *</label>
                <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="" placeholder="Nombre completo del empleado" value="{{ $user['nombre'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Correo Electrónico *</label>
                <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="" placeholder="Correo electrónico" value="{{ $user['email'] }}">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                <div class="col-sm-10">
                    
                        @if($user['sexo'] == 'masculino')
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" checked>
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
                        @elseif($user['sexo'] == 'femenino')
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
                                <label class="form-check-label" for="masculino">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="femenino" value="femenino" checked>
                                <label class="form-check-label" for="femenino">
                                    Femenino
                                </label>
                            </div>
                        @endif

                </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <div class="col-sm-2">Área *</div>
                <div class="col-sm-10">
                    <select name="area_id" class="form-control" id="area">
                        @foreach($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                            Deseo recibir boletín informativo
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-2">Roles *</div>
                <div class="col-sm-10">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                            Profesional de proyectos - Desarrollo
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                            Gerente estratégico
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                            Auxiliar administrativo
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    @if($user['boletin'] == 'Si')
                        <div class="form-check">
                            <input name="boletin" class="form-check-input" type="checkbox" id="" value="Si" checked>
                            <label class="form-check-label" for="">
                                Deseo recibir boletín informativo
                            </label>
                        </div>
                    @elseif($user['boletin'] != 'Si')
                        <div class="form-check">
                            <input name="boletin" class="form-check-input" type="checkbox" id="" value="No">
                            <label class="form-check-label" for="">
                                Deseo recibir boletín informativo
                            </label>
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">Descripción *</div>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción de la experiencia del empleado"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>

        </form>

@endsection