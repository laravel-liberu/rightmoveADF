<?php
/**
*	This file contains the Add Featured Property Request model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Request;

use Frozensheep\RightmoveADF\Request\RequestBase;
use Frozensheep\RightmoveADF\Groups\Network;
use Frozensheep\RightmoveADF\Groups\Branch;
use Frozensheep\RightmoveADF\Groups\PropertyFeature;

/**
*	Add Featured Property Class
*
*	Class for the add featured property request.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class AddFeaturedProperty extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/addfeaturedproperty';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/addfeaturedproperty';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = ['network' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Network::class, 'required' => true], 'branch' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Branch::class, 'required' => true], 'property' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\PropertyFeature::class, 'required' => true]];
}