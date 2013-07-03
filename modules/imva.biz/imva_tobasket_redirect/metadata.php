<?php

/**
 * IMVA toBasket-Redirect
 *
 *
 * Redistribution permitted.
 *
 * Weitergabe verboten.
 *
 *
 * This Software is intellectual property of imva.biz respectively of its author and is protected
 * by copyright law. This software product is open-source, but not freeware.
 *
 * Any unauthorized use of this software product - usage without a valid license,
 * modification, copying, redistribution, transmission is a violation of the license agreement
 * and will be prosecuted by civil and criminal law.
 *
 * By applying and using this software product, you agree to the terms and condition of usage and
 * furthermore agree, not to share information, source codes, technologies, credentials and addresses
 * of any kind.
 *
 *
 * Mit der Übernahme dieser Software akzeptieren Sie die zwischen Ihnen und dem Herausgeber
 * festgehaltenen Bedingungen und wahren Stillschweigen über die Ihnen zugänglich gemachten
 * Informationen, Quellcodes, Technologien, Zugangsdaten und Adressen jeglicher Art.
 * Der Bruch dieser Bedingungen kann Schadensersatzforderungen nach sich ziehen.
 *
 * (c) 2012-2013 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 13/7/2-3
 * V 1.0
 *
 */

$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
	'id'			=> 'imva_tobasket_redirect',
	'title'			=> '<img src="../modules/imva.biz/imva_services/out/src/imva-Logo-12.png" alt=".iI" title="imva.biz" /> toBasket-Redirect',
	'description'	=> array(
		'en'	=>	'<p>Redirects to a preset URL when toBasket action is performed.</p>',
		'de'	=>	'<p>Leitet auf einen zuvor eingestellten URL um, wenn die toBasket-Aktion ausgef&uuml;hrt wird.</p>',
	),
	'thumbnail'		=> 'out/src/imva-Logo-90.png',
	'version'		=> '0.0.1',
	'author'		=> 'Johannes Ackermann',
	'url'			=> 'http://imva.biz',
	'email' 		=> 'imva@imva.biz',
	'extend'		=> array(
		'oxcmp_basket'				=>	'imva.biz/imva_tobasket_redirect/application/components/imva_oxcmp_basket_redirect',
	),
	'blocks'	=>	array(
		array(
    		'template' => 'article_main.tpl',
    		'block'    => 'admin_article_main_form',
    		'file'     => 'out/blocks/admin_article_main_tobasketurl.tpl'
    	),
    ),
);