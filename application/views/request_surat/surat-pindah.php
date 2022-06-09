$(".inputSurat").append(`
<div class="col-md-6">
	<label for="">Nomor Kartu Keluarga</label>
	<input type="number" class="form-control" placeholder="ex : 35111xxxxxxx" name="no_kk">
</div>
<div class="col-md-6">
	<label for="">NIK Kepala Keluarga</label>
	<input type="number" class="form-control" placeholder="ex : 35111xxxxxxx" name="nik_kepala_keluarga">
</div>
<div class="col-md-6">
	<label for="">Nama Kepala Keluarga</label>
	<input type="text" class="form-control" placeholder="ex : Budi Santoso" name="nama_kepala_keluarga">
</div>
<div class="col-md-6">
	<label for="">Alamat</label>
	<input type="text" class="form-control" placeholder="Alamat" name="alamat">
</div>
<div class="col-md-6">
	<label for="">RT</label>
	<input type="number" class="form-control" placeholder="RT" name="rt">
</div>
<div class="col-md-6">
	<label for="">RW</label>
	<input type="number" class="form-control" placeholder="RW" name="rw">
</div>
<div class="col-md-6">
	<label for="">Kelurahan</label>
	<input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan">
</div>
<div class="col-md-6">
	<label for="">Kecamatan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
</div>
<div class="col-md-6">
	<label for="">Kabupaten/Kota</label>
	<input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kab">
</div>
<div class="col-md-6">
	<label for="">Propinsi</label>
	<input type="text" class="form-control" placeholder="Propinsi" name="prov">
</div>
<div class="col-md-6">
	<label for="">Tanggal Pindah</label>
	<input type="date" class="form-control" placeholder="Tanggal Pindah" name="tgl_pindah">
</div>
<div class="col-md-6">
	<label for="">Alasan Pindah</label>
	<!-- <input type="text" class="form-control" placeholder="Alasan Pindah" name="alasan"> -->
	<select name="alasan" id="alasan" class="form-select">
		<option value="">Pilih alasan pindah</option>
		<option value="1">Pekerjaan</option>
		<option value="2">Pendidikan</option>
		<option value="3">Keamanan</option>
		<option value="4">Kesehatan</option>
		<option value="5">Perumahan</option>
		<option value="6">Keluarga</option>
	</select>
</div>
<div class="col-md-6">
	<label for="">Alasan Pindah Lainnya (isi jika mempunyai alasan lain)</label>
	<input type="text" class="form-control" placeholder="Alasan Pindah" name="alasan_lainnya">
</div>
<div class="col-md-6">
	<label for="">Klasifikasi Pindah</label>
	<!-- <input type="text" class="form-control" placeholder="Klasifikasi Pindah" name="klasifikasi"> -->
	<select name="klasifikasi" id="klasifikasi" class="form-select">
		<option value="">Pilih klasifikasi pindah</option>
		<option value="1">Dalam satu Desa / Kel</option>
		<option value="2">Antar Desa / Kel</option>
		<option value="3">Antar Kecamatan</option>
		<option value="4">Antar Kab. / Kota</option>
		<option value="5">Antar Prop</option>
	</select>
</div>
<div class="col-md-6">
	<label for="">Jenis Kepindah</label>
	<!-- <input type="text" class="form-control" placeholder="Jenis Pindah" name="jenis"> -->
	<select name="jenis" id="jenis" class="form-select">
		<option value="">Pilih jenis kepindahan</option>
		<option value="1">Kep. Keluarga</option>
		<option value="2">Kep.Kel. dan Seluruh Angg. Kel</option>
		<option value="3">Kep. Kel. Dan Sbg Angg. Kel</option>
		<option value="4">Anggota Keluarga</option>
	</select>
</div>
<div class="col-md-6">
	<label for="">Alamat Tujuan Pindah</label>
	<input type="text" class="form-control" placeholder="Alamat Tujuan Pindah" name="alamat_tujuan_pindah">
</div>
<div class="col-md-6">
	<label for="">RT Tujuan</label>
	<input type="number" class="form-control" placeholder="RT" name="rt_tujuan">
</div>
<div class="col-md-6">
	<label for="">RW Tujuan</label>
	<input type="number" class="form-control" placeholder="RW" name="rw_tujuan">
</div>
<div class="col-md-6">
	<label for="">Kelurahan Tujuan</label>
	<input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan_tujuan">
</div>
<div class="col-md-6">
	<label for="">Kecamatan Tujuan</label>
	<input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan_tujuan">
</div>
<div class="col-md-6">
	<label for="">Kabupaten/Kota Tujuan</label>
	<input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kab_tujuan">
</div>
<div class="col-md-6">
	<label for="">Propinsi Tujuan</label>
	<input type="text" class="form-control" placeholder="Propinsi" name="prov_tujuan">
</div>
<div class="col-md-6">
	<label for="">Tanggal Kedatangan</label>
	<input type="date" class="form-control" name="tgl_kedatangan">
</div>
<div class="col-md-6">
	<label for="">Status No KK Bagi Yang Tidak Pindah</label>
	<select class="form-control" name="tidak_pindah" style="background-color: white;">
		<option value="0">---Pilih Status---</option>
		<option value="1">Numpang KK</option>
		<option value="2">Membuat KK Baru</option>
		<option value="3">Tidak Ada Keluarga Yang Ditinggal</option>
		<option value="4">No KK Tetap</option>
	</select>
</div>
<div class="col-md-6">
	<label for="">Status No KK Bagi Yang Pindah</label>
	<select class="form-control" name="pindah" style="background-color: white;">
		<option value="0">---Pilih Status---</option>
		<option value="1">Numpang KK</option>
		<option value="2">Membuat KK Baru</option>
		<option value="3">No KK Tetap</option>
	</select>
</div>
<div class="col-md-6">
	<label for="">Rencana Tanggal Pindah</label>
	<input type="date" class="form-control" placeholder="Rencana Tanggal Pindah" name="rencana_tgl_pindah">
</div>
<div class="col-md-12 row">
	<div class="row row-keluarga" id="keluarga">
		<div class="col-md-4">
			<label for="">Keluarga Yang Pindah</label>
			<input type="number" class="form-control" placeholder="NIK" name="nik_keluarga[]">
		</div>
		<div class="col-md-4">
			<label for=""></label>
			<input type="text" class="form-control" placeholder="Nama" name="nama_keluarga[]">
		</div>
		<div class="col-md-4">
			<label for=""></label>
			<input type="text" class="form-control" placeholder="SHDK" name="shdk[]">
		</div>
	</div>
	<div class="col-md-2">
		<label></label>
		<a class="btn btn-success btn-sm tambahKeluarga" style="margin-top: 27px;"><i class="fa fa-plus"></i> Tambah</a>
	</div>
	<div class="col-md-2">
		<label></label>
		<a class="btn btn-danger btn-sm hapusKeluarga" style="margin-top: 27px;"><i class="fa fa-minus"></i> Hapus</a>
	</div>
</div>
`);