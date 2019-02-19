<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LOGGIN-TIENDA</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css"  href="../css/estilos.css">
    </head>
    <body>
        
        <div class="container">
            <div class="alert alert-danger" role="alert">
               <h3>{if !empty($msj)}{$msj}{/if}</h3>
            </div>
            <fieldset>
                <legend>Autenticate</legend>
                <form action="loggin.php" method="POST" >
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Usuario</label>
                        <div class="col-sm-5">
                            <input type="text" name="user" class="form-control form-control-sm" id="colFormLabelSm" placeholder="usuario">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-5">
                            <input type="password" name="pass" class="form-control" id="colFormLabel" placeholder="****">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <input type="submit" class="btn btn-primary" id="colFormLabelLg" placeholder="col-form-label-lg" name="conectar" value="Conectar">
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </body>
</html>