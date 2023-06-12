<?php
/**
*	This file contains the Featured Property Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\FeaturedPropertyTypes;

/**
*	Featured Property Group Class
*
*	Class to handle Featured Property group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class FeaturedProperty implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['featured_property_type' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\FeaturedPropertyTypes::class, 'required' => true]];
}