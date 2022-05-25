<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Modal Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
</head>
<body>
 
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p>
                <center>
                    <h2>Sistem Login Sederhana</h2>
                    Oleh : <a href="https://www.facebook.com.pendeta.mokong" target="_blank">Aris Heryanda</a>
                </center>
            </p>
            <br>
                 <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="proses.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" =>
                                </div>
                                <button name="login" type="submit" class="btn btn-lg btn-success btn-block">login</button>
                                <div class="checkbox">
                                    <label>
                                        Belum punya akun..? <a href="daftar.php">Daftar</a>
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>