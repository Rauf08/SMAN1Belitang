<?php
  $cek    = $user->row();
  $id_user = $cek->id_user;
  $nama    = $cek->nama_lengkap;
  $level   = $cek->level;

  $tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat bg-info">
        <div class="panel-heading">
          <h3 class="panel-title">
            <center>Selamat Datang, <?php echo ucwords($nama); ?></center>
          </h3>
        </div>
      </div>
      <!-- /basic datatable -->

      <div class="row">
        <div class="col-lg-12">

          <!-- Quick stats boxes -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Current server load -->
              <div class="panel bg-teal-400">
                <div class="panel-body">
                  <div class="heading-elements">
                    <span class="heading-text"></span>
                  </div>
                  <h3 class="no-margin">
                    <?php
                    echo number_format($this->db->get_where('tbl_kat',"nama_kat='berita'")->num_rows(),0,",","."); ?>
                  </h3>
                  Berita
                </div>
              </div>
              <!-- /current server load -->
            </div>

            <div class="col-lg-6">
              <!-- Current server load -->
              <div class="panel bg-orange-400">
                <div class="panel-body">
                  <div class="heading-elements">
                    <span class="heading-text"></span>
                  </div>
                  <h3 class="no-margin">
                    <?php
                    echo number_format($this->db->get('tbl_galeri')->num_rows(),0,",",".");  ?>
                  </h3>
                  Galeri
                </div>
              </div>
              <!-- /current server load -->
            </div>

          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Current server load -->
              <div class="panel panel-default">
                <div class="panel-body">
                  <?php
                  $v_isi = $this->db->get_where('tbl_isi', array('nama_isi'=>'profile', 'judul_isi'=>'Kepala Sekolah'))->row();
                  $baris = $v_isi;?>
                    <div class="col-lg-4">
                      <img src="<?php echo $baris->foto_isi; ?>?resize=150%2C150" alt="<?php echo $baris->judul_isi; ?>" style="margin-top:10px;width:100%;height:100%;">
                    </div>
                    <div class="col-lg-8" style="margin-top:-17px;">
                      <?php echo $baris->ket_isi; ?>
                    </div>
                </div>
              </div>
              <!-- /current server load -->
            </div>

            <div class="col-lg-6">
              <!-- Current server load -->
              <div class="panel panel-default">
                <div class="panel-body">
                  <h3 style="margin-top:5px;">Tujuan</h3>
                  <div class="service-content">
                    <p align="justify">
                      <?php
                      $v_isi = $this->db->get_where('tbl_isi', array('nama_isi'=>'profile', 'judul_isi'=>'Tujuan'))->row();
                      $baris = $v_isi;
                      echo $baris->ket_isi;?>
                    </p>
                  </div>
                  <br><br>
                </div>
              </div>
              <!-- /current server load -->
            </div>

          </div>

          <div class="col-lg-12">
            <!-- Current server load -->
            <div class="panel panel-default" style="background-color:#222;color:#f1f1f1;">
              <div class="panel-body">
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
            <!-- /current server load -->
          </div>

          <!-- /quick stats boxes -->


        </div>

      </div>

    </div>
    <!-- /dashboard content -->
