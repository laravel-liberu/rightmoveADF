<?php
/**
*	This file contains the Get Branch Emails Request model class.
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
use Frozensheep\RightmoveADF\Groups\ExportPeriodTime;

/**
*	Get Branch Emails Class
*
*	Class for the get branch emails request.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class GetBranchEmails extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/getbranchemails';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/getbranchemails';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = ['network' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Network::class, 'required' => true], 'branch' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Branch::class, 'required' => true], 'export_period' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\ExportPeriodTime::class, 'required' => true]];
}