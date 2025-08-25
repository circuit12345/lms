<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'u876035774_pm3Mv';
$CFG->dbuser    = 'u876035774_HBWWd';
$CFG->dbpass    = ')j:DNz/Dr*RAw2,Q';
$CFG->prefix    = 'm4ql_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://lms2.circuitmakers.in';
$CFG->dataroot  = '/home/u876035774/domains/lms2.circuitmakers.in/public_html/.htdkqao4ozdodh.data/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
