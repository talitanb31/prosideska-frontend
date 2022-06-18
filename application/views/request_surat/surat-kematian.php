$(".inputSurat").append(`
<!-- Jenazah -->
<h5>Jenazah</h5>
<div class="col-md-6 mb-2">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK Jenazah" name="nik_jenazah">
</div>
<div class="col-md-6 mb-2">
	<label for="">No Kartu Keluarga</label>
	<input type="text" class="form-control" placeholder="No KK Jenazah" name="no_kk">
</div>
<div class="col-md-6 mb-2">
	<label for="">Nama</label>
	<input type="text" class="form-control" placeholder="Nama Jenazah" name="nama_jenazah">
</div>
<div class="col-md-6 mb-2">
	<label for="">Jenis Kelamin</label>
	<select class="form-select" name="jk_jenazah">
		<option value="0">Pilih Jenis Kelamin</option>
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
	</select>
</div>
<div class="col-md-6 mb-2">
	<label for="">Tempat Lahir</label>
	<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
</div>
<div class="col-md-3 mb-2">
	<label for="">Tanggal Lahir</label>
	<input type="date" class="form-control" name="tanggal_lahir">
</div>
<div class="col-md-3 mb-2">
	<label for="">Umur</label>
	<input type="number" class="form-control" name="umur">
</div>
<div class="col-md-3 mb-2">
	<label for="">Agama</label>
	<select class="form-select" name="agama_jenazah">
		<option value="0">Pilih Agama</option>
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Katolik">Katolik</option>
		<option value="Budha">Budha</option>
		<option value="Hindu">Hindu</option>
		<option value="Konghuchu">Konghuchu</option>
	</select>
</div>
<div class="col-md-6 mb-2">
	<label for="">Status Perkawinan</label>
	<select class="form-select" name="status_perkawinan">
		<option value="0">Pilih Status Perkawinan</option>
		<option value="Belum Kawin">Belum Kawin</option>
		<option value="Kawin">Kawin</option>
		<option value="Cerai Hidup">Cerai Hidup</option>
	</select>
</div>
<div class="col-md-6 mb-2">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" name="pekerjaan">
</div>
<div class="col-md-6 mb-2">
	<label for="">Anak ke</label>
	<input type="number" class="form-control" name="anak_ke">
</div>
<div class="col-md-3 mb-2">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_jenazah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_jenazah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_jenazah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_jenazah">
</div>
<div class="col-md-3 mb-2">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_jenazah">
</div>
<div class="col-md-3 mb-2">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_jenazah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Warga Negara</label>
	<input type="text" class="form-control" placeholder="ex: WNI" name="warga_negara">
</div>
<div class="col-md-3 mb-2">
	<label for="">Tanggal Kematian</label>
	<input type="date" class="form-control" name="tanggal_kematian">
</div>
<div class="col-md-3 mb-2">
	<label for="">Pukul</label>
	<input type="time" class="form-control" name="pukul">
</div>
<div class="col-md-3 mb-2">
	<label for="">Tempat Kematian</label>
	<input type="text" class="form-control" placeholder="Tempat Kematian" name="tempat_kematian">
</div>
<div class="col-md-3 mb-2">
	<label for="">Sebab Kematian</label>
	<input type="text" class="form-control" placeholder="Sebab Kematian" name="sebab_kematian">
</div>
<div class="col-md-3 mb-2">
	<label for="">Yang menerangkan</label>
	<!-- <input type="text" class="form-control" placeholder="Lainnya" name="yang_menerangkan"> -->
	<select name="yang_menerangkan" id="yang_menerangkan" class="form-select">
		<option value="">Pilih</option>
		<option value="1">Dokter</option>
		<option value="2">Perawat</option>
		<option value="3">Tes Kes Lainnya</option>
		<option value="4">Lainnya</option>
	</select>
</div>
<!-- Pelapor -->
<h5 class="mt-4">Pelapor</h5>
<div class="col-md-6 mb-2">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap" name="nama_pelapor">
</div>
<div class="col-md-6 mb-2">
	<label for="">Hubungan dengan yang meninggal</label>
	<input type="text" class="form-control" placeholder="ex: Anak" name="hubungan_pelapor">
</div>
<!-- Ayah -->
<!-- <h5 class="mt-4">AYAH</h5>
<div class="col-md-6 mb-2">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK ayah" name="nik_ayah">
</div>
<div class="col-md-6 mb-2">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap ayah" name="nama_ayah">
</div>
<div class="col-md-6 mb-2">
	<label for="">Tanggal lahir</label>
	<input type="date" class="form-control" placeholder="Taggal lahir" name="taggal_lahir_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kewarga Negaraan</label>
	<input type="text" class="form-control" placeholder="WNI" name="kewarga_negaraan_ayah">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kebangsaan</label>
	<input type="text" class="form-control" placeholder="INDONESIA" name="kebangsaan_ayah">
</div> -->
<!-- Pelapor -->
<!-- <h5 class="mt-4">PELAPOR</h5>
<div class="col-md-6 mb-2">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK" name="nik_pelapor">
</div>
<div class="col-md-6 mb-2">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap pelapor" name="nama_pelapor">
</div>
<div class="col-md-6 mb-2">
	<label for="">Umur</label>
	<input type="number" class="form-control" placeholder="Umur" name="umur_pelapor">
</div>
<div class="col-md-3 mb-2">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_pelapor">
</div>
<div class="col-md-3 mb-2">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_pelapor">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_pelapor">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_pelapor">
</div>
<div class="col-md-3 mb-2">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_pelapor">
</div>
<div class="col-md-3 mb-2">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_pelapor">
</div>
<div class="col-md-3 mb-2">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_pelapor">
</div>
<div class="col-md-3 mb-2">
	<label for="">Hubungan dengan yang mati</label>
	<input type="text" class="form-control" placeholder="Anak" name="hubungan_dengan_yang_mati">
</div> -->
<!-- Saksi 1 -->
<!-- <h5 class="mt-4">SAKSI 1</h5>
<div class="col-md-6 mb-2">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK" name="nik_saksi1">
</div>
<div class="col-md-6 mb-2">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap saksi1" name="nama_saksi1">
</div>
<div class="col-md-6 mb-2">
	<label for="">Umur</label>
	<input type="number" class="form-control" placeholder="Umur" name="umur_saksi1">
</div>
<div class="col-md-3 mb-2">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_saksi1">
</div>
<div class="col-md-3 mb-2">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_saksi1">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_saksi1">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_saksi1">
</div>
<div class="col-md-3 mb-2">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_saksi1">
</div>
<div class="col-md-3 mb-2">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_saksi1">
</div>
<div class="col-md-3 mb-2">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_saksi1">
</div> -->
<!-- Saksi 2 -->
<!-- <h5 class="mt-4">SAKSI 2</h5>
<div class="col-md-6 mb-2">
	<label for="">NIK</label>
	<input type="text" class="form-control" placeholder="NIK" name="nik_saksi2">
</div>
<div class="col-md-6 mb-2">
	<label for="">Nama Lengkap</label>
	<input type="text" class="form-control" placeholder="Nama lengkap saksi1" name="nama_saksi2">
</div>
<div class="col-md-6 mb-2">
	<label for="">Umur</label>
	<input type="number" class="form-control" placeholder="Umur" name="umur_saksi2">
</div>
<div class="col-md-3 mb-2">
	<label for="">Pekerjaan</label>
	<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_saksi2">
</div>
<div class="col-md-3 mb-2">
	<label for="">Provinsi</label>
	<input type="text" class="form-control" placeholder="Provinsi" name="provinsi_saksi2">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kabupaten</label>
	<input type="text" class="form-control" placeholder="Kabupaten" name="kab_saksi2">
</div>
<div class="col-md-3 mb-2">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_saksi2">
</div>
<div class="col-md-3 mb-2">
	<label for="">Desa</label>
	<input type="text" class="form-control" placeholder="Desa/Keluarahan" name="desa_saksi2">
</div>
<div class="col-md-3 mb-2">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_saksi2">
</div>
<div class="col-md-3 mb-2">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_saksi2">
</div> -->
`)
