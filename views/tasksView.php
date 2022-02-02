<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
            width: 800px;
        }
        th,td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
<!-- <form action="controllers/tasksController.php" method="post"> -->
<form action="index.php" method="post">

<table>
    <tr>
        <th>id</th>
        <th>Título</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Usuario</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>

    



    <?php
    foreach($res as $val){
    ?>
    



    <tr>
        
        <td><?php echo $val["id"]  ?> </td>
        <td><?php echo $val["title"]  ?> </td>
        <td><?php echo $val["startDate"]  ?> </td>
        <td><?php echo $val["endDate"]  ?> </td>
        <td><?php echo $val["user"]  ?> </td>
        <td><?php echo $val["status"]  ?> </td>
        <td><a href="views/taskDetails.php?id=<?php echo $val['id'] ?>"></a>Editar</td>
    </tr>
    <?php
    }
?>

</table>
<!-- <input type="hidden" name="accion" value="insertar"> -->

<!-- <input type="submit" value="Edit"> -->

<button type="submit" name="editar">
    Editar 
   
</button>

<button type="submit" name="eliminar">
    Eliminar 
   
</button>

<button type="submit" name="insertar">
    Insertar 
    
</button>


</form>


</body>
</html>