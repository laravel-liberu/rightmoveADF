<?php
/**
*	This file contains the Network Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;

/**
*	Network Group Class
*
*	Class to handle Network group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Network implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['network_id' => ['type' => 'int', 'required' => true]];
}