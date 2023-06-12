<?php
/**
*	This file contains the Send Property Request class.
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
use Frozensheep\RightmoveADF\Groups\Property;

/**
*	Send Property Class
*
*	Class for the send property request.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class SendProperty extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/sendpropertydetails';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/sendpropertydetails';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = ['network' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Network::class, 'required' => true], 'branch' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Branch::class, 'required' => true], 'property' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Property::class, 'required' => true]];
}