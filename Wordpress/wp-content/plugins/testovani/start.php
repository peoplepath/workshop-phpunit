<?php
/**
 * Plugin Name: Testovani
 * Plugin URI: https://www.peoplepath.com/
 * Description: Testovací plugin.
 * Version: 0.1
 * Author: Jiri Stepina
 * Author URI: https://www.peoplepath.com/
 **/

use Testovani\Service;

require_once __DIR__ . '/vendor/autoload.php';
function pluginDoHlavicky() {
	$service = new Service();
	$cislo1 = rand(0,10);
	$cislo2 = rand(0,10);

	echo "Součet čísel $cislo1 a $cislo2 je ".$service->soucet($cislo1,$cislo2);
}

add_action('wp_head', 'pluginDoHlavicky');