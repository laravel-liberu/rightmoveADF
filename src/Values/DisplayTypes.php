<?php
/**
*	This file contains the Display Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum DisplayTypes : int
{
    case OneLargeTwoSmall = 1;
    case OneLargeImage = 2;
}