<?php
/**
 * Plugin Name: Event Booking Manager Pro
 */
defined('ABSPATH') || exit;
require_once __DIR__ . '/vendor/autoload.php';
use TPOTS\EventPlugin\Core\Loader;
$loader = new Loader();
$loader->run();
