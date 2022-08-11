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
		<tr>
			<th scope="row">1</th>
			<td class="text-center"><a href="#">Edit</a> | <a href="#">Hapus</a></td>
			<td>0556842345</td>
			<td>Sitisunitsiti</td>
			<td>Perempuan</td>
			<td>Korea</td>
			<td>Islam</td>
			<td>088709664567</td>
        </tr>
	</tbody>
   </table>
   <!-- Modal -->
   <div class="modal fade" id="datasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      	<!-- form tambah data -->
      	<form>
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
	<select class="form-select" aria-label="Default select example">
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
	  <select class="form-select" aria-label="Default select example">
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
</form>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
