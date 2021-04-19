<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
            <link type="text/css" rel="stylesheet" href="stylecss.css">
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <title>Daftar Pasien</title>
                        
    </head>
    <body>
        <div class="header">
            <h1>KLINIK SAPTO</h1>
          </div>
        <div id="viewport">
            <!-- Content -->
            <div id="content">
                <div class="container-fluid">
                    <h3 style="background-color:blue; text-align:center; padding-top:10px; padding:20px;">Pendaftaran Pasien</h3>
                    
                    <form action = "Add_pasien.php" method= "post" name= "form1">
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="no_pasien"> Nomor Pasien</label>
                            <div>
                                <input type="text" name="no_pasien" class="form-control" placeholder="contoh:1831-nomor urut" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="nama_pasien"> Nama Pasien</label>
                            <div>
                                <input type="text" name="nama_pasien" class="form-control" placeholder="Masukkan nama anda" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="jk"> Jenis Kelamin</label>
                            <div>
                                <select type="text" name="jk" class="form-control col-md-2" required="true">
                                    <option value="">-- pilih --</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="usia"> Usia</label>
                            <div>
                                <input type="text" name="usia" class="form-control col-md-2" placeholder="Masukkan umur anda">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="goldar"> Golongan Darah</label>
                            <div>
                                <select type="text" name="goldar" class="form-control col-md-2">
                                    <option value="-">-</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="no_poli"> Kode Poliklinik</label>
                            <div>
                                <input type="text" name="no_poli" class="form-control col-md-2" placeholder="001" required="true">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="no_jkn">Kode Jaminan</label>
                            <div>
                                <input type="text" name="no_jkn" class="form-control col-md-2" placeholder="001" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="tgl">Tanggal Kunjungan</label>
                            <div>
                                <input type="date" name="tgl" id="tg" class="form-control col-md-2" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4" for="alamat"> Alamat</label>
                            <div>
                                <input type="text" name="alamat" class="form-control col-row-3" placeholder="Masukkan alamat anda" required="true">
                            </div>
                        </div>
                                
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="telp"> Nomor Telepon</label>
                            <div>
                                <input type="text" name="telp" class="form-control col-md-4" placeholder="Nomor yang dapat dihubungi" required="true">
                            </div>
                        </div>
                    <!-- input data -->
                    <a href="pasien.php" class="btn btn-warning">CLOSE</a>
                    <input type="submit" name="tambah" class=" btn btn-primary" value="SAVE">
                    <a href="pasien.php" class="btn btn-success" style="float:right;"> View Table</a>

                </div>
                </form>
                    <?php
                        if(isset($_POST['tambah'])){
                            $nomor = $_POST['no_pasien'];
                            $nama = $_POST['nama_pasien'];
                            $jk = $_POST['jk'];
                            $usia = $_POST['usia'];
                            $goldar = $_POST['goldar'];
                            $no_poli = $_POST['no_poli'];
                            $no_jkn = $_POST['no_jkn'];
                            $tgl = $_POST['tgl'];
                            $alamat = $_POST['alamat'];
                            $telp = $_POST['telp'];

                            include_once("connect.php");
                            $result=mysqli_query($mysqli, "INSERT INTO pasien(no_pasien,nama_pasien,jk,usia,goldar,no_poli,no_jkn,tgl,alamat,telp) 
                            VALUES('$nomor','$nama','$jk','$usia','$goldar','$no_poli','$no_jkn','$tgl','$alamat','$telp')");
                        
                        if($result){
                            echo "<script>alert('Berhasil menyimpan')</script>";
                            echo "<script>document.location='pasien.php'</script>";
                        }else{
                            echo "<script>alert('Gagal menyimpan')</script>";
                            echo "<script>document.location='Add_pasien.php'</script>";
                        }
                        }
                    ?>
                 <footer id="footer">
                    <p>&copy;  SAPTO WIBOWO - 183112706450118 - <?php echo date("Y");?> All Right Reserved </p>
                </footer>     
            </div>
        </div>
    </div>
    <!-- sidebar -->
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
