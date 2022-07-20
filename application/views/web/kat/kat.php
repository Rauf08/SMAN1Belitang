<div class="mid-content clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<article id="post-3128" class="post-3128 page type-page status-publish hentry">
	<header class="entry-header">
		<h1 class="entry-title">Kategori: <?php echo $v_nama_kat; ?></h1>
		<hr>
	</header><!-- .entry-header -->

		<div class="blog-listing clearfix">
			<?php
			$durasi = '25';
			 foreach ($v_kat->result() as $baris): ?>
			<a href="kat/<?php echo $baris->nama_kat; ?>/<?php echo $baris->url_kat; ?>" class="blog-list wow fadeInDown" data-wow-delay="0.<?php echo $durasi; ?>s" style="position:relative;border:1px solid #f1f1f1;margin-bottom:20px;">
				<div class="blog-image">
					<img src="<?php if($baris->foto_kat!=''){echo "$baris->foto_kat";}else{echo "img/img-null.png";} ?>" alt="<?php echo $baris->judul_kat; ?>" width="100%" style="height:100px;">
				</div>

				<div class="blog-excerpt" style="height:190px;">
				<h3><?php echo substr($baris->judul_kat,0,60); ?>...</h3>
				<h4 class="posted-date"><i class="fa fa-calendar"></i><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($baris->tgl_kat))); ?></h4>
						<p align="justify"><?php echo substr(htmlentities(strip_tags($baris->ket_kat)), 0, 76); ?>...</p>
					 <br />
				<span style="position:absolute;bottom:0px;">Selengkapnya&nbsp;&nbsp;<i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></span>
				</div>
			</a>
			<?php
			$durasi += 5;
			 endforeach;

			 if ($v_kat->num_rows() == 0) {
			 	echo '<center>Belum ada data yang diinputkan!</center>';
			 }?>
		</div>

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
	<br>
	<center>
		<?php echo $halaman ?> <!--Memanggil variable pagination-->
	</center>
</article><!-- #post-## -->

		</main>
	</div>
	<?php $this->load->view('web/widget'); ?>
</div>
