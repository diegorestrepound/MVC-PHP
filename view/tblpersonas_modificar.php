<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta htt-equiv="contet-type" content="text/html; charset=utf-8"/>
        <title>Modificar registro </title>
    </head>
    <body>
        <h1>Modificar registro</h1>    
        <form name="form1" method="POST" action="index.php?accion=guardarCambios">
            <p>Id: <input type="text" name="txtid"></p>
            <p>Nombre: <input type="text" name="txtnombre"></p>
            <p>Edad: <input type="text" name="txtedad"></p>
            <p><input type="submit" name="btnguardar" value="Guardar Cambios"></p>
        </form>
        <br>
        <a href="index.php">Volver</a>
    </body>
</html>