<?php
/**
*	This file contains the Conditions Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum Conditions : int
{
    case Good = 1;
    case SomeWorkNeeded = 2;
    case WorkRequiredThroughout = 3;
    case MajorRenovationRequired = 4;
}