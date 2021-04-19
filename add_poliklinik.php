<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addpoli">Add Data</button>
                
<div class="modal fade" id="addpoli" tabindex="-1" role="dialog" aria-labelleby="addpoliLabel" aria-hidden="true"> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle" id="addpoliLabel">Tambah Poliklinik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <br>
                <form action = "add_poliklinik.php" method= "post" name= "form1">
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="no_poli"> Nomor Poliklinik</label>
                        <div>
                            <input type="text" name="no_poli" class="form-control" placeholder="Nomor Poliklinik" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="nama_poli"> Nama Poliklinik</label>
                        <div>
                            <input type="text" name="nama_poli" class="form-control" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="lokasi"> Lokasi</label>
                        <div>
                            <input type="text" name="lokasi" class="form-control" placeholder="Lokasi Poliklinik" required="true">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="ruang"> Nama Ruangan</label>
                        <div>
                            <input type="text" name="ruang" class="form-control" required="true">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="lantai"> Lantai</label>
                        <div>
                            <input type="number" max="20" step="1" min="1" value="1 - 20" name="lantai" class="form-control" required="true">
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
                        $no_poli = $_POST['no_poli'];
                        $nama_poli = $_POST['nama_poli'];
                        $lokasi = $_POST['lokasi'];
                        $r = $_POST['ruang'];
                        $lt = $_POST['lantai'];

                        include_once("connect.php");
                        $result=mysqli_query($mysqli, "INSERT INTO poliklinik(no_poli,nama_poli,lokasi,ruang,lantai) 
                        VALUES('$no_poli','$nama_poli','$lokasi','$r','$lt')");
                        if($result){
                            header("location: data_poliklinik.php");
                        }else{
                            echo "Error, tidak berhasil". mysqli_error($mysqli);
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>     
    