<div class="mid-content clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<article id="post-3128" class="post-3128 page type-page status-publish hentry">
	<header class="entry-header">
		<h1 class="entry-title"><?php echo $v_isi->judul_isi; ?></h1>
		<hr>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php if ($v_isi->foto_isi != ''){ ?>
		<img src="<?php echo $v_isi->foto_isi; ?>" alt="Foto" width="100%" max-height="300">
	<?php } ?>
		<p>
			<?php echo $v_isi->ket_isi; ?>
		</p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

		</main>
	</div>
	<?php $this->load->view('web/widget'); ?>
</div>
