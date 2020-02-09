<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta htt-equiv="contet-type" content="text/html; charset=utf-8"/>
        <title>Ejemplo 1 MVC</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th> id </th>
                    <th> Nombre </th>
                    <th> Edad </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consulta as $datos): ?>
                <tr>
                    <td><?php print $datos['id']; ?></td>
                    <td><?php print $datos['nombre']; ?></td>
                    <td><?php print $datos['edad']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        <br>
        <a href="index.php?accion=nuevo">Nuevo registro</a>
        <br>
        <a href="index.php?accion=modificar">Modificar Registro</a>
        <br>
        <a href="index.php?accion=eliminar">Eliminar Registro</a>
    </body>
</html>