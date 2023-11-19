<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    body{
        background-color:#d5f0ff;
        margin: 70px;
    }
    h2{
        font-family : 'Gidugu';
    }
    .form-control{  
            border-radius: 20px;
            height : 40px;
            font-family : 'Gidugu';
            font-size : 17px;
    }
    .btn{
            border-radius: 20px;
            height: 40px;
            width: 285px;
            background-color:#6b6b6b;
            font-family : 'Gidugu';
    }
</style>
<body>
    <br><br><br><br>
    <h2 align="center"><b>Login</b></h2><br><br>
    <form method="post" action="submit_login.php">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <table border="0">
                        <tr>
                            <input name="username" type="text" class="form-control form-control-sm" id="username" placeholder="Username" style="width: 300px;">
                        </tr>
                        <br>
                        <tr>
                            <input name="password" type="password" class="form-control form-control-sm" id="password" placeholder="Password" style="width: 300px;">
                        </tr>
                        <tr>
                            <td>&nbsp;</td><br>
                            <td><input type="submit" name="Submit" value="Submit" class="btn btn-dark"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php
         echo "<br><p align='center'>Belum memiliki akun? <a href='registrasi.php' style='text-decoration: none;'>Daftar disini</a></p>";
        ?>

    </form>
</body>
</html>
