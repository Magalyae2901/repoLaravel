<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Tickets</title>
</head>
<body>
    <div class="container">
        <h1>Creación de Tickets</h1>
        
        <form method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                <label for="usr">Nombre:
                <input type="text" class="form-control" id="nombreT"></label>
                </div>
                <div class="form-group">
                <label for="">Descripcion
                <input type="text" class="form-control"  name="DescripT"></label>
                </div>
            <div class="form-group">
                <label for="">Nivel de Importancia
                <select name="NImportancia" id="NImportancia" class="form-control">
                    <option value="0">Seleccione una opción</option>
                    <option value="1">Urgente</option>
                    <option value="2">Medio</option>
                    <option value="3">Bajo</option>
                </select>   </label>         
            </div>
            <div class="form-group">
                <label for="">Fecha
            <input type="text" name="Fecha_Act" class="form-control" value ="{{ date('Y-m-d H:i:s') }}" disabled></label>
            </div>
            <input class = "btn btn-primary" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>