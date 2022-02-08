<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    
    <form action="http://localhost/dev/developers-team/web/tasksave" method="post">

        
        


        <fieldset> <legend>Datos tarea</legend>


            <p>Título: <input type="text" name="titulo" value=" <?php echo $_GET['titulo']; ?>"> </p>
            <p>Fecha Inicio:<input type="date" name="fechaInicio" value="<?php echo $_GET['fechainicio']; ?>" id=""></p>
            <p>Fecha Fin:<input type="date" name="fechaFin" value="<?php echo $_GET['fechafin']; ?>" id=""></p>
            <p>Usuario:<input type="text" name="usuario" value="<?php echo $_GET['usuario']; ?>" id=""></p>
            <p>Estado:<input type="text" name="estado" value="<?php echo $_GET['estado']; ?>" id=""></p>
            
            
        </fieldset>
        <input type="submit" value="Enviar">
        <?php  	
        if($_POST)
	    {
	        foreach ($_POST as $clave=>$valor)
   		    {
   		        echo "El valor POST de $clave es: $valor";
   		    }
	    }
        if($_GET)
	    {
	        foreach ($_GET as $clave=>$valor)
            {
                echo "El valor GET de $clave es: $valor";
            }
	    }    
    ?>

    </form>

    
    
</body>
</html>
