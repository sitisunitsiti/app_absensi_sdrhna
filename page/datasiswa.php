<table class="table">
	<h4 class="mb-3">#Data Siswa</h4>
	<a href ="#" class="btn btn-primary btn-sm col-sm-3" data-bs-toggle="modal"data-bs-target="#datasiswa">Tambah Data</a>
	<thead>
		<tr class="text-center">
			<th scope="col">#</th>
			<th scope="col">Aksi</th>
			<th scope="col">Nisn</th>
			<th scope="col">Nama Siswa</th>
			<th scope="col">JK</th>
			<th scope="col">Alamat</th>
			<th scope="col">Agama</th>
			<th scope="col">No HP</th>
	    </tr>
	</thead>
	<tbody>
		<?php
     $no = 1;
     $data  = mysqli_query($koneksi,"SELECT * FROM tbl_siswaa");

     while ($dta = mysqli_fetch_array($data)){

    ?>
		<tr>
			<th scope="row"><?php echo $no++ ?></th>
			<td class="text-center"><a href="#" data-bs-toggle="modal" data-bs-target="#editdatasiswa<?php echo $dta['id']?>">Edit</a> | <a href="#">Hapus</a></td>
			<td><?php echo $dta['nisn']?></td>
			<td><?php echo $dta['nama_siswa']?></td>
			<td>
                <?php
                if ($dta['jk'] == 1) {
                 echo "Perempuan";
                }else{
                	echo "Laki-laki";
                }

              

        		?>
    		</td>
			<td><?php echo $dta['alamat']?></td>
			<td>
                <?php
                if ($dta['agama'] == 1) {
                 echo "Islam";
                }else if ($dta['agama'] == 2) {
                 echo "Kristen";
                }else  if ($dta['agama'] == 3) {
                 echo "Katolik";
                }else  if ($dta['agama'] == 4) {
                 echo "Hindu";
                }else if ($dta['agama'] == 5) {
                 echo "Budha";
                }else {
                 echo "Konghucu";
                }
              

                ?>
    </td>
			<td><?php echo $dta['no_hp']?></td>
			
    
        </tr>

        <!-- Modal  edit-->
           <div class="modal fade" id="editdatasiswa<?php echo $dta['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">


                <!-- form edit data -->
                <form action="simpan_datasiswa.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nisn</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nisn" value="<?php echo $dta['nisn'];?>">
        </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="namasiswa" value="<?php echo $dta['nama_siswa'];?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">JK</label>
          <select class="form-select" aria-label="Default select example" name="jk">
            <option>
               <?php
                if ($dta['jk'] == 1) {
                 echo "Perempuan";
                }else{
                  echo "Laki-laki";
                }
                ?>
            </option>
            <option value="1">Perempuan</option>
            <option value="2">Laki - Laki</option>
          </select>
          </div>
          
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1"name="alamat" ><?php echo $dta['alamat'];?></textarea>
            </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Agama</label>
            <select class="form-select" aria-label="Default select example" name="agama">
            <option >
              
                              <?php
                if ($dta['agama'] == 1) {
                 echo "Islam";
                }else if ($dta['agama'] == 2) {
                 echo "Kristen";
                }else  if ($dta['agama'] == 3) {
                 echo "Katolik";
                }else  if ($dta['agama'] == 4) {
                 echo "Hindu";
                }else if ($dta['agama'] == 5) {
                 echo "Budha";
                }else {
                 echo "Konghucu";
                }
              

                ?>
            </option>
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Katolik</option>
            <option value="4">Hindu</option>
            <option value="5">Budha</option>
            <option value="6">Konghucu</option>
          </select>
          </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No HP</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="nohp" value="<?php echo $dta['no_hp'];?>">
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
<!-- akhir modal edit -->
        <?php
}
        ?>
        
	</tbody>
   </table>
   <!-- Modal  tambah-->
   <div class="modal fade" id="editdatasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      	<!-- form tambah data -->
      	<form action="simpan_datasiswa.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nisn</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nisn">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Siswa</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="namasiswa">
  </div>
  <div class="mb-3">
  	<label for="exampleInputPassword1" class="form-label">JK</label>
	<select class="form-select" aria-label="Default select example" name="jk">
	  <option selected>Pilih Jenis Kelamin</option>
	  <option value="1">Perempuan</option>
	  <option value="2">Laki - Laki</option>
	</select>
  </div>
  
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Alamat</label>
	    <textarea type="text" class="form-control" id="exampleInputPassword1"name="alamat"></textarea>
	  </div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Agama</label>
	  <select class="form-select" aria-label="Default select example" name="agama">
	  <option selected>Pilih Agama</option>
	  <option value="1">Islam</option>
	  <option value="2">Kristen</option>
	  <option value="3">Katolik</option>
	  <option value="4">Hindu</option>
	  <option value="5">Budha</option>
	  <option value="6">Konghucu</option>
	</select>
	</div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No HP</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="nohp">
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
