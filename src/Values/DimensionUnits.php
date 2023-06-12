<?php
/**
*	This file contains the Dimension Units Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum DimensionUnits : int
{
    case Metres = 5;
    case Centimetres = 6;
    case Millimetres = 7;
    case Feet = 8;
    case Inches = 9;
}