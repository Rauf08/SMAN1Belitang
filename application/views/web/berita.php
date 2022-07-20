<section class="parallax-section clearfix blog_template" id="section-2701">
    <div class="mid-content">
      <h2><span>Berita Terbaru</span></h2>
          <div class="parallax-content">
          </div>

          <div class="blog-listing clearfix">
            <?php
            $durasi = '25';
             foreach ($v_berita as $baris): ?>
            <a href="kat/berita/<?php echo $baris->url_kat; ?>" class="blog-list wow fadeInDown" data-wow-delay="0.<?php echo $durasi; ?>s" style="position:relative;">
              <div class="blog-image">
                <img src="<?php if($baris->foto_kat!=''){echo "$baris->foto_kat";}else{echo "img/img-null.png";} ?>" alt="<?php echo $baris->judul_kat; ?>" width="100%" style="height:100px;">
              </div>

              <div class="blog-excerpt" style="height:290px;">
              <h3><?php echo substr($baris->judul_kat,0,60); ?>...</h3>
              <h4 class="posted-date"><i class="fa fa-calendar"></i><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($baris->tgl_kat))); ?></h4>
                  <p align="justify"><?php echo substr(htmlentities(strip_tags($baris->ket_kat)), 0, 240); ?>...</p>
                 <br />
              <span style="position:absolute;bottom:0px;">Selengkapnya&nbsp;&nbsp;<i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></span>
              </div>
            </a>
            <?php
            $durasi += 5;
             endforeach; ?>

          </div>

      <div class="clearfix btn-wrap">
      <a class="btn" href="kat/berita">Baca Semua</a>
      </div>
  </div>
</section>
