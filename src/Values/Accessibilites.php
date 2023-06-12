<?php
/**
*	This file contains the Accessibilites Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum Accessibilites : int
{
    case NotSuitableForWheelchairUsers = 42;
    case LevelAccess = 37;
    case LiftAccess = 38;
    case RampedAccess = 39;
    case WetRoom = 40;
    case WideDoorways = 41;
}