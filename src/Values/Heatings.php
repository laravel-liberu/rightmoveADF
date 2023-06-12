<?php
/**
*	This file contains the Heatings Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum Heatings : int
{
    case AirConditioning = 1;
    case Central = 2;
    case DoubleGlazing = 3;
    case EcoFriendly = 4;
    case Electric = 5;
    case Gas = 6;
    case GasCentral = 7;
    case NightStorage = 8;
    case Oil = 9;
    case Solar = 10;
    case SolarWater = 11;
    case UnderFloor = 12;
}