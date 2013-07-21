<?php

/**
 * IMVA toBasket-Redirect
 *
 *
 *
 * For redistribution in the provicer's network only.
 *
 * Weitergabe außerhalb des Anbieternetzwerkes verboten.
 *
 *
 *
 * This software is intellectual property of imva.biz respectively of its author and is protected
 * by copyright law. This software product is provided "as it is" with no guarantee.
 *
 * You are free to use this software and to modify it in order to fit your requirements.
 *
 * Any modification, copying, redistribution, transmission outsitde of the provider's platforms
 * is a violation of the license agreement and will be prosecuted by civil and criminal law.
 *
 * By applying and using this software product, you agree to the terms and conditions of use.
 *
 *
 *
 * Diese Software ist geistiges Eigentum von imva.biz respektive ihres Autors und ist durch das
 * Urheberrecht geschützt. Diese Software wird ohne irgendwelche Garantien und "wie sie ist"
 * angeboten.
 *
 * Sie sind berechtigt, diese Software frei zu nutzen und auf Ihre Bedürfnisse anzupassen.
 *
 * Jegliche Modifikation, Vervielfältigung, Redistribution, Übertragung zum Zwecke der
 * Weiterentwicklung außerhalb der Netzwerke des Anbieters ist untersagt und stellt einen Verstoß
 * gegen die Lizenzvereinbarung dar.
 *
 * Mit der Übernahme dieser Software akzeptieren Sie die zwischen Ihnen und dem Herausgeber
 * festgehaltenen Bedingungen. Der Bruch dieser Bedingungen kann Schadensersatzforderungen nach
 * sich ziehen.
 *
 *
 *
 * (EULA-13/7)
 *
 *
 *
 * (c) 2012-2013 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 13/7/2-19
 * V 1.0.1
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
	'version'		=> '1.0.1',
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