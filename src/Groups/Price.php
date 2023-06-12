<?php
/**
*	This file contains the Price Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\PriceQualifiers;
use Frozensheep\RightmoveADF\Values\RentFrequencies;
use Frozensheep\RightmoveADF\Values\TenureTypes;

/**
*	Price Group Class
*
*	Class to handle Price group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Price implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['price' => ['type' => 'number', 'required' => true, 'min' => 1], 'price_qualifier' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\PriceQualifiers::class], 'deposit' => ['type' => 'number'], 'administration_fee' => ['type' => 'string', 'max' => 4000], 'rent_frequency' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\RentFrequencies::class], 'tenure_type' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\TenureTypes::class], 'auction' => ['type' => 'boolean'], 'tenure_unexpired_years' => ['type' => 'int'], 'price_per_unit_area' => ['type' => 'number'], 'price_per_unit_per_annum' => ['type' => 'number']];
}