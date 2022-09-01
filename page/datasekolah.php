<table class="table">
	<h4 class="mb-3">#Data Sekolah</h4>
	<a href ="#" class="btn btn-primary btn-sm col-sm-3" data-bs-toggle="modal"data-bs-target="#datasekolah">Tambah Data</a>
	<thead>
		<tr class="text-center">
			<th scope="col">#</th>
			<th scope="col">Aksi</th>
			<th scope="col">Nama Sekolah</th>
			<th scope="col">Alamat Sekolah</th>
			<th scope="col">No Telepon</th>
			<th scope="col">Email Sekolah</th>
	    </tr>
	</thead>
	<tbody>
    <?php
     $no = 1;
     $data  = mysqli_query($koneksi,"SELECT * FROM tbl_sekolah");

     while ($dta = mysqli_fetch_array($data)){

    ?>
		<tr>
			<th scope="row"><?php echo $no++ ?></th>
			<td class="text-center"><a href="#" data-bs-toggle="modal"data-bs-target="#editdatasekolah<?php echo $dta['id']?>">Edit</a> | <a href="#">Hapus</a></td>
			<td><?php echo $dta['nm_sekolah']?></td>
			<td><?php echo $dta['Alamat']?></td>
			<td><?php echo $dta['no_tlp']?></td>
			<td><?php echo $dta['email_smk']?></td>
        </tr>
        <!-- Modal Edit -->
  <div class="modal fade" id="editdatasekolah<?php echo $dta['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Sekolah</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
          

          <!-- form edit data -->
          <form action="simpan_datasekolah.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Sekolah</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namasekolah" value="<?php echo $dta['nm_sekolah'];?>">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat Sekolah</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1"name="alamat"><?php echo $dta['Alamat'];?></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Telepon</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="notelp" value="<?php echo $dta['no_tlp'];?>">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email Sekolah</label>
              <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo $dta['email_smk'];?>">
            </div>


                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            
          </form>
      

      </div>
    </div>
  </div>
  </div>
<!-- akhir modal Edit -->

        <?php
         
         }     

        ?>
	</tbody>
   </table>
	



<!-- Modal Tambah -->
<div class="modal fade" id="datasekolah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data Sekolah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        

        <!-- form tambah data -->
        <form action="simpan_datasekolah.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Sekolah</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namasekolah">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat Sekolah</label>
            <textarea type="text" class="form-control" id="exampleInputPassword1"name="alamat" ></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Telepon</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="notelp">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email Sekolah</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="email">
          </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          
        </form>
    

    </div>
  </div>
</div>
</div>
<!-- akhir modal tambah -->

