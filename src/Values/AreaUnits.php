<?php
/**
*	This file contains the Area Units Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum AreaUnits : int
{
    case SqFt = 1;
    case SqM = 2;
    case Acre = 3;
    case Hectares = 4;
}