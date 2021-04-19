<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addjamin">Add Data</button>
                
<div class="modal fade" id="addjamin" tabindex="-1" role="dialog" aria-labelleby="addjaminLabel" aria-hidden="true"> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle" id="addjaminLabel">Tambah Jaminan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <br>
                <form action = "add_jaminan.php" method= "post" name= "form1">
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="no_jkn"> Kode JKN</label>
                        <div>
                            <input type="text" name="no_jkn" class="form-control" placeholder="001" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="asuransi"> Nama Asuransi</label>
                        <div>
                            <input type="text" name="asuransi" class="form-control" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="call_center"> Call Center</label>
                        <div>
                            <input type="text" name="call_center" class="form-control" required="true">
                        </div>
                    </div>
                    <!-- <input type="submit" name="tambah" value="TAMBAH"> -->
                    <div class="modal-footer">
                <button type="button" class=" btn btn-secondary" data-dismiss="modal">Tutup</button>
                <input type="submit" name="tambah_jkn" class=" btn btn-primary" value="simpan">
            </div>
            </form>
            <?php
                if(isset($_POST['tambah_jkn'])){
                    $no_jkn = $_POST['no_jkn'];
                    $asuransi = $_POST['asuransi'];
                    $call = $_POST['call_center'];

                    include_once("connect.php");
                    $result=mysqli_query($mysqli, "INSERT INTO jaminan(no_jkn,asuransi,call_center) 
                    VALUES('$no_jkn','$asuransi','$call')");
                    if($result){
                        header("location: data_jaminan.php");
                    }else{
                        echo "Error, tidak berhasil". mysqli_error($mysqli);
                    }
                }
            ?>
            </div>
        </div>
    </div>
</div>     
    