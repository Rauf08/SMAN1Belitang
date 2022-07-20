<section class="parallax-section clearfix team_template" id="section-3668">

    <div class="mid-content">
        <!-- <h2><span></span></h2>
      <div class="parallax-content">
      </div> -->

      <div class="team-listing clearfix">
        <!-- <div class="team-tab">
          <div class="team-slider">
            <?php
            $durasi = '25';
             foreach ($v_kata_sambutan as $baris): ?>
              <div class="clearfix team-image wow fadeInLeft" data-wow-delay="0.<?php echo $durasi; ?>s" style="width:150px;height:130px;">
                <img src="<?php echo $baris->foto_kata_sambutan; ?>?resize=150%2C150" alt="<?php echo $baris->nama_lengkap; ?>" style="width:150px;height:130px;">
              </div>
            <?php
            $durasi += 5;
             endforeach; ?>
          </div>
        </div> -->

        <div class="team-content wow fadeIn" data-wow-delay="1.5s">
          <!-- <?php foreach ($v_kata_sambutan as $baris): ?>
          <div class="clearfix team-list team-4553">
            <div class="team-big-image" style="width:350px;height:350px;">
              <img src="<?php echo $baris->foto_kata_sambutan; ?>?resize=380%2C380" alt="<?php echo $baris->nama_lengkap; ?>" style="width:350px;height:350px;">
            </div>
            <div class="team-detail">
              <h3><?php echo $baris->nama_lengkap; ?></h3>
              <b> - <?php echo $baris->jabatan; ?> -</b><br>
              <p><?php echo $baris->kata_sambutan; ?></p>
            </div>
          </div>
          <?php endforeach; ?> -->
          <?php
          $v_isi = $this->db->get_where('tbl_isi', array('nama_isi'=>'profile', 'judul_isi'=>'Kepala Sekolah'))->row();
          $baris = $v_isi;?>
          <div class="clearfix team-list team-4553">
            <div class="team-big-image" style="width:350px;height:350px;">
              <img src="<?php echo $baris->foto_isi; ?>?resize=380%2C380" alt="<?php echo $baris->judul_isi; ?>" style="width:350px;height:350px;">
            </div>
            <div class="team-detail">
              <?php echo $baris->ket_isi; ?>
            </div>
          </div>

        </div>
      </div>
    </div>

</section>
