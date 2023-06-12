<?php
/**
*	This file contains the Entrance Floors Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum EntranceFloors : int
{
    case Basement = 1;
    case GroundFloor = 2;
    case FirstFloor = 3;
    case SecondFloor = 4;
    case HigherThan2ndFloorNoLift = 5;
    case HigherThan2ndFloorWithLift = 6;
}