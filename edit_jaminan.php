<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
            <link type="text/css" rel="stylesheet" href="stylecss.css">
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <title>Edit Jaminan</title>
                        
    </head>
    <body>
        <div class="header">
            <h1>KLINIK SAPTO</h1>
          </div>
        <div id="viewport">
            <!-- Content -->
          <div class="content">    
            <div class="container-fluid">
                <?php
                include_once("connect.php");

                if(isset($_POST['update_jkn'])){
                    $jkn = $_POST['kd_jaminan'];
            
                    $no_jkn = $_POST['no_jkn'];
                    $asuransi = $_POST['asuransi'];
                    $call_center = $_POST['call_center'];            
            
                    $result=mysqli_query($mysqli, "UPDATE jaminan SET asuransi='$asuransi', call_center='$call_center' WHERE kd_jaminan='$jkn'");
            
                    if($result){
                        header('location: data_jaminan.php');
                    }else{
                        echo "Upss Something wrong..";
                    }
                }
                ?>

                <?php
                $jkn = $_GET['kd_jaminan'];
                $result=mysqli_query($mysqli, "SELECT * FROM jaminan WHERE kd_jaminan=$jkn");

                while($userData = mysqli_fetch_array($result)){
                ?>
                  <h3 style="background-color:blue; text-align:center; padding-top:10px; padding:20px;">Edit Jaminan</h3>
                  <form action = "edit_jaminan.php" method= "post" name= "update_jkn">
                          <input type="hidden" name="kd_jaminan" value=<?php echo $jkn ;?>>
                      <div class="form-group">
                          <label class="control-label col-lg-4" for="no_jkn"> Kode JKN</label>
                          <div>
                              <input type="text" name="no_jkn" class="form-control col-md-2" value="<?php echo $userData['no_jkn'];?>" disabled>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-lg-4" for="asuranasi"> Nama Asuransi</label>
                          <div>
                              <input type="text" name="asuransi" class="form-control col-md-4" value="<?php echo $userData['asuransi'];?>" required="true">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-lg-4" for="call_center"> Call Center</label>
                          <div>
                              <input type="text" name="call_center" class="form-control col-md-2" value="<?php echo $userData['call_center'];?>" required="true">
                          </div>
                      </div>

                      <!-- <input type="submit" name="tambah" value="TAMBAH"> -->
                          <a href="data_jaminan.php" class="btn btn-warning">CLOSE</a>
                          <input type="submit" name="update_jkn" class=" btn btn-primary" value="Save Change">
                      
                    <?php
                      }   
                    ?>
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
              <a href="Add_pasien.php">PENDAFTARAN PASIEN</a>
            </li>
          </ul>                        
        </div>
        
    </body>
</html>

      

