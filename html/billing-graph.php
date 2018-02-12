<?php
/*
 * LibreNMS
 *
 *   This file is part of LibreNMS.
 *
 * @package    librenms
 * @subpackage billing
 * @copyright  (C) 2006 - 2012 Adam Armstrong
 */

ini_set('allow_url_fopen', 0);

$init_modules = array('web', 'auth');
require realpath(__DIR__ . '/..') . '/includes/init.php';

$urlargs = array(
    'type'          => 'bill_historicbits',
    'id'            => $_GET['bill_id'],
    'bill_hist_id'  => $_GET['bill_hist_id'],
    'width'         => $_GET['x'],
    'height'        => $_GET['y']
);
if (isset($_GET['count'])) {
    $urlargs['reducefactor'] = $_GET['count'];
}
if (isset($_GET['95th'])) {
    $urlargs['95th'] = $_GET['95th'];
}
if (isset($_GET['ave'])) {
    $urlargs['ave'] = $_GET['ave'];
}

$url = "{$config['base_url']}graph.php?";
$i = 0;
foreach ($urlargs as $name => $value) {
    if ($i++ > 0) {
        $url .= '&';
    }
    $url .= "$name=$value";
}

header("Location: $url", false, 301);
exit;
