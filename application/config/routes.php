<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['listing/(:any)'] = 'listing/view/$1';
$route['listing/add'] = 'listing/add';
$route['listing/save'] = 'listing/save';
$route['listing/match'] = 'listing/match';

$route['listing/verify/(:any)'] = 'listing/verify/$1';
$route['listing/uploadImage'] = 'listing/uploadImage';
$route['listing/addAktivitas'] = 'modal/addAktivitas';
$route['listing/addPromosi'] = 'modal/addPromosi';
$route['listing/saveAktivitas'] = 'listing/saveAktivitas';
$route['listing/savePromosi'] = 'listing/savePromosi';
$route['listing/getTempat'] = 'listing/getTempat';
$route['admin/callin'] = 'admin/callin';
$route['admin/saveCallin'] = 'admin/saveCallin';
$route['admin/adminlisting'] = 'admin/adminlisting';
$route['admin/dokumen'] = 'admin/dokumen';
$route['admin/event'] = 'admin/event';
$route['admin/getEvent'] = 'admin/getEvent';
$route['admin/submitdokumen'] = 'admin/submitdokumen';
$route['admin/getDokumen'] = 'admin/getDokumen';
$route['admin/hotpick'] = 'admin/hotpick';
$route['admin/submithotpick'] = 'admin/submithotpick';
$route['admin/verify/(:any)'] = 'admin/verify/$1';
$route['customer'] = "customer";
$route['customer/save'] = "customer/save";
$route['customer/update'] = "customer/update";
$route['customer/detail'] = "customer/custdetail";
$route['customer/match'] = "customer/match";
$route['customer/loaddialog'] = "customer/loadDialog";
$route['customer/saveHistory'] = "customer/saveHistory";
$route['customer/getCustomer'] = "customer/getCustomer";
$route['lokasi/getLokasiList'] = "lokasi/getLokasiList";
$route['lokasi/getKotaList'] = "lokasi/getKotaList";
$route['lokasi/getPropinsiList'] = "lokasi/getPropinsiList";
$route['lokasi/getAreaList'] = "lokasi/getAreaList";
$route['email/sendlisting'] = "email/sendlisting";
$route['email/blast'] = "email/blast";
$route['users/adduser'] = "modal/adduser";
$route['users/simpanuser'] = "user/simpanuser";
$route['upload/listing'] = "upload/listingimage";
$route['report/listingsold'] = "report/listing_terjual";
$route['report/entrybaru'] = "report/entry_marketing";
$route['dashboard/getListingSold'] = "dashboard/getListingSold";
$route['dashboard/getListingBaru'] = "dashboard/getListingBaru";
$route['dashboard/getaktivitas'] = "dashboard/getaktivitas";
$route['dashboard/getDokumen'] = 'dashboard/getDokumen';

//$route['match/listing'] = "lokasi/getAreaList";
$route['listing'] = 'listing';
$route['login'] = "login";
$route['users/manage'] = "user";
$route['login/signin'] = "login/signin";
$route['login/logout'] = "login/logout";
$route['email/template'] = 'email/template';
$route['email/template/save'] = "email/templatesave";
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/dashboard';
//$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */