<?php
/**
*	This file contains the Furnishings Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum Furnishings : int
{
    case Furnished = 0;
    case PartFurnished = 1;
    case Unfurnished = 2;
    case FurnishedUnfurnished = 4;
}