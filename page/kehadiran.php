<table class="table">
	<h4 class="mb-3">#Tabel Kehadiran</h4>
	<a href ="#" class="btn btn-primary btn-sm col-sm-3" data-bs-toggle="modal" data-bs-target="#tabelkehadiran">Input Kehadiran</a>
	<thead>
		<tr>
			<th scope="col" class="text-center">#</th>
			<th scope="col"class="text-center">Aksi</th>
      <th scope="col">Nisn</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Kelas</th>
			<th scope="col">Keterangan</th>
	    </tr>
	</thead>
	<tbody>
    <?php
     $no = 1;
     $data  = mysqli_query($koneksi,"SELECT * FROM tbl_kehadiran");

     while ($dta = mysqli_fetch_array($data)){

    ?>
		<tr>
			<th scope="row" class="text-center"><?php echo $no++ ?></th>
			<td class="text-center"><a href="#" data-bs-toggle="modal" data-bs-target="#editdatakehadiran<?php echo $dta['id']?>">Edit</a> | <a href="#">Hapus</a></td>
      <td><?php echo $dta['nisn']?></td>
			<td><?php echo $dta['tanggal']?></td>
			<td><?php echo $dta['kelas']?></td>
			<td><?php
                if ($dta['keterangan'] == 1) {
                 echo "Hadir";
                }else if ($dta['keterangan'] == 2) {
                 echo "Izin";
                }else  if ($dta['keterangan'] == 3) {
                 echo "Sakit";
                }else  if ($dta['keterangan'] == 4) {
                 echo "Tanpa keterangan";
                }
              

        ?>
          
        </td>
        </tr>
        <!-- Modal edit-->
        <div class="modal fade" id="editdatakehadiran<?php echo $dta['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Kehadiran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               
                

                <!-- form edit data -->
                <form action="simpan_kehadiran.php" method="POST">
                  <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nisn</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nisn" value="<?php echo $dta['nisn'];?>">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal" value="<?php echo $dta['tanggal'];?>">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kelas" value="<?php echo $dta['kelas'];?>">
          </div>
           <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Keterangan</label>
          <select class="form-select" aria-label="Default select example" name="keterangan">
            <option>
              
              <?php
                if ($dta['keterangan'] == 1) {
                 echo "Hadir";
                }else if ($dta['keterangan'] == 2) {
                 echo "Izin";
                }else  if ($dta['keterangan'] == 3) {
                 echo "Sakit";
                }else  if ($dta['keterangan'] == 4) {
                 echo "Tanpa keterangan";
                }
              

                ?>

            </option>
            <option value="1">Hadir</option>
            <option value="2">Izin</option>
            <option value="2">Sakit</option>
            <option value="2">Tanpa Keterangan</option>
          </select>
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
<div class="modal fade" id="tabelkehadiran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Kehadiran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        

        <!-- form tambah data -->
        <form action="simpan_kehadiran.php" method="POST">
          <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nisn</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nisn">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kelas">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
  <select class="form-select" aria-label="Default select example" name="keterangan">
    <option selected>Pilih Keterangan</option>
    <option value="1">Hadir</option>
    <option value="2">Izin</option>
    <option value="2">Sakit</option>
    <option value="2">Tanpa Keterangan</option>
  </select>
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
