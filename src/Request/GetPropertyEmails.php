<?php
/**
*	This file contains the Get Property Emails Request model class.
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
use Frozensheep\RightmoveADF\Groups\PropertyRef;
use Frozensheep\RightmoveADF\Groups\ExportPeriodTime;

/**
*	Get Property Emails Class
*
*	Class for the get property emails request.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class GetPropertyEmails extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/getpropertyemails';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/getpropertyemails';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = ['network' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Network::class, 'required' => true], 'branch' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Branch::class, 'required' => true], 'property' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\PropertyRef::class, 'required' => true], 'export_period' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\ExportPeriodTime::class, 'required' => true]];
}