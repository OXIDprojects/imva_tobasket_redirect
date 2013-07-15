<?php

/**
 * IMVA Tobastet Redirect
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
 * (c) 2013 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 13/7/2-15
 * V 1.0.1
 *
 */

/**
 * Basket manager extension
 */
class imva_oxcmp_basket_redirect extends imva_oxcmp_basket_redirect_parent
{
	/**
	 * Service Object
	 */
	private $_oSvc = null;
	
	
	
	/**
	 * Construct
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->_oSvc = oxNew('imva_service');
		$this->_oSvc->init(20130715);
	}
	
	
	
	/**
	 * Redirect, if URL exists and is active.
	 * 
	 * @param string $sProductId Product ID (default null)
	 * @param double $dAmount    Product amount (default null)
	 * @param array  $aSel       (default null)
	 * @param array  $aPersParam (default null)
	 * @param bool   $blOverride If true means increase amount of chosen article (default false)
	 *
	 * @return mixed 
	 */
	public function tobasket($sProductId = null, $dAmount = null, $aSel = null, $aPersParam = null, $blOverride = false)
	{
		$oArticle = oxNew('oxarticle');
		$oArticle->load($this->_oSvc->req('anid'));
		
		if ($oArticle->oxarticles__imva_tobasketurlact->value){
			header('Location: '.$oArticle->oxarticles__imva_tobasketurl->value);
		}
	}
}