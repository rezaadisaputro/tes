<div class="konten">
	<h1>Menambah Berita</h1>
	<?php require_once('tinymce.php') ?>
	<?php echo validation_errors(); ?>
	<form name="form1" method="post" actions="<?php echo base_url() ?>admin/berita/tambah" class="myfrom">
	<p>
		<label for="judul">Judul Berita</label>
		<input name="judul" type="text" id="judul" size="80">
		</p>
	<p>
		<label for="ringkasan">Ringkasan Berita</label>
		<textarea name="ringkasan" id="ringkasan" cols"55" rows="5"></textarea>
		</p>
	<p> 
		<label for="isi">Isi Berita</label>
		<textarea name="isi" id="isi" cols"55" rows="5"></textarea>
		</p>
	<p>  
	<label for="Status_Berita">Status Berita</label>
	<select name="status_berita" id="status_berita">
	<option value="Publish">Publikasikan</option>
	<option value="Draft">Simpan sebagai draft</option>
	</select>
	<input name="id_user" type="hidden" id="id_user" value="1">
	</p>
	<p>
	<input type="submit" name="submit" id="submit" value="submit">
	<input type="reset" name="submit" id="submit2" value="reset">
	</p>
	</form>
	<p>&nbsp</p>
	</div>
