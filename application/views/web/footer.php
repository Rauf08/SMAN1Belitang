<section class="parallax-section clearfix google-map googlemap_template" id="section-23">
	<div class="content-area googlemap-section">
	<div class="googlemap-toggle">Peta</div>
		<div class="googlemap-content">
			<p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15918.241731007733!2d104.6384889!3d-4.1094446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xecde8ed3fd88fb53!2sSMA+Negeri+1+Belitang!5e0!3m2!1sid!2sid!4v1523875397614" width="850" height="450" frameborder="0" allowfullscreen="allowfullscreen">&lt;span data-mce-type=&#8221;bookmark&#8221; style=&#8221;display: inline-block; width: 0px; overflow: hidden; line-height: 0;&#8221; class=&#8221;mce_SELRES_start&#8221;&gt;﻿&lt;/span&gt;&amp;lt;span data-mce-type=&#8221;bookmark&#8221; style=&#8221;display: inline-block; width: 0px; overflow: hidden; line-height: 0;&#8221; class=&#8221;mce_SELRES_start&#8221;&amp;gt;﻿&amp;lt;/span&amp;gt;&amp;amp;amp;lt;span data-mce-type=&#8221;bookmark&#8221; style=&#8221;display: inline-block; width: 0px; overflow: hidden; line-height: 0;&#8221; class=&#8221;mce_SELRES_start&#8221;&amp;amp;amp;gt;﻿&amp;amp;amp;lt;/span&amp;amp;amp;gt;</iframe>
			</p>
		</div>
	</div>
</section>


</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="top-footer footer-column-3">
			<div class="mid-content">
				<div class="top-footer-wrap clearfix">
						<div class="footer-block">
							<aside id="text-42" class="widget widget_text"><h2 class="widget-title">Populer:</h2>
								<div class="textwidget">
									<p>
										<ol>
											<?php
																	 $this->db->order_by('dibaca', 'DESC');
																	 $this->db->limit(8);
											$v_populer = $this->db->get('tbl_kat');
											 			foreach ($v_populer->result() as $baris): ?>
												<li><a href="kat/<?php echo "$baris->nama_kat/$baris->url_kat"; ?>"><?php echo ucwords($baris->judul_kat);?></a> - <a href="kat/<?php echo $baris->nama_kat; ?>"><?php echo strtoupper(preg_replace('/[_-]/', ' ', $baris->nama_kat)); ?></a></li>
											<?php endforeach; ?>
										</ol>
									</p>
								</div>
							</aside>
						</div>

						<div class="footer-block">
							<aside id="text-44" class="widget widget_text">
								<h2 class="widget-title">Website Kami:</h2>
								<div class="textwidget">
									<ol>
										<li><a href="" target="_blank" rel="noopener">SMA Negeri 1 Belitang</a></li>
										<li><a href="http://ppdbonline.sman1belitang.sch.id/" target="_blank" rel="noopener">PPDB Online</a></li>
										<li><a href="http://www.okutimurkab.go.id/" target="_blank" rel="noopener">http://www.okutimurkab.go.id/</a></li>
										<li><a href="http://disdik.sumselprov.go.id/" target="_blank" rel="noopener">http://disdik.sumselprov.go.id/</a></li>
										<li><a href="http://jardiknas.kemdikbud.go.id/" target="_blank" rel="noopener">http://jardiknas.kemdikbud.go.id/</a></li>
										<li><a href="http://nisn.data.kemdikbud.go.id/" target="_blank" rel="noopener">http://nisn.data.kemdikbud.go.id/</a></li>
										<li><a href="https://paspor.simpkb.id/" target="_blank" rel="noopener">https://paspor.simpkb.id/</a></li>
										<li><a href="http://padamu.siap.web.id/" target="_blank" rel="noopener">http://padamu.siap.web.id/</a></li>
									</ol>
									<p>&nbsp;</p>
								</div>
							</aside>
							<!-- <aside id="calendar-5" class="widget widget_calendar">
								<h2 class="widget-title">Kalender:</h2>

							</aside> -->
						</div>

						<div class="footer-block">
							<aside id="aptf_widget-3" class="widget widget_aptf_widget">
								<h2 class="widget-title">Kontak Kami:</h2>
								JL.Marga Pemuka Bangsa Raja No.1001 Gumawang Belitang  Kab.OKU Timur Provinsi Sumatera Selatan  Kode Pos 32382  <hr>
								<i class="fa fa-globe"></i> www.sman1belitang.sch.id <br>
								<i class="fa fa-phone"></i> 0735-450106 | Fax 0735-450106 <br>
					      <i class="fa fa-envelope"></i> sman1belitang@gmail.com
							</aside>
						</div>


			</div>
		</div>
	</div>


		<div class="bottom-footer">
		<div class="mid-content clearfix">
			<div  class="copy-right">
				&copy; <?php echo date('Y'); ?>, SMA NEGERI 1 BELITANG
			</div><!-- .copy-right -->
			<div class="site-info">
			Menjadi SMA Prima yang berpacu meraih Prestasi Luhur Budi Pekerti.
			</div><!-- .site-info -->
		</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<div id="go-top"><a href="#page"><i class="fa fa-angle-up"></i></a></div>

<!-- ngg_resource_manager_marker --><script type='text/javascript' src='assets/wp-content/plugins/jetpack/_inc/build/photon/photon.minb3d9.js?ver=20130122'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"assets\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='assets/wp-content/plugins/contact-form-7/includes/js/scripts5597.js?ver=5.0'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/wow5152.js?ver=1.0'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/SmoothScroll1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/parallaxc358.js?ver=1.1.3'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/jquery.scrollTo.min22d6.js?ver=1.4.14'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/jquery.localScroll.mine34c.js?ver=1.3.5'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/jquery.nav3601.js?ver=2.2.0'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/jquery.easing.min4e44.js?ver=1.3'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/jquery.fitvids5152.js?ver=1.0'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/nivo-lightbox.min7359.js?ver=1.2.0'></script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/slickee8b.js?ver=1.8.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ap_params = {"accesspress_show_pager":"true","accesspress_show_controls":"true","accesspress_auto_transition":"true","accesspress_slider_transition":"true","accesspress_slider_speed":"3500","accesspress_slider_pause":"4000"};
/* ]]> */
</script>
<script type='text/javascript' src='assets/wp-content/themes/accesspress-parallax/js/custom5152.js?ver=1.0'></script>
<script type='text/javascript' src='assets/wp-includes/js/wp-embed.min55fe.js?ver=4.9.5'></script>
<script type='text/javascript' src='assets/wp-content/plugins/jetpack/_inc/build/spin.min4e44.js?ver=1.3'></script>
<script type='text/javascript' src='assets/wp-content/plugins/jetpack/_inc/build/jquery.spin.min4e44.js?ver=1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"id","ajaxurl":"http:\/\/smaboardingschool.sekolahsabilillah.sch.id\/wp-admin\/admin-ajax.php","nonce":"a064516618","display_exif":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"black","comment":"Komentar","post_comment":"Kirim Komentar","write_comment":"Tulis Komentar...","loading_comments":"Memuat Komentar...","download_original":"Tampilkan ukuran penuh <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"Pastikan memasukkan teks sebelum mengirimkan komentar Anda.","no_comment_email":"Silakan masukkan alamat email ke form komentar.","no_comment_author":"Silakan masukkan nama ke form komentar.","comment_post_error":"Maaf, terjadi galat saat menerbitkan komentar Anda. Silakan coba lagi.","comment_approved":"Komentar Anda telah disetujui.","comment_unapproved":"Komentar Anda sedang dimoderasi.","camera":"Kamera","aperture":"Aperture","shutter_speed":"Shutter Speed","focal_length":"Focal Length","copyright":"Copyright","comment_registration":"0","require_name_email":"1","login_url":"http:\/\/smaboardingschool.sekolahsabilillah.sch.id\/wp-login.php?redirect_to=http%3A%2F%2Fsmaboardingschool.sekolahsabilillah.sch.id%2Fpenerimaan-siswa-baru%2F","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<fieldset><label for=\"email\">Surel (Wajib)<\/label> <input type=\"text\" name=\"email\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-email-field\" \/><\/fieldset><fieldset><label for=\"author\">Nama (Wajib)<\/label> <input type=\"text\" name=\"author\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-author-field\" \/><\/fieldset><fieldset><label for=\"url\">Situs web<\/label> <input type=\"text\" name=\"url\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-url-field\" \/><\/fieldset>"};
/* ]]> */
</script>
<script type='text/javascript' src='assets/wp-content/plugins/jetpack/_inc/build/carousel/jetpack-carousel.mina4d5.js?ver=20170209'></script>
<script type='text/javascript' src='assets/wp-content/plugins/simple-lightbox/client/js/prod/lib.cored315.js?ver=2.6.0'></script>
<script type='text/javascript' src='assets/wp-content/plugins/simple-lightbox/client/js/prod/lib.viewd315.js?ver=2.6.0'></script>
<script type='text/javascript' src='assets/wp-content/plugins/simple-lightbox/themes/baseline/js/prod/clientd315.js?ver=2.6.0'></script>
<script type='text/javascript' src='assets/wp-content/plugins/simple-lightbox/themes/default/js/prod/clientd315.js?ver=2.6.0'></script>
<script type='text/javascript' src='assets/wp-content/plugins/simple-lightbox/template-tags/item/js/prod/tag.itemd315.js?ver=2.6.0'></script>
<script type='text/javascript' src='assets/wp-content/plugins/simple-lightbox/template-tags/ui/js/prod/tag.uid315.js?ver=2.6.0'></script>
<script type='text/javascript' src='assets/wp-content/plugins/simple-lightbox/content-handlers/image/js/prod/handler.imaged315.js?ver=2.6.0'></script>
<style>
	/* POP-UP */
	#age_button_area
	{
padding-top:10px;
position: relative;
width: 100%;
bottom: 5px;
padding-top:5px;
	}

	#ageEnterButton
	{
border-color:;
background:;
color: ;
	}

	#ageLeaveButton
	{
border-color:;
background:;
color: ;
	}

	#popup_content
	{
overflow-y:hidden;    	overflow-x: auto;
height: 100%;
width:100%;
	}

	#itro_popup
	{
visibility: hidden;
opacity: 0;
position: fixed;
background-image: ;
background-repeat: no-repeat;
background-position: center center;
margin: 0 auto;
left:1px;
right:1px;
z-index: 2147483647 !important;
padding:2px !important;	    border: solid;border-color:#FFFFFF;    	border-radius: 8px;
border-width: 3px;
width: 580px;
height: auto;
background-color: #FFFFFF;
				}

	#close_cross
	{
cursor:pointer;
width:20px;
position:absolute;
top:-22px;
right:-22px;
	}

	#popup_countdown
	{
color: ;
width: 100%;
padding-top: 0px ;
padding-bottom:0px ;
background-color: #FFFFFF;
height: 0px ;
overflow: hidden;
position:absolute;
bottom:0px;
left:0px;
border-bottom-left:8px;
border-bottom-right:8px;
	}

	#itro_opaco{
display: none;
position:fixed;
background-color:  #8A8A8A;
font-size: 10px;
font-family: Verdana;
top: 100px;
width: 100%;
height: 100%;
z-index: 2147483646 !important;
left: 0px ;
right: 0px;
top: 0px;
bottom: 0px;
opacity: 0.40 ;
filter:alpha(opacity = 40); /* For IE8 and earlier */
	}

	/* label under the popup used to close it for mobile devices */
	#ipp_mobile_close_tab{
display: none;
border:none;
position: absolute;
padding: 5px;
width: 80px;
text-align: center;
left: 1px;
right: 1px;
margin: auto;
background-color: #FFFFFF        }
	#ipp_mobile_close_txt{
font-weight: bold;
cursor: pointer;
	}

	/* RESPONSIVE CSS */
	@media screen and (max-width: 780px)
	{
#itro_popup{
		max-width: 470px;
		}
#close_cross{
		display: none;
}
#ipp_mobile_close_tab{
		display: block;
}
	}
	@media screen and (max-width: 480px){
#itro_popup{
		max-width: 300px
}
	}


@media screen and (max-width: 1024px)
{
	#itro_popup{display: none !important;}
	#itro_opaco{display: none !important;}
}    </style>
<!-- <div id="itro_popup">
<div id="popup_countdown" align="center">This popup will close in:<b id="timer"></b></div><img id="close_cross" src="assets/wp-content/plugins/itro-popup/images/close-icon-white.png" alt="CLOSE" title="CLOSE" onclick="itro_exit_anim();">		<div id="popup_content"><h4 style="text-align: center;"><a href="penerimaan-siswa-baru/index.html"><img class="aligncenter wp-image-5685 size-large" src="assets/wp-content/uploads/2018/04/1-1-1024x685.png" alt="" width="640" height="428" /></a></h4>		</div>
	<div id="ipp_mobile_close_tab">
<span id="ipp_mobile_close_txt"  onclick="itro_exit_anim();">CLOSE</span>
</div>
</div> -->
<div id="itro_opaco"  onclick="itro_exit_anim();"  ></div>
<script type="text/javascript">
/* init var */
itro_cookie_expiration = 0;
itro_is_preview = false;/* pass true if is the preview page. used for cookie control via js due W3 total cache or similar */
auto_margin = "yes";

/* invert the color of the mobile close tab label text */
jQuery('#ipp_mobile_close_txt').css({color: itro_invert_color(itro_rgb2hex(jQuery('#itro_popup').css('border-bottom-color'))) });
itro_age_restriction = false;				document.onkeydown = function(event)
	{
		event = event || window.event;
		var key = event.keyCode;
		if(key==27)
		{
			jQuery("#itro_popup").fadeOut(function() {jQuery("#itro_opaco").fadeOut();});
		}
	}; 				itro_enter_anim(auto_margin);
				var popTime=20;
	interval_id = setInterval(function(){popTimer();},1000); /* the countdown  */
		</script>
<div style="display:none">
</div>
<script type="text/javascript" id="slb_footer">/* <![CDATA[ */if ( !!window.jQuery ) {(function($){$(document).ready(function(){if ( !!window.SLB && SLB.has_child('View.init') ) { SLB.View.init({"ui_autofit":true,"ui_animate":true,"slideshow_autostart":true,"slideshow_duration":"2","group_loop":true,"ui_overlay_opacity":"0.8","ui_title_default":false,"theme_default":"slb_black","ui_labels":{"loading":"Loading","close":"Close","nav_next":"Next","nav_prev":"Previous","slideshow_start":"Start slideshow","slideshow_stop":"Stop slideshow","group_status":"Item %current% of %total%"}}); }
if ( !!window.SLB && SLB.has_child('View.assets') ) { {$.extend(SLB.View.assets, {"527518533":{"id":5443,"type":"image","source":"http:\/\/smaboardingschool.sekolahsabilillah.sch.id\/wp-content\/uploads\/2018\/03\/cetak-tim-pengembang-fix-tanpa-keterangan.jpg","internal":true,"sizes":{"thumbnail":{"file":"cetak-tim-pengembang-fix-tanpa-keterangan-150x150.jpg","width":150,"height":150,"mime-type":"image\/jpeg"},"medium":{"file":"cetak-tim-pengembang-fix-tanpa-keterangan-300x200.jpg","width":300,"height":200,"mime-type":"image\/jpeg"},"medium_large":{"file":"cetak-tim-pengembang-fix-tanpa-keterangan-768x512.jpg","width":768,"height":512,"mime-type":"image\/jpeg"},"large":{"file":"cetak-tim-pengembang-fix-tanpa-keterangan-1024x683.jpg","width":1024,"height":683,"mime-type":"image\/jpeg"},"blog-header":{"file":"cetak-tim-pengembang-fix-tanpa-keterangan-900x300.jpg","width":900,"height":300,"mime-type":"image\/jpeg"},"portfolio-thumbnail":{"file":"cetak-tim-pengembang-fix-tanpa-keterangan-560x450.jpg","width":560,"height":450,"mime-type":"image\/jpeg"},"blog-thumbnail":{"file":"cetak-tim-pengembang-fix-tanpa-keterangan-480x300.jpg","width":480,"height":300,"mime-type":"image\/jpeg"},"team-thumbnail":{"file":"cetak-tim-pengembang-fix-tanpa-keterangan-380x380.jpg","width":380,"height":380,"mime-type":"image\/jpeg"},"original":{"file":"2018\/03\/cetak-tim-pengembang-fix-tanpa-keterangan.jpg","width":1024,"height":683}},"image_meta":{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"1480716023","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"1","keywords":[]},"description":"","title":"cetak tim pengembang fix tanpa keterangan","caption":""}});} }
/* THM */
if ( !!window.SLB && SLB.has_child('View.extend_theme') ) { SLB.View.extend_theme('slb_baseline',{"name":"Baseline","parent":"","styles":[{"handle":"base","uri":"http:\/\/smaboardingschool.sekolahsabilillah.sch.id\/wp-content\/plugins\/simple-lightbox\/themes\/baseline\/css\/style.css","deps":[]}],"layout_raw":"<div class=\"slb_container\"><div class=\"slb_content\">{{item.content}}<div class=\"slb_nav\"><span class=\"slb_prev\">{{ui.nav_prev}}<\/span><span class=\"slb_next\">{{ui.nav_next}}<\/span><\/div><div class=\"slb_controls\"><span class=\"slb_close\">{{ui.close}}<\/span><span class=\"slb_slideshow\">{{ui.slideshow_control}}<\/span><\/div><div class=\"slb_loading\">{{ui.loading}}<\/div><\/div><div class=\"slb_details\"><div class=\"inner\"><div class=\"slb_data\"><div class=\"slb_data_content\"><span class=\"slb_data_title\">{{item.title}}<\/span><span class=\"slb_group_status\">{{ui.group_status}}<\/span><div class=\"slb_data_desc\">{{item.description}}<\/div><\/div><\/div><div class=\"slb_nav\"><span class=\"slb_prev\">{{ui.nav_prev}}<\/span><span class=\"slb_next\">{{ui.nav_next}}<\/span><\/div><\/div><\/div><\/div>"}); }if ( !!window.SLB && SLB.has_child('View.extend_theme') ) { SLB.View.extend_theme('slb_default',{"name":"Default (Light)","parent":"slb_baseline","styles":[{"handle":"font","uri":"http:\/\/fonts.googleapis.com\/css?family=Yanone+Kaffeesatz","deps":[]},{"handle":"base","uri":"http:\/\/smaboardingschool.sekolahsabilillah.sch.id\/wp-content\/plugins\/simple-lightbox\/themes\/default\/css\/style.css","deps":[]}]}); }if ( !!window.SLB && SLB.has_child('View.extend_theme') ) { SLB.View.extend_theme('slb_black',{"name":"Default (Dark)","parent":"slb_default","styles":[{"handle":"base","uri":"http:\/\/smaboardingschool.sekolahsabilillah.sch.id\/wp-content\/plugins\/simple-lightbox\/themes\/black\/css\/style.css","deps":[]}]}); }})})(jQuery);}/* ]]> */</script>
<script type="text/javascript" id="slb_context">/* <![CDATA[ */if ( !!window.jQuery ) {(function($){$(document).ready(function(){if ( !!window.SLB ) { {$.extend(SLB, {"context":["public","user_guest"]});} }})})(jQuery);}/* ]]> */</script>
<script type='text/javascript'>
_stq = window._stq || [];
_stq.push([ 'view', {v:'ext',j:'1:5.8',blog:'142180995',post:'4651',tz:'7',srv:'smaboardingschool.sekolahsabilillah.sch.id'} ]);
_stq.push([ 'clickTrackerInit', '142180995', '4651' ]);
</script>

</body>
</html>
