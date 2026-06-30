<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo "<h2>DATABASE.PHP IS LOADED</h2>";
echo "<pre>";

echo "FILE:\n";
echo __FILE__;

echo "\n\n=============================\n";
echo "FILE CONTENTS\n";
echo "=============================\n";

echo htmlspecialchars(file_get_contents(__FILE__));

exit;

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'       => '',
    'hostname'  => 'localhost',
    'username'  => 'root',
    'password'  => 'root',
    'database'  => 'aasearchsysdb',
    'dbdriver'  => 'mysqli',
    'dbprefix'  => '',
    'pconnect'  => FALSE,
    'db_debug'  => (ENVIRONMENT !== 'production'),
    'cache_on'  => FALSE,
    'cachedir'  => '',
    'char_set'  => 'utf8',
    'dbcollat'  => 'utf8_general_ci',
    'swap_pre'  => '',
    'encrypt'   => FALSE,
    'compress'  => FALSE,
    'stricton'  => FALSE,
    'failover'  => array(),
    'save_queries' => TRUE
);