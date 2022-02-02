<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <fieldset> <legend>Datos tarea</legend>


            <p>Título: <input type="text" name="titulo"> </p>
            <p>Fecha Inicio:<input type="date" name="fechaInicio" id=""></p>
            <p>Fecha Fin:<input type="date" name="fechaFin" id=""></p>
            <p>Usuario:<input type="text" name="usuario" id=""></p>
            <p>Estado:<input type="text" name="estado" id=""></p>
            <input type="hidden" name="accion" value="insertar">
            
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>