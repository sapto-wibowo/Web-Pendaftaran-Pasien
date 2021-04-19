<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
            <link type="text/css" rel="stylesheet" href="stylecss.css">
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <title>Edit Pasien</title>
                        
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

                    if(isset($_POST['update'])){
                        $id = $_POST['kd_pasien'];
                
                        $nama = $_POST['nama_pasien'];
                        $jk = $_POST['jk'];
                        $usia = $_POST['usia'];
                        $goldar = $_POST['goldar'];
                        $no_poli = $_POST['no_poli'];
                        $no_jkn = $_POST['no_jkn'];
                        $tgl = $_POST['tgl'];
                        $alamat = $_POST['alamat'];
                        $telp = $_POST['telp'];            
                
                        $result=mysqli_query($mysqli, "UPDATE pasien SET nama_pasien='$nama', 
                        jk='$jk', usia='$usia', goldar='$goldar', no_poli='$no_poli', no_jkn='$no_jkn', tgl='$tgl', alamat='$alamat', telp='$telp' WHERE kd_pasien='$id'");
                
                        if($result){
                            header('location: pasien.php');
                        }else{
                            echo "Upss Something wrong..";
                        }
                    }
                    ?>

                    <?php
                    $id = $_GET['kd_pasien'];
                    $result=mysqli_query($mysqli, "SELECT * FROM pasien WHERE kd_pasien=$id");

                    while($userData = mysqli_fetch_array($result)){
                    ?>
                        <h3 style="background-color:blue; text-align:center; padding-top:10px; padding:20px;">Edit Pasien</h3>
                        <form action = "edit_pasien.php" method= "post" name= "update">
                            <input type="hidden" name="kd_pasien" value=<?php echo $id ;?>>
                            <div class="form-group">
                                <label class="control-label col-lg-4" for="no_pasien"> Nomor Pasien</label>
                                <div>
                                    <input type="text" name="no_pasien" class="form-control" value="<?php echo $userData['no_pasien'];?>" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-4" for="nama_pasien"> Nama Pasien</label>
                                <div>
                                    <input type="text" name="nama_pasien" class="form-control" value="<?php echo $userData['nama_pasien'];?>"required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-4" for="jk"> Jenis Kelamin</label>
                                <div>
                                    <select type="text" name="jk" class="form-control col-md-2" required="true">
                                        <option value="L"<?php if($userData['jk'] == 'L')echo "selected";?>>L</option>
                                        <option value="P"<?php if($userData['jk'] == 'P')echo "selected";?>>P</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-4" for="usia"> Usia</label>
                                <div>
                                    <input type="text" name="usia" class="form-control col-md-2" value="<?php echo $userData['usia'];?>">
                                </div>
                            </div>
                                        
                            <div class="form-group">
                                <label class="control-label col-lg-4" for="goldar"> Golongan Darah</label>
                                <div>
                                    <select type="text" name="goldar" class="form-control col-md-2">
                                        <option value="A"<?php if($userData['goldar'] == 'A')echo "selected";?>>A</option>
                                        <option value="B"<?php if($userData['goldar'] == 'B')echo "selected";?>>B</option>
                                        <option value="AB"<?php if($userData['goldar'] == 'AB')echo "selected";?>>AB</option>
                                        <option value="O"<?php if($userData['goldar'] == 'O')echo "selected";?>>O</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-4" for="no_poli"> Kode Poliklinik</label>
                                <div>
                                    <input type="text" name="no_poli" class="form-control col-md-2" value="<?php echo $userData['no_poli'];?>"required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-4" for="no_jkn"> Kode Jaminan</label>
                                <div>
                                    <input type="text" name="no_jkn" class="form-control col-md-2" value="<?php echo $userData['no_jkn'];?>"required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4" for="tgl"> Tanggal Kunjungan</label>
                                <div>
                                    <input type="date" name="tgl" id="tgl" class="form-control col-md-2" value="<?php echo $userData['tgl'];?>"required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-4" for="alamat"> Alamat</label>
                                <div>
                                    <input type="text" name="alamat" class="form-control" value="<?php echo $userData['alamat'];?>"required="true">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label col-lg-4" for="telp"> Nomor Telepon</label>
                                <div>
                                    <input type="text" name="telp" class="form-control col-md-2" value="<?php echo $userData['telp'];?>"required="true">
                                </div>
                            </div>
                            <!-- <input type="submit" name="tambah" value="TAMBAH"> -->
                            <a href="pasien.php" class="btn btn-warning">CLOSE</a>
                            <input type="submit" name="update" class=" btn btn-primary" value="Save Change">
                            
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

      

