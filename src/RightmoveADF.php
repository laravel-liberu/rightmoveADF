<?php
/**
*	This file contains the RightmoveADF class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF;

use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Exception\UnknownRequestTypeException;
use Frozensheep\RightmoveADF\Curl;
use Frozensheep\RightmoveADF\Request\SendProperty;
use Frozensheep\RightmoveADF\Request\RemoveProperty;
use Frozensheep\RightmoveADF\Request\GetBranchPropertyList;
use Frozensheep\RightmoveADF\Request\AddPremiumListing;
use Frozensheep\RightmoveADF\Request\AddFeaturedProperty;
use Frozensheep\RightmoveADF\Request\RemoveFeaturedProperty;
use Frozensheep\RightmoveADF\Request\GetPropertyPerformance;
use Frozensheep\RightmoveADF\Request\GetBranchPerformance;
use Frozensheep\RightmoveADF\Request\GetBrandEmails;
use Frozensheep\RightmoveADF\Request\GetBranchEmails;
use Frozensheep\RightmoveADF\Request\GetBrandPhoneLeads;
use Frozensheep\RightmoveADF\Request\GetBranchPhoneLeads;
use Frozensheep\RightmoveADF\Request\GetPropertyEmails;

/**
*	RightmoveADF Class
*
*	Class for the RightmoveADF.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class RightmoveADF {

	use Synthesizer;

	final public const TEST = 0;
	final public const LIVE = 1;
	final public const DEBUG = 1;

	final public const SendProperty = 1;
	final public const RemoveProperty = 2;
	final public const GetBranchPropertyList = 3;
	final public const AddPremiumListing = 4;
	final public const AddFeaturedProperty = 5;
	final public const RemoveFeaturedProperty = 6;
	final public const GetPropertyPerformance = 7;
	final public const GetBranchPerformance = 8;
	final public const GetBrandEmails = 9;
	final public const GetBranchEmails = 10;
	final public const GetBrandPhoneLeads = 11;
	final public const GetBranchPhoneLeads = 12;
	final public const GetPropertyEmails = 13;

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = ['cert_file' => ['type' => 'string'], 'cert_pass' => ['type' => 'string'], 'environment' => ['type' => 'int', 'min' => 0, 'max' => 1, 'default' => RightmoveADF::TEST]];

	/**
	*	Class Constructor
	*
	*	Class constructure which accepts the certificate file, password and enviroment.
	*	@param string $strCertFile The certificate file.
	*	@param string $strCertPass The certificate password.
	*	@param int $numEnvironment The environment to run in.
	*	@return self
	*/
	public function __construct($strCertFile, $strCertPass, $numEnvironment = RightmoveADF::TEST){
		$this->cert_file = $strCertFile;
		$this->cert_pass = $strCertPass;
		$this->environment = $numEnvironment;
	}

	/**
	*	Create Request Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public static function createRequest($numRequestType){
		return match ($numRequestType) {
      RightmoveADF::SendProperty => new SendProperty(),
      RightmoveADF::RemoveProperty => new RemoveProperty(),
      RightmoveADF::GetBranchPropertyList => new GetBranchPropertyList(),
      RightmoveADF::AddPremiumListing => new AddPremiumListing(),
      RightmoveADF::AddFeaturedProperty => new AddFeaturedProperty(),
      RightmoveADF::RemoveFeaturedProperty => new RemoveFeaturedProperty(),
      RightmoveADF::GetPropertyPerformance => new GetPropertyPerformance(),
      RightmoveADF::GetBranchPerformance => new GetBranchPerformance(),
      RightmoveADF::GetBrandEmails => new GetBrandEmails(),
      RightmoveADF::GetBranchEmails => new GetBranchEmails(),
      RightmoveADF::GetBrandPhoneLeads => new GetBrandPhoneLeads(),
      RightmoveADF::GetBranchPhoneLeads => new GetBranchPhoneLeads(),
      RightmoveADF::GetPropertyEmails => new GetPropertyEmails(),
      default => throw new UnknownRequestTypeException(),
  };
	}

	/**
	*	Send Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public function send($objRequest, $strURLOverride = '', $boolDebug = false){
		$strURL = $strURLOverride ?: $objRequest->getURL($this->environment);

		return Curl::send(json_encode($objRequest, JSON_THROW_ON_ERROR), $strURL, $this->cert_file, $this->cert_pass, $boolDebug);
	}
}