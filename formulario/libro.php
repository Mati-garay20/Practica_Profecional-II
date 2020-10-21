<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
        <script type="text/javascript" scr="css/js/bootstrap.min.js"> </script>
        <script type="text/javascript" scr="css/js/jquery-3.1.0.min.js"> </script>

    </head>

    <body>
    <div align= "center">
    
    <br> <br> <br>
    <h2> <b> Devolución de los datos ingresados </b> </h2>
    <u> ____________________________________________________________________________</u>

    <h3>
    <br>
    <?php 

        echo "Título: ";  echo $_POST["titulo"], "<br>"; 
        echo "Autor: "; echo $_POST ["autor"], "<br>";
        echo "Editorial: "; echo $_POST["editorial"], "<br>";
        echo "Año: "; echo $_POST["año"], "<br>";
        echo "Descripción: "; echo $_POST["contenido"], "<br>";




    ?>
    </h3>
    <br>
    <u> ____________________________________________________________________________</u>

    </body>
</html>


