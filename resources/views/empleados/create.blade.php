<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Crear empleado</h1>
        </div>
        <div class="col-md-12">
            <div class="alert alert-info text-center" role="alert">
                Los campos con asterisco (*) son obligatorios
            </div>
        </div>
    </div>
    <form>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nombre Completo *</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="" placeholder="Nombre completo del empleado">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Correo Electrónico *</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="" placeholder="Correo electrónico">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino">
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="femenino" value="femenino">
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
                <select name="area" class="form-control" id="area">
                <option value="administración">Administración</option>
                <option value="calidad">Calidad</option>
                <option value="producción">Producción</option>
            </select>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-2">Roles *</div>
            <div class="col-sm-10">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="">
                    <label class="form-check-label" for="">
                        Deseo recibir boletín informativo
                    </label>
                </div>

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
            <div class="col-sm-2">Descripción *</div>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción de la experiencia del empleado"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>