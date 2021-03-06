<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0777);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

//local
//custom constants
define("MAP_API_KEY",'AIzaSyDcAoVqCimkKElAVwPfRsiu2Va_zJh2qwo');
define("NODE_URL","http://localhost:3000/");
define("LISTING_UPLOAD_PATH","C:/program files/nodejs/RumahSuper/Public/Images/");
define("LISTING_TEMP_PATH","C:/Program Files/xampp/htdocs/upload/server/php/files/");
define("DOKUMEN_PATH","C:/Program Files/xampp/htdocs/ci/dokumen/");
define("DOKUMEN_UPLOAD_PATH","http://localhost:85/ci/dokumen/");
define("EVENT_PATH","C:/Program Files/xampp/htdocs/ci/event/");
define("EVENT_UPLOAD_PATH","http://localhost:85/ci/event/");

//server 
/*
define("MAP_API_KEY",'AIzaSyDcAoVqCimkKElAVwPfRsiu2Va_zJh2qwo');
define("NODE_URL","http://rumahsuper.com:3000/");
define("LISTING_UPLOAD_PATH","/home/nodejs/RumahSuper/public/images/");
define("LISTING_TEMP_PATH","/home/rsadmin/public_html//upload/server/php/files/");
define("DOKUMEN_PATH","/home/rsadmin/public_html/propertyadmin/dokumen/");
define("DOKUMEN_UPLOAD_PATH","http://rumahsuper.com/propertyadmin/dokumen/");
*/
/* End of file constants.php */
/* Location: ./application/config/constants.php */