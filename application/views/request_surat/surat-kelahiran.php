$(".inputSurat").append(`
<!-- Bayi -->
<h5>BAYI / ANAK</h5>
<div class="col-md-3">
	<label for="">Nama Anak</label>
	<input type="text" class="form-control" placeholder="Nama Anak" name="nama_anak">
</div>
<div class="col-md-3">
	<label for="">Jenis Kelamin</label>
	<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" style="background-color: white;">
		<option value="">Pilih jenis kelamin</option>
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
	</select>
</div>
<div class="col-md-6">
	<label for="">Tempat Dilahirkan</label>
	<input type="text" class="form-control" placeholder="Tempat Dilahirkan" name="tempat_dilahirkan">
</div>
<div class="col-md-6">
	<label for="">Tempat Kelahiran</label>
	<input type="text" class="form-control" placeholder="Tempat Kelahiran" name="tempat_kelahiran">
</div>
<div class="col-md-3">
	<label for="">Tanggal Lahir</label>
	<input type="date" class="form-control" name="tanggal_lahir">
</div>
<div class="col-md-3">
	<label for="">Pukul</label>
	<input type="time" class="form-control" placeholder="Tempat Kelahiran" name="pukul_lahir">
</div>
<div class="col-md-3">
	<label for="">Jenis Kelahiran</label>
	<input type="text" class="form-control" placeholder="Jenis Kelahiran" name="jenis_kelahiran">
</div>
<div class="col-md-3">
	<label for="">Penolong Kelahiran</label>
	<input type="text" class="form-control" placeholder="Penolong Kelahiran" name="penolong_kelahiran">
</div>
<div class="col-md-3">
	<label for="">Berat Bayi</label>
	<input type="number" class="form-control" placeholder="Berat Bayi" name="berat_bayi">
</div>
<div class="col-md-3">
	<label for="">Panjang Bayi</label>
	<input type="number" class="form-control" placeholder="Panjang Bayi" name="panjang_bayi">
</div>
<div class="col-md-3">
	<label for="">Agama</label>
	<input type="text" class="form-control" placeholder="ex: Islam" name="agama_anak">
</div>
<div class="col-md-3">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_anak">
</div>
<div class="col-md-3">
	<label for="">NIK</label>
	<input type="number" class="form-control" placeholder="NIK" name="nik_anak">
</div>
<div class="col-md-3">
	<label for="">Alamat</label>
	<input type="text" class="form-control" placeholder="Alamat" name="alamat_anak">
</div>
<!-- Ibu -->
<h5 class="mt-4">IBU</h5>
<div class="col-md-3">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK ibu" name="nik_ibu">
</div>
<div class="col-md-3">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap ibu" name="nama_ibu">
</div>
<div class="col-md-3">
	<label for="">Jenis kelamin</label>
	<select name="jenis_kelamin_ibu" id="jenis_kelamin_ibu" class="form-control" style="background-color: white;">
		<option value="">Pilih jenis kelamin</option>
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
	</select>
</div>
<div class="col-md-3">
	<label for="">Agama</label>
	<input type="text" class="form-control" placeholder="ex: Islam" name="agama_ibu">
</div>
<div class="col-md-3">
	<label for="">Tempat lahir</label>
	<input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir_ibu">
</div>
<div class="col-md-3">
	<label for="">Tanggal lahir</label>
	<input type="date" class="form-control" placeholder="Tanggal lahir" name="tanggal_lahir_ibu">
</div>
<div class="col-md-3">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_ibu">
</div>
<div class="col-md-3">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_ibu">
</div>
<div class="col-md-3">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_ibu">
</div>
<div class="col-md-3">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_ibu">
</div>
<div class="col-md-3">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_ibu">
</div>
<div class="col-md-3">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_ibu">
</div>
<div class="col-md-3">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_ibu">
</div>
<div class="col-md-3">
	<label for="">Kewarga Negaraan</label>
	<input type="text" class="form-control" placeholder="WNI" name="kewarga_negaraan_ibu">
</div>
<div class="col-md-3">
	<label for="">Kebangsaan</label>
	<input type="text" class="form-control" placeholder="INDONESIA" name="kebangsaan_ibu">
</div>
<!-- Ayah -->
<h5 class="mt-4">AYAH</h5>
<div class="col-md-3">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK ayah" name="nik_ayah">
</div>
<div class="col-md-3">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap ayah" name="nama_ayah">
</div>
<div class="col-md-3">
	<label for="">Jenis kelamin</label>
	<select name="jenis_kelamin_ayah" id="jenis_kelamin_ayah" class="form-control" style="background-color: white;">
		<option value="">Pilih jenis kelamin</option>
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
	</select>
</div>
<div class="col-md-3">
	<label for="">Agama</label>
	<input type="text" class="form-control" placeholder="ex: Islam" name="agama_ayah">
</div>
<div class="col-md-3">
	<label for="">Tempat lahir</label>
	<input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir_ayah">
</div>
<div class="col-md-3">
	<label for="">Tanggal lahir</label>
	<input type="date" class="form-control" placeholder="Tanggal lahir" name="tanggal_lahir_ayah">
</div>
<div class="col-md-3">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_ayah">
</div>
<div class="col-md-3">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_ayah">
</div>
<div class="col-md-3">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_ayah">
</div>
<div class="col-md-3">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_ayah">
</div>
<div class="col-md-3">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_ayah">
</div>
<div class="col-md-3">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_ayah">
</div>
<div class="col-md-3">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_ayah">
</div>
<div class="col-md-3">
	<label for="">Kewarga Negaraan</label>
	<input type="text" class="form-control" placeholder="WNI" name="kewarga_negaraan_ayah">
</div>
<div class="col-md-3">
	<label for="">Kebangsaan</label>
	<input type="text" class="form-control" placeholder="INDONESIA" name="kebangsaan_ayah">
</div>
<!-- Pelapor -->
<!-- <h5 class="mt-4">PELAPOR</h5>
<div class="col-md-6">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK" name="nik_pelapor">
</div>
<div class="col-md-6">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap pelapor" name="nama_pelapor">
</div>
<div class="col-md-6">
	<label for="">Umur</label>
	<input type="number" class="form-control" placeholder="Umur" name="umur_pelapor">
</div>
<div class="col-md-3">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_pelapor">
</div>
<div class="col-md-3">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_pelapor">
</div>
<div class="col-md-3">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_pelapor">
</div>
<div class="col-md-3">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_pelapor">
</div>
<div class="col-md-3">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_pelapor">
</div>
<div class="col-md-3">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_pelapor">
</div>
<div class="col-md-3">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_pelapor">
</div> -->
<!-- Saksi 1 -->
<!-- <h5 class="mt-4">SAKSI 1</h5>
<div class="col-md-6">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK" name="nik_saksi1">
</div>
<div class="col-md-6">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap saksi1" name="nama_saksi1">
</div>
<div class="col-md-6">
	<label for="">Umur</label>
	<input type="number" class="form-control" placeholder="Umur" name="umur_saksi1">
</div>
<div class="col-md-3">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_saksi1">
</div>
<div class="col-md-3">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_saksi1">
</div>
<div class="col-md-3">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_saksi1">
</div>
<div class="col-md-3">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_saksi1">
</div>
<div class="col-md-3">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_saksi1">
</div>
<div class="col-md-3">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_saksi1">
</div>
<div class="col-md-3">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_saksi1">
</div> -->
<!-- Saksi 2 -->
<!-- <h5 class="mt-4">SAKSI 2</h5>
<div class="col-md-6">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK" name="nik_saksi2">
</div>
<div class="col-md-6">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap saksi1" name="nama_saksi2">
</div>
<div class="col-md-6">
	<label for="">Umur</label>
	<input type="number" class="form-control" placeholder="Umur" name="umur_saksi2">
</div>
<div class="col-md-3">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_saksi2">
</div>
<div class="col-md-3">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_saksi2">
</div>
<div class="col-md-3">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_saksi2">
</div>
<div class="col-md-3">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_saksi2">
</div>
<div class="col-md-3">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_saksi2">
</div>
<div class="col-md-3">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_saksi2">
</div>
<div class="col-md-3">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_saksi2">
</div> -->
`)