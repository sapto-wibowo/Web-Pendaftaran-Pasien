<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
            <link type="text/css" rel="stylesheet" href="stylecss.css">
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <title>Edit Poliklinik</title>
                        
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

                    if(isset($_POST['updatepoli'])){
                        $poli = $_POST['kd_poli'];
                    
                        $nama_poli = $_POST['nama_poli'];
                        $lokasi = $_POST['lokasi'];
                        $r = $_POST['ruang'];
                        $lt = $_POST['lantai'];           
                
                        $result=mysqli_query($mysqli, "UPDATE poliklinik SET nama_poli='$nama_poli', 
                        lokasi='$lokasi', ruang='$r', lantai='$lt' WHERE kd_poli='$poli'");
                    
                        if($result){
                            header('location: data_poliklinik.php');
                        }else{
                            echo "Upss Something wrong..";
                        }
                    }
                ?>

                <?php
                    $poli = $_GET['kd_poli'];
                    $result=mysqli_query($mysqli, "SELECT * FROM poliklinik WHERE kd_poli=$poli");

                    while($userData = mysqli_fetch_array($result)){
                ?>
                <h3 style="background-color:blue; text-align:center; padding-top:10px; padding:20px;">Edit Poliklinik</h3>
                <form action = "edit_poliklinik.php" method= "post" name= "updatepoli">
                    <input type="hidden" name="kd_poli" value=<?php echo $poli ;?>>
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="no_poli"> Nomor Poliklinik</label>
                            <div>
                                <input type="text" name="no_poli" class="form-control col-md-2" value="<?php echo $userData['no_poli'];?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="nama_poli"> Nama Poliklinik</label>
                            <div>
                                <input type="text" name="nama_poli" class="form-control col-md-4" value="<?php echo $userData['nama_poli'];?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="lokasi"> Lokasi</label>
                            <div>
                                <input type="text" name="lokasi" class="form-control" value="<?php echo $userData['lokasi'];?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="ruang"> Ruang</label>
                            <div>
                                <input type="text" name="ruang" class="form-control col-md-2" value="<?php echo $userData['ruang'];?>">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="lantai"> lantai</label>
                            <div>
                                <input type="number" max="20" step="1" min="1" name="lantai" class="form-control col-md-2" value="<?php echo $userData['lantai'];?>">
                            </div>
                        </div>
            
                            <a href="data_poliklinik.php" class="btn btn-warning">CLOSE</a>
                            <input type="submit" name="updatepoli" class=" btn btn-primary" value="Save Change">
                        
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

      

