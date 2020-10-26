<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">


</head>
<body>

<div class="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>

    if ($("#empleado-form").length > 0) {
        $("#empleado-form").validate({
 
            rules: {
                nombre: {
                    required: true,
                },
 
                email: {
                    required: true,
                    email: true,
                },

                sexo: {
                    required: true,
                },

                area_id: {
                    required: true,
                },

                descripcion: {
                    required: true,
                },

                rol_id:{
                    required: true,
                },                 
 
            },
            messages: {
 
                nombre: {
                    required: "Por favor introduce el nombre",
                },
                sexo: {
                    required: "El género es requerido",
                },
                email: {
                    required: "Por favor ingrese el correo",
                    email: "El correo no es válido",
                },

                area_id: {
                    required: "Seleccione un área",
                },

                descripcion: {
                    required: "Escriba una descripción",
                },

                rol_id:{
                    required: "Selecciones por lo menos un rol",
                },
 
            },
        })
    } 

</script>
    
</body>
</html>