<?php
/**
*	This file contains the Tenure Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum TenureTypes : int
{
    case Freehold = 1;
    case Leasehold = 2;
    case Feudal = 3;
    case Commonhold = 4;
    case ShareOfFreehold = 5;
}