<?php
/**
*	This file contains the Media Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum MediaTypes : int
{
    case Image = 1;
    case Floorplan = 2;
    case Brochure = 3;
    case VirtualTour = 4;
    case AudioTour = 5;
    case EPC = 6;
    case EPCGraph = 7;
}