<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        
        <br/>
        <br/>
        <form method="post" action="cek_login.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Masukkan username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Masukkan password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
            </table>
            <?php
            if(isset($_GET['msg'])){
                if($_GET['msg'] == "gagal"){
                    echo "Login gagal! username dan password salah!";
                }else if($_GET['msg'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['msg'] == "belum_login"){
                    echo "Anda harus login untuk mengakses halaman dashboard";
                }
            }    
        ?>
        </form>
    </body>
</html>