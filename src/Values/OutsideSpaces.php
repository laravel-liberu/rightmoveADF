<?php
/**
*	This file contains the Outside Spaces Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum OutsideSpaces : int
{
    case BackGarden = 29;
    case CommunalGarden = 30;
    case EnclosedGarden = 31;
    case FrontGarden = 32;
    case PrivateGarden = 33;
    case RearGarden = 34;
    case Terrace = 35;
    case Patio = 36;
}