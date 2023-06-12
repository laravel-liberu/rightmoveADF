<?php
/**
*	This file contains the Address Group model class.
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
*	Address Group Class
*
*	Class to handle Address group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Address implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['house_name_number' => ['type' => 'string', 'required' => true, 'max' => 60], 'address_2' => ['type' => 'string', 'max' => 60], 'address_3' => ['type' => 'string', 'max' => 60], 'address_4' => ['type' => 'string', 'max' => 60], 'town' => ['type' => 'string', 'required' => true, 'max' => 60], 'postcode_1' => ['type' => 'string', 'required' => true, 'max' => 4], 'postcode_2' => ['type' => 'string', 'required' => true, 'max' => 3], 'display_address' => ['type' => 'string', 'required' => true, 'max' => 120], 'latitude' => ['type' => 'float', 'max' => 90.0, 'min' => -90.0], 'longitude' => ['type' => 'float', 'max' => 180.0, 'min' => -180.0], 'pov_latitude' => ['type' => 'float', 'max' => 90.0, 'min' => -90.0], 'pov_longitude' => ['type' => 'float', 'max' => 180.0, 'min' => -180.0], 'pov_pitch' => ['type' => 'float', 'max' => 180.0, 'min' => -180.0], 'pov_heading' => ['type' => 'float', 'max' => 360.0, 'min' => -360.0], 'pov_zoom' => ['type' => 'int']];
}