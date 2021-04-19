<?php
    include_once("connect.php");
    $result = mysqli_query($mysqli, "SELECT *FROM pasien ORDER BY kd_pasien DESC");
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
            <link rel="stylesheet" type="text/css"  href="stylecss.css">
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <title>Data Lengkap Pasien</title>
                        
    </head>
    <body>
        <div class="header">
            <h1>KLINIK SAPTO</h1>
        </div>
        <div id="viewport">
            <!-- Content -->
            <div id="content">
                <div class="container-fluid">
                <p class="data">DAFTAR PASIEN</p>
                <a href="Add_pasien.php" class="btn btn-primary">ADD USER</a>

                <form action="" method="POST">
                    <table class="table table-bordered table-striped"  cellspacing="2" cellpadding="4">
                        <tr style="text-align:center;background-color:#1abc9c;">
                            <th>No_Pasien</th> <th>NAMA</th> <th>J_Kelamin</th> <th>USIA</th> <th>GolDar</th> <th>kd_Poli</th> 
                            <th>kd_jkn</th> <th>Tanggal</th> <th>Alamat</th> <th>No.TELP</th> <th>OPTION</th>
                        </tr>

                    <?php
                    while($userData = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>".$userData['no_pasien']."</td>";
                        echo "<td>".$userData['nama_pasien']."</td>";
                        echo "<td>".$userData['jk']."</td>";  
                        echo "<td>".$userData['usia']."</td>";
                        echo "<td>".$userData['goldar']."</td>";  
                        echo "<td>".$userData['no_poli']."</td>";  
                        echo "<td>".$userData['no_jkn']."</td>";
                        echo "<td>".$userData['tgl']."</td>";  
                        echo "<td>".$userData['alamat']."</td>";  
                        echo "<td>".$userData['telp']."</td>";
                        echo "<td><a href='edit_pasien.php?kd_pasien=$userData[kd_pasien]' class='badge badge-warning'>Edit</a> | 
                          <a href='delete_pasien.php?kd_pasien=$userData[kd_pasien]' class='badge badge-danger' onclick='return confirm(\"Data akan dihapus secara Permanen !!\")'>Delete</a></td></tr>"
                    ;}
                    ?>
                    </table>
                </form>
                    <footer id="footer">
                        <p>&copy;  SAPTO WIBOWO - 183112706450118 - <?php echo date("Y");?> All Right Reserved </p>
                    </footer>
                </div>
            </div>
        </div>
        
        <div id="sidebar">
          <header>
            <a href="#">Menu</a>
          </header>
          <ul class="list-unstyled">
            <li class="nav">
              <a href="dashboard.php">HOME</a>
            </li>
            <li class="nav">
              <a href="data_pasien.php">DATA PASIEN</a>
            </li>
            <li class="nav">
              <a href="data_poliklinik.php">DATA POLIKLINIK</a>
            </li>
            <li class="nav">
              <a href="data_jaminan.php">DATA JAMINAN</a>
            </li>
            <li class="nav">
              <a href="pasien.php">PENDAFTARAN PASIEN</a>
            </li>
          </ul>                        
        </div>
           
    </body>
</html>
