<?php
/**
*	This file contains the Room Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\DimensionUnits;

/**
*	Room Group Class
*
*	Class to handle Room group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Room implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['room_name' => ['type' => 'string', 'required' => true, 'max' => 120], 'room_description' => ['type' => 'string', 'max' => 1000], 'room_length' => ['type' => 'number', 'min' => 0], 'room_width' => ['type' => 'number', 'min' => 0], 'room_dimension_unit' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\DimensionUnits::class], 'room_dimension_text' => ['type' => 'string', 'max' => 120], 'room_photo_urls' => ['type' => 'objectarray', 'class' => \Frozensheep\Synthesize\Type\StringObject::class, 'max' => 10]];
}