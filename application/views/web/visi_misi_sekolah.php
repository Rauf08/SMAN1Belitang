<section class="parallax-section clearfix service_template" id="section-5023">

    <div class="mid-content">
      <h2><span>Visi & Misi Sekolah</span></h2>
      <div class="parallax-content"></div>
        <div class="service-listing clearfix">
          <div class="clearfix service-list odd wow fadeInLeft" data-wow-delay="0.25s">
            <div class="service-detail">
              <h3>Tujuan</h3>
              <div class="service-content">
                <p align="justify">
                  <?php
                  $v_isi = $this->db->get_where('tbl_isi', array('nama_isi'=>'profile', 'judul_isi'=>'Tujuan'))->row();
                  $baris = $v_isi;
                  echo $baris->ket_isi;?>
                </p>
              </div>
            </div>
          </div>

          <div class="clearfix service-list even wow fadeInRight" data-wow-delay="0.5s">
            <div class="service-detail">
              <h3>Visi & Misi</h3>
              <div class="service-content">
                <p align="justify">
                  <?php
                  $v_isi = $this->db->get_where('tbl_isi', array('nama_isi'=>'profile', 'judul_isi'=>'Visi'))->row();
                  $baris = $v_isi;
                  echo $baris->ket_isi;?>
                </p>
                <p align="justify">
                  <?php
                  $v_isi = $this->db->get_where('tbl_isi', array('nama_isi'=>'profile', 'judul_isi'=>'Misi'))->row();
                  $baris = $v_isi;
                  echo $baris->ket_isi;?>
                </p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>

            <div class="clearfix"></div>

        </div>
    </div>
</section>
