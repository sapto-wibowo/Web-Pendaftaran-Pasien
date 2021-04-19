<?php
    include_once("connect.php");
    $result = mysqli_query($mysqli, "SELECT *FROM jaminan ORDER BY kd_jaminan DESC");
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
            <link rel="stylesheet" type="text/css"  href="stylecss.css">
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <title>Data Jaminan</title>
                        
    </head>
    <body>
        <div class="header">
            <h1>KLINIK SAPTO</h1>
          </div>
        <div id="viewport">
            <!-- Content -->
            <div id="content">
                <div class="container-fluid">
                <p class="data">DATA JAMINAN</p>
                <?php
                    include_once("add_jaminan.php");
                ?>

                  <table class="table table-bordered table-striped"  cellspacing="2" cellpadding="4">
                      <tr style="text-align:center;background-color:#1abc9c;">
                      <th>Kd_Jaminan</th> <th>Asuransi</th> <th>Call Center</th> <th>OPTION</th>
                      </tr>

                      <?php
                      while($userData = mysqli_fetch_array($result)){
                          echo "<tr>";
                          //echo "<td>.$no++"
                          echo "<td>".$userData['no_jkn']."</td>";
                          echo "<td>".$userData['asuransi']."</td>";
                          echo "<td>".$userData['call_center']."</td>";    
                          echo "<td><a href='edit_jaminan.php?kd_jaminan=$userData[kd_jaminan]' class='badge badge-warning'>Edit</a> | 
                          <a href='delete_jaminan.php?kd_jaminan=$userData[kd_jaminan]' class='badge badge-danger' onclick='return confirm(\"Data akan dihapus secara Permanen !!\")'>Delete</a></td></tr>";}
                        
                        ?>
                    </table>
                
                    <footer id="footer">
                        <p>&copy;  SAPTO WIBOWO - 183112706450118 - <?php echo date("Y");?> All Right Reserved </p>
                    </footer>
                </div>
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
              <a href="Add_pasien.php">PENDAFTARAN PASIEN</a>
            </li>
          </ul>                        
        </div>
           
    </body>
</html>
