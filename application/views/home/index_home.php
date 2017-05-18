<div class="konten">
      <div class="slider"><img src="<?php echo base_url(); ?>assets/images/logo.jpg" width="624" height="326"></div>
        <div class="anggota">
          <h3>Login Administrator</h3>
          <form name="form2" method="POST" action="/dyah/index.php">
            <p>
              <label for="email">Username (email)</label>
              <input type="text" name="email" id="email">
            </p>
            <p>
              <label for="password">Password</label>
              <input type="password" name="password" id="password">
            </p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Masuk">
              <input type="reset" name="submit3" id="submit3" value="Reset">
            </p>
            <!--<p><a href="lohin.php?ref=lupa">Lupa password?</a> | <a href="daftar.php">Daftar jadi anggota</a></p>-->
          </form>
      </div>    
  </div>
    <!-- konten bawah -->
  <div class="clearfix"></div>
    <div class="konten">
      <div class="posting">
        <h3>Berita terbaru</h3>
        
        <?php foreach($berita as $list) {?>
        <div class="ringkasan">
        <h3><a href="<?php echo base_url() ?>home/read/<?php echo$list['slug']; ?>"><?php echo $list['judul']; ?></a></h3>
        <?php echo $list['ringkasan']; ?>
        </div>
        <?php } ?>
      </div>
      <div class="anggota">
       <h3>Berita terbaru</h3>
       <ul>
       <?php foreach($berita as $list) {?>
       <li><a href="<?php echo base_url()?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></li>
       <?php } ?>
       </ul>
<p>&nbsp;</p>
        <p>
        </p>
              </div>
    </div>