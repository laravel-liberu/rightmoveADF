<?php
/**
*	This file contains the Property Ref Group model class.
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
*	Property Ref Group Class
*
*	Class to handle Property Ref group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class PropertyRef implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['agent_ref' => ['type' => 'string', 'required' => true, 'max' => 80]];
}