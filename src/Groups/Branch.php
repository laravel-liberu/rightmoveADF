<?php
/**
*	This file contains the Branch Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\Channels;

/**
*	Branch Group Class
*
*	Class to handle Branch group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Branch implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['branch_id' => ['type' => 'int', 'required' => true], 'channel' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\Channels::class, 'required' => true], 'overseas' => ['type' => 'boolean']];
}