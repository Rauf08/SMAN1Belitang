<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user->row();
$nama   = $cek->nama_lengkap;
$email  = '';

$level  = $cek->username;

$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
$sub_menu4 = strtolower($this->uri->segment(4));
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo base_url();?>"/>

	<title><?php echo $judul_web; ?></title>
	<link rel="icon" type="image/png" href="assets/panel/images/logo_dark.png">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
	<?php
	if ($sub_menu == "" or $sub_menu == "profile" or $sub_menu == "ubah_pass") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/panel/js/core/app.js"></script>
	<!-- <script type="text/javascript" src="assets/panel/js/pages/dashboard.js"></script> -->
	<!-- /theme JS files -->
	<?php
	} ?>

	<?php
	if ($sub_menu == "pedoman_ppdb" or $sub_menu == "berita" or $sub_menu == "ekskul" or $sub_menu == "prestasi" or $sub_menu == "siswa" or $sub_menu == "guru_staff" or $sub_menu == "osis" or $sub_menu == "fasilitas" or $sub_menu == "v_kat" or
			$sub_menu == "galeri" or $sub_menu == "data_profile" or $sub_menu == "data_guru" or $sub_menu == "data_siswa" or $sub_menu == "data_alumni" or $sub_menu == "data_kurikulum" or $sub_menu == "buku_tamu" or $sub_menu == "data_info") {?>
		<!-- Theme JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/tables/datatables/datatables.min.js"></script>
	<!-- <script type="text/javascript" src="assets/panel/js/plugins/forms/selects/select2.min.js"></script> -->

	<script type="text/javascript" src="assets/panel/js/core/app.js"></script>
	<script type="text/javascript" src="assets/panel/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

	<?php
	} ?>

		<script src="assets/panel/js/select2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/panel/css/sweetalert.css">

		<script type="text/javascript" src="assets/panel/js/sweetalert.min.js"></script>
</head>

<body class="navbar-bottom">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="">PANEL <label class="label label-primary">Admin</label></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/panel/images/default.png" alt="foto">
						<span><?php echo ucwords($nama); ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="panel_admin/profile"><i class="icon-user-plus"></i> Profile</a></li>
						<li><a href="panel_admin/ubah_pass"><i class="icon-key"></i> Ubah Password</a></li>
						<li class="divider"></li>
						<li><a href="panel_admin/logout"><i class="icon-switch2"></i> Keluar</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
				<div class="sidebar-content">

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-title h6">
							<span>Menu Navigasi</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content sidebar-user">
							<div class="media">
								<a href="panel_admin/profile" class="media-left"><img src="assets/panel/images/default.png" class="img-circle img-sm" alt="foto"></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo ucwords($nama); ?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;<?php echo $level; ?>
									</div>
								</div>
							</div>
						</div>

						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Utama</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="<?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'active';} ?>"><a href="panel_admin"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-clipboard6"></i> <span>Profile</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '2'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/2"><span>Kepala Sekolah</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '2'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/1"><span>Sejarah Singkat</span></a></li>
										<li>
											<a href="#"><span>Visi & Misi</span></a>
											<ul>
												<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '26'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/26"><span>Visi</span></a></li>
												<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '27'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/27"><span>Misi</span></a></li>
											</ul>
										</li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '28'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/28"><span>Denah Sekolah</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '7'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/7"><span>Struktur Organisasi</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '29'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/29"><span>Arti dan Makna Logo SMA Negeri 1 Belitang</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '6'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/6"><span>Mars SMA Negeri 1 Belitang  </span></a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-users"></i> <span>Guru & Staf</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '30'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/30"><span>Profile Guru</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '31'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/31"><span>Profile Staf</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '32'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/32"><span>Perangkat Pembelajaran</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile' AND $sub_menu4 == '33'){echo 'active';} ?>"><a href="panel_admin/data_profile/e/33"><span>Kegiatan Pembelajaran</span></a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-user"></i> <span>Siswa</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'panca_prasetya_peserta_didik'){echo 'active';} ?>"><a href="panel_admin/v_kat/panca_prasetya_peserta_didik"><span>Panca Prasetya Peserta Didik</span></a></li>
										<li>
											<a href="#"><span>Organisasi Siswa</span></a>
											<ul>
												<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'osis'){echo 'active';} ?>"><a href="panel_admin/osis"><span>OSIS</span></a></li>
												<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'mpk'){echo 'active';} ?>"><a href="panel_admin/v_kat/mpk"><span>MPK</span></a></li>
												<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'rohis'){echo 'active';} ?>"><a href="panel_admin/v_kat/rohis"><span>ROHIS</span></a></li>
												<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'pmr'){echo 'active';} ?>"><a href="panel_admin/v_kat/pmr"><span>PMR</span></a></li>
											</ul>
										</li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'ekskul'){echo 'active';} ?>"><a href="panel_admin/ekskul"><span>Ekstrakulikuler</span></a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-cabinet"></i> <span>Fasilitas</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'sarana_dan_prasarana'){echo 'active';} ?>"><a href="panel_admin/v_kat/sarana_dan_prasarana"><span>Sarana dan Prasarana</span></a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-trophy3"></i> <span>Prestasi</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'prestasi_tingkat_kabupaten'){echo 'active';} ?>"><a href="panel_admin/v_kat/prestasi_tingkat_kabupaten"><span>Tingkat Kabupaten</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'prestasi_tingkat_provinsi'){echo 'active';} ?>"><a href="panel_admin/v_kat/prestasi_tingkat_provinsi"><span>Tingkat Provinsi</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'prestasi_tingkat_regional'){echo 'active';} ?>"><a href="panel_admin/v_kat/prestasi_tingkat_regional"><span>Tingkat Regional</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'prestasi_tingkat_nasional'){echo 'active';} ?>"><a href="panel_admin/v_kat/prestasi_tingkat_nasional"><span>Tingkat Nasional</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'prestasi_tingkat_internasional'){echo 'active';} ?>"><a href="panel_admin/v_kat/prestasi_tingkat_internasional"><span>Tingkat Internasional</span></a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-file-text"></i> <span>Agenda</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'kegiatan_pembelajaran'){echo 'active';} ?>"><a href="panel_admin/v_kat/kegiatan_pembelajaran"><span>Kegiatan Pembelajaran</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'v_kat' AND $sub_menu3 == 'kegiatan_siswa'){echo 'active';} ?>"><a href="panel_admin/v_kat/kegiatan_siswa"><span>Kegiatan Siwa</span></a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-images3"></i> <span>Galeri</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'galeri'){echo 'active';} ?>"><a href="panel_admin/galeri"><span>Album SMA Negeri 1 Belitang</span></a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-newspaper"></i> <span>Informasi</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'berita'){echo 'active';} ?>"><a href="panel_admin/berita"><span>Berita</span></a></li>
									</ul>
								</li>

								<!-- <li>
									<a href="#"><i class="icon-clipboard6"></i> <span>Menu 1</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'pedoman_ppdb'){echo 'active';} ?>"><a href="panel_admin/pedoman_ppdb"><i class="icon-file-check"></i> <span>Pedoman PPDB</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'berita'){echo 'active';} ?>"><a href="panel_admin/berita"><i class="icon-newspaper"></i> <span>Berita</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'ekskul'){echo 'active';} ?>"><a href="panel_admin/ekskul"><i class="icon-pencil7"></i> <span>Ekskul</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'prestasi'){echo 'active';} ?>"><a href="panel_admin/prestasi"><i class="icon-trophy3"></i> <span>Prestasi</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'siswa'){echo 'active';} ?>"><a href="panel_admin/siswa"><i class="icon-reading"></i> <span>Siswa</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'guru_staff'){echo 'active';} ?>"><a href="panel_admin/guru_staff"><i class="icon-users"></i> <span>Guru & Staff</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'osis'){echo 'active';} ?>"><a href="panel_admin/osis"><i class="icon-drawer3"></i> <span>OSIS</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'fasilitas'){echo 'active';} ?>"><a href="panel_admin/fasilitas"><i class="icon-cabinet"></i> <span>Fasilitas</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-clipboard6"></i> <span>Menu 2</span></a>
									<ul>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'galeri'){echo 'active';} ?>"><a href="panel_admin/galeri"><i class="icon-images3"></i> <span>Galeri</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_profile'){echo 'active';} ?>"><a href="panel_admin/data_profile"><i class="icon-profile"></i> <span>Profile</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_guru'){echo 'active';} ?>"><a href="panel_admin/data_guru"><i class="icon-users"></i> <span>Guru</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_siswa'){echo 'active';} ?>"><a href="panel_admin/data_siswa"><i class="icon-reading"></i> <span>Siswa</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_alumni'){echo 'active';} ?>"><a href="panel_admin/data_alumni"><i class="icon-graduation2"></i> <span>Alumni</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_kurikulum'){echo 'active';} ?>"><a href="panel_admin/data_kurikulum"><i class="icon-bookmark"></i> <span>Kurikulum</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'buku_tamu'){echo 'active';} ?>"><a href="panel_admin/buku_tamu"><i class="icon-book"></i> <span>Buku Tamu</span></a></li>
										<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'data_info'){echo 'active';} ?>"><a href="panel_admin/data_info"><i class="icon-file-text"></i> <span>Info</span></a></li>
									</ul>
								</li> -->
								<!-- /Main -->
								<!-- Data Lainnya -->
								<li class="navigation-header"><span>Lainnya</span> <i class="icon-menu" title="Data visualization"></i></li>
								<li>
									<a href="#"><i class="icon-cog3"></i> <span>Pengaturan</span></a>
									<ul>
										<li class="<?php if($sub_menu == 'profile'){echo 'active';} ?>"><a href="panel_admin/profile">Profile</a></li>
										<li class="<?php if($sub_menu == 'ubah_pass'){echo 'active';} ?>"><a href="panel_admin/ubah_pass">Ubah Password</a></li>
									</ul>
								</li>
								<li><a href="panel_admin/logout"><i class="icon-switch2"></i> <span>Keluar</span></a></li>
								<!-- /Data Lainnya -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->
