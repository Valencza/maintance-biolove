    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>registrasi</title>
    </head>
    <style>
        
        .body{
            background-color:#d5f0ff;
            margin: 40px;
        }
        h2{
            font-family : 'Gidugu';
        }
        .form-label{
            font-family : 'Gidugu';
            color : #6b6b6b;
        }
        .form-control{
            border-radius: 20px;
            height : 35px;
        }
        .btn{
            border-radius: 15px;
            height: 35px;
            width: 285px;
            background-color:#6b6b6b;
        }
    </style>
    <br>
    <body class="body">
        <div class="table-responsive">
            <h2 align="center" class="h1"><b>Registrasi</b></h2><br><Br>
                <form method="post" action="submit_register.php">
                    <div class="container"> 
                        <div class="row justify-content-center">
                        <div class="col-md-3">
                        <table border="0" class="table-responsive" >

                        <tr>
                            <label for="formGroupExampleInput" class="form-label">Username :</label>
                            <input name="username" type="text" class="form-control form-control-sm" id="" placeholder="" style="width: 300px;">
                        </tr>
                        <tr>
                            <label for="formGroupExampleInput" class="form-label">Password :</label>
                            <input name="pass1" type="password" class="form-control form-control-sm" id="" placeholder="" style="width: 300px;">
                        </tr>
                        <tr>
                            <label for="formGroupExampleInput" class="form-label">Ulangi password :</label>
                            <input name="pass2" type="password" class="form-control form-control-sm" id="" placeholder="" style="width: 300px;">
                        </tr>
                        <tr>
                            <label for="formGroupExampleInput" class="form-label">Nama Lengkap :</label>
                            <input name="nama_lengkap" type="text" class="form-control form-control-sm" id="" placeholder="" style="width: 300px;">
                        </tr>
                        <tr>
                            <label for="formGroupExampleInput" class="form-label">Email/No.Telpon :</label>
                            <input name="email_no_telp" type="text" class="form-control form-control-sm" id="" placeholder="" style="width: 300px;">
                        </tr>
                        <br>
                        <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" name="Submit" value="Daftar" class="btn btn-dark" ></td><br>
                            </tr>
                        </table>
                    </div>
                </div>
                </div>

                <?php
                echo "<br><p align='center'>sudah memiliki akun? <a href='login.php'>Login disini</a></p>"
                ?>

            </form>
        </div>
    </body>
    </html>