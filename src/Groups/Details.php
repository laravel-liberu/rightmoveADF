<?php
/**
*	This file contains the Details Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\Parkings;
use Frozensheep\RightmoveADF\Values\OutsideSpaces;
use Frozensheep\RightmoveADF\Values\AreaUnits;
use Frozensheep\RightmoveADF\Values\EntranceFloors;
use Frozensheep\RightmoveADF\Values\Conditions;
use Frozensheep\RightmoveADF\Values\Accessibilities;
use Frozensheep\RightmoveADF\Values\Heatings;
use Frozensheep\RightmoveADF\Values\Furnishings;
use Frozensheep\RightmoveADF\Values\CommercialuseClasses;
use Frozensheep\RightmoveADF\Groups\Room;

/**
*	Details Group Class
*
*	Class to handle Details group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Details implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = ['summary' => ['type' => 'string', 'required' => true, 'max' => 1000], 'description' => ['type' => 'string', 'required' => true, 'max' => 32000], 'features' => ['type' => 'objectarray', 'class' => \Frozensheep\Synthesize\Type\StringObject::class, 'max' => 10], 'bedrooms' => ['type' => 'int', 'required' => true, 'min' => 0], 'bathrooms' => ['type' => 'int', 'min' => 0], 'reception_rooms' => ['type' => 'int', 'min' => 0], 'parking' => ['type' => 'objectarray', 'class' => \Frozensheep\RightmoveADF\Values\Parkings::class], 'outside_space' => ['type' => 'objectarray', 'class' => \Frozensheep\RightmoveADF\Values\OutsideSpaces::class], 'year_built' => ['type' => 'int'], 'internal_area' => ['type' => 'number'], 'internal_area_unit' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\AreaUnits::class], 'land_area' => ['type' => 'number'], 'land_area_unit' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\AreaUnits::class], 'minimum' => ['type' => 'int', 'min' => 0], 'maximum' => ['type' => 'int', 'min' => 0], 'area_unit' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\AreaUnits::class], 'floors' => ['type' => 'int'], 'entrance_floor' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\EntranceFloors::class], 'condition' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\Conditions::class], 'accessibility' => ['type' => 'objectarray', 'class' => \Frozensheep\RightmoveADF\Values\Accessibilites::class], 'heating' => ['type' => 'objectarray', 'class' => \Frozensheep\RightmoveADF\Values\Heatings::class], 'furnished_type' => ['type' => 'enum', 'class' => \Frozensheep\RightmoveADF\Values\Furnishings::class], 'pets_allowed' => ['type' => 'boolean'], 'smokers_considered' => ['type' => 'boolean'], 'housing_benefit_considered' => ['type' => 'boolean'], 'sharers_considered' => ['type' => 'boolean'], 'burglar_alarm' => ['type' => 'boolean'], 'washing_machine' => ['type' => 'boolean'], 'dishwasher' => ['type' => 'boolean'], 'all_bills_inc' => ['type' => 'boolean'], 'water_bill_inc' => ['type' => 'boolean'], 'gas_bill_inc' => ['type' => 'boolean'], 'electricity_bill_inc' => ['type' => 'boolean'], 'oil_bill_inc' => ['type' => 'boolean'], 'council_tax_inc' => ['type' => 'boolean'], 'tv_licence_inc' => ['type' => 'boolean'], 'sat_cable_tv_bill_inc' => ['type' => 'boolean'], 'internet_bill_inc' => ['type' => 'boolean'], 'business_for_sale' => ['type' => 'boolean'], 'comm_use_class' => ['type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\CommercialuseClasses'], 'rooms' => ['type' => 'objectarray', 'class' => \Frozensheep\RightmoveADF\Groups\Room::class, 'max' => 99]];
}