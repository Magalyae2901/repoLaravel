<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
</head>
<body>
    <h1>Creación de Tickets</h1>
    <form action="">
        <div class="form-group">
            <label for="usr">Nombre:</label>
            <input type="text" class="form-control" id="nombreT">
        </div>
       
        <p>
            <label for="">Descripcion</label>
            <input type="text" name="DescripT">
        </p>
        <p>
            <label for="">Nivel de Importancia</label>
            <select name="NImportancia" id="NImportancia">
                <option value="0">Seleccione una opción</option>
                <option value="1">Urgente</option>
                <option value="2">Medio</option>
                <option value="3">Bajo</option>
            </select>            
        </p>
        <p>
            <label for="">Fecha</label>
        <input type="text" name="Fecha_Act" value ="{{ date('Y-m-d H:i:s') }}" disabled>
        </p>
    </form>
</body>
</html>