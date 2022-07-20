
<div class="mid-content clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-5662" class="post-5662 post type-post status-publish format-standard has-post-thumbnail hentry category-berita">
				<header class="entry-header">
					<div class="entry-thumb">
						<img src="<?php if($v_kat->foto_kat!=''){echo "$v_kat->foto_kat";}else{echo "img/img-null.png";} ?>?resize=900%2C300" alt="<?php echo $v_kat->judul_kat; ?>" width="100%" style="max-height:300px;">
					</div>

					<h1 class="entry-title no-date"><?php echo $v_kat->judul_kat; ?></h1>

					<div class="entry-meta">
						<span class="posted-on">
							<time class="entry-date published" datetime="<?php echo date('Y-m-d', strtotime($v_kat->tgl_kat)); ?>T<?php echo date('H:i:s', strtotime($v_kat->tgl_kat)); ?>+00:00">
								<span class="posted-day"><?php echo date('d', strtotime($v_kat->tgl_kat)); ?></span>
								<span class="posted-month"><?php echo $this->Model_data->tgl_id(date('Y-m-d', strtotime($v_kat->tgl_kat)), 'bulan'); ?></span>
								<span class="posted-year"><b><?php echo date('Y', strtotime($v_kat->tgl_kat)); ?></b> </span>
							</time>
							<time class="updated" datetime="2018-04-03T12:00:05+00:00"><?php echo $this->Model_data->tgl_id(date('Y-m-d', strtotime($v_kat->tgl_kat))); ?></time>
						</span>
						<span class="byline"> </span>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header --><!-- .entry-header -->
		<hr>
		<i style="float:right;margin-top:-20px;">Kategori: <?php echo strtoupper(preg_replace('/[_]/',' ',$v_kat->nama_kat)); ?></i>
			<div class="entry-content">
				<p>
					<?php echo $v_kat->ket_kat; ?>
				</p>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->

		</main>
	</div>
	<?php $this->load->view('web/widget'); ?>
</div>
