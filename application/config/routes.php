<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'web';
$route['404_override']       = 'web/error_not_found';
$route['galeri']             = 'web/galeri';
$route['sejarah']            = 'web/hal_menu2/1';
$route['kepsek']             = 'web/hal_menu2/2';
// $route['tujuan']             = 'web/hal_menu2/3';
// $route['sarana-prasarana']   = 'web/hal_menu2/4';
// $route['strategi']           = 'web/hal_menu2/5';
$route['visi']               = 'web/hal_menu2/26';
$route['misi']               = 'web/hal_menu2/27';
$route['denah-sekolah']      = 'web/hal_menu2/28';
$route['so']                 = 'web/hal_menu2/7';
$route['makna-logo']         = 'web/hal_menu2/29';
$route['mars']               = 'web/hal_menu2/6';

$route['profile-guru']               = 'web/hal_menu2/30';
$route['profile-staf']               = 'web/hal_menu2/31';
$route['perangkat-pembelajaran']     = 'web/hal_menu2/32';
$route['kegiatan-pembelajaran']      = 'web/hal_menu2/33';
// $route['direktori-guru']     = 'web/hal_menu2/8';
// $route['silabus']            = 'web/hal_menu2/9';
// $route['materi-uji']         = 'web/hal_menu2/10';
// $route['materi-ajar']        = 'web/hal_menu2/11';

// $route['tata-tertib-siswa']  = 'web/hal_menu2/13';
// $route['ekstrakurikuler']    = 'web/hal_menu2/14';
// $route['osis']               = 'web/hal_menu2/15';
// $route['web-club']           = 'web/hal_menu2/16';
// $route['beasiswa']           = 'web/hal_menu2/17';
// $route['direktori-alumni']   = 'web/hal_menu2/18';
// $route['info-alumni']        = 'web/hal_menu2/19';
// $route['prog-kerja-wk-kurikulum'] = 'web/hal_menu2/20';
// $route['rencana-kegiatan']   = 'web/hal_menu2/21';
// $route['buku-tamu']          = 'web/hal_menu2/22';
// $route['universitas-swasta'] = 'web/hal_menu2/23';
// $route['universitas-negeri'] = 'web/hal_menu2/24';
// $route['agenda']             = 'web/hal_menu2/25';
//
// $route['pedoman_ppdb']       = 'web/kat/pedoman_ppdb/pedoman-ppdb';
$route['kat/(:any)']         = 'web/kat/$1';
$route['kat/(:any)/(:any)']  = 'web/kat/$1/$2';
$route['kat/(:any)/(:any)/(:any)']  = 'web/kat/$1/$2/$3';

$route['pencarian/(:any)']         = 'web/pencarian/$1';
$route['pencarian/(:any)/(:any)']  = 'web/pencarian/$1/$2';
$route['translate_uri_dashes'] = FALSE;
