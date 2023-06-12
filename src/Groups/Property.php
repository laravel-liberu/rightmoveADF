<?php
/**
*	This file contains the Property Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Groups\Address;
use Frozensheep\RightmoveADF\Groups\Price;
use Frozensheep\RightmoveADF\Groups\Details;
use Frozensheep\RightmoveADF\Groups\Principal;
use Frozensheep\RightmoveADF\Values\PropertyTypes;
use Frozensheep\RightmoveADF\Values\Statuses;
use Frozensheep\RightmoveADF\Values\LetTypes;

/**
*	Property Group Class
*
*	Class to handle Property group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Property implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['agent_ref' => ['type' => 'string', 'required' => true, 'max' => 80], 'published' => ['type' => 'boolean', 'required' => true], 'property_type' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\PropertyTypes::class, 'required' => true], 'status' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\Statuses::class, 'required' => true], 'new_home' => ['type' => 'boolean'], 'student_property' => ['type' => 'boolean'], 'house_flat_share' => ['type' => 'boolean'], 'create_date' => ['type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false], 'update_date' => ['type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false], 'date_available' => ['type' => 'datetime', 'format' => 'd-m-Y', 'autoinit' => false], 'contract_months' => ['type' => 'int'], 'minimum_term' => ['type' => 'int'], 'let_type' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\LetTypes::class], 'address' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Address::class, 'required' => true], 'price_information' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Price::class, 'required' => true], 'details' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Details::class, 'required' => true], 'media' => ['type' => 'objectarray', 'class' => \Frozensheep\RightmoveADF\Groups\Media::class, 'max' => 999], 'principal' => ['type' => 'object', 'class' => \Frozensheep\RightmoveADF\Groups\Principal::class]];
}