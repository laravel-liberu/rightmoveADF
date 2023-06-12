<?php
/**
*	This file contains the Removal Reasons Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum RemovalReasons : int
{
    case SoldByUs = 7;
    case SoldByAnotherAgent = 8;
    case WithdrawnFromMarket = 9;
    case LostInstruction = 10;
    case Removed = 11;
    case LetByUs = 12;
}