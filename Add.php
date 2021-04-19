<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">Add Pasien</button>
                
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelleby="addLabel" aria-hidden="true"> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle" id="addLabel">Pendaftaran Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <br>
                <form action = "Add_pasien.php" method= "post" name= "form1">
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="nama_pasien"> Nama Pasien</label>
                        <div>
                            <input type="text" name="nama_pasien" class="form-control" placeholder="Masukkan nama anda">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="jk"> Jenis Kelamin</label>
                        <div>
                            <select type="text" name="jk" class="form-control">
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="usia"> Usia</label>
                        <div>
                            <input type="text" name="usia" class="form-control" placeholder="Masukkan umur anda">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="alamat"> Alamat</label>
                        <div>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat anda">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="telp"> Nomor Telepon</label>
                        <div>
                            <input type="text" name="telp" class="form-control" placeholder="Nomor yang dapat dihubungi">
                        </div>
                    </div>
                    <!-- <input type="submit" name="tambah" value="TAMBAH"> -->
                    <div class="modal-footer">
                <button type="button" class=" btn btn-secondary" data-dismiss="modal">Tutup</button>
                <input type="submit" name="tambah" class=" btn btn-primary" value="simpan">
            </div>
            </form>
            <?php
                if(isset($_POST['tambah'])){
                    $nama = $_POST['nama_pasien'];
                    $jk = $_POST['jk'];
                    $usia = $_POST['usia'];
                    $alamat = $_POST['alamat'];
                    $telp = $_POST['telp'];

                    include_once("connect.php");
                    $result=mysqli_query($mysqli, "INSERT INTO pasien(nama_pasien,jk,usia,alamat,telp) 
                    VALUES('$nama','$jk','$usia','$alamat','$telp')");
                    if($result){
                        header("location: data_pasien.php");
                    }else{
                        echo "Error, tidak berhasil". mysqli_error($mysqli);
                    }
                }
            ?>
            </div>
        </div>
    </div>
</div>     
    