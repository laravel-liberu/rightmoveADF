<?php
/**
*	This file contains the Premium Listing Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\DisplayTypes;
use Frozensheep\RightmoveADF\Values\StampTexts;

/**
*	Premium Listing  Group Class
*
*	Class to handle Premium Listing group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class PremiumListing implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['display_type' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\DisplayTypes::class, 'required' => true], 'resale_stamp_text' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\StampTexts::class], 'lettings_stamp_text' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\StampTexts::class], 'web_flag' => ['type' => 'boolean', 'default' => false, 'required' => true], 'mobile_flag' => ['type' => 'boolean', 'default' => false, 'required' => true]];
}