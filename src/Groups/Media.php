<?php
/**
*	This file contains the Media Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\MediaTypes;

/**
*	Media Group Class
*
*	Class to handle Media group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Media implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['media_type' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\MediaTypes::class, 'required' => true], 'media_url' => ['type' => 'string', 'required' => true, 'max' => 250], 'caption' => ['type' => 'string', 'max' => 50], 'sort_order' => ['type' => 'int', 'min' => 0], 'media_update_date' => ['type' => 'datetime', 'format' => 'd-m-Y G:i:s', 'autoinit' => false]];
}