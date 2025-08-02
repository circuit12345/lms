<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'u876035774_LORfK';
$CFG->dbuser    = 'u876035774_muBhm';
$CFG->dbpass    = '6}\\GXd0f[DL>l\\xW';
$CFG->prefix    = 'yd0r_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://lms.circuitmakers.in';
$CFG->dataroot  = '/home/u876035774/domains/lms.circuitmakers.in/public_html/.htrmw2rnphfvtb.data/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->theme = 'boost';

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
