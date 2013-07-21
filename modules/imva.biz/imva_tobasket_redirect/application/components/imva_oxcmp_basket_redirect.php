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