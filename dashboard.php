<?php
   session_start();
   if (empty($_SESSION['username'])){
    header("Location: login.php");
}
?>

<?php
    include_once("connect.php");
    $result = mysqli_query($mysqli, "SELECT *FROM pasien ORDER BY kd_pasien DESC");
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <link rel="icon" type="image/x-icon" href="favicon.png">
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
            <link type="text/css" rel="stylesheet" href="stylecss.css">
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <title>Klinik Sapto</title>
                        
    </head>
    <body>
        <div class="header">
            <h1>KLINIK SAPTO</h1>
          </div>
          <div id="viewport">
            <!-- Sidebar -->
            
            <!-- Content -->
            <div id="content">
              <div class="container-fluid">
                  <div class="background">
                    <p class="judul">Selamat Datang</p>
                    <p class="tag">Jagalah Kesehatanmu</p>
                    <p class="tag1">Mulai Hari Ini !</p>
                  </div>
            <footer id="footer">
              <p>&copy;SAPTO WIBOWO - 183112706450118 - <?php echo date("Y");?> All Right Reserved </p>
            </footer>
          </div>
        </div>
      </div>
      <div id="sidebar">
        <header>
          <a href="logout.php">Menu</a>
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
