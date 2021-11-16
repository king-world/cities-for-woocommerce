<?php
/**
 * Plugin Name: Cities Levels for Woocommerce
 * Plugin URL: https://ubongobot.com
 * Author: Ubong Obot
 * Authot URL: https://ubongobot.com
 * Description: This plugin adds cities for shipping zones in woocommerce
 * Version: 0.1.0
 * License: GPL2
 * License URL: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text-domain: clw
 */

 //Add Basic Plugin Security
 defined('ABSPATH') or die;


 add_filter('woocommerce_states', 'kingz_clw');

 function kingz_clw($states) {
    
    $map = array();

    $cities = array(
        'NG101' => array(
            'city'     => 'Lagos',
            'division' => 'Lagos Mainland'
        ),
        'NG102' => array(
            'city'     => 'Lagos',
            'division' => 'Lagos Island'
        ),
        'NG103' => array(
            'city'     => 'Outside Lagos',
            'division' => 'Other States'
        ),
    );

    foreach ( $cities as $city => $cityValue){
        $map[$city] = $cityValue['city'] . ', '. $cityValue['division'];

    }

    $states['NG'] = $map;
       
    
    /* $states['NG'] = array (
        'NG101' => 'Lagos',
        'NG102' => 'Abia',
    );
    */
    
    
    return $states;
 }

?>