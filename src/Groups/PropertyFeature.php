<?php
/**
*	This file contains the Property Feature Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Groups\FeaturedProperty;

/**
*	Property Feature Group Class
*
*	Class to handle Property group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class PropertyFeature implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['agent_ref' => ['type' => 'string', 'required' => true, 'max' => 80], 'featured_property' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\FeaturedProperty::class, 'required' => true]];
}