<?php
/**
*	This file contains the Let Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum LetTypes : int
{
    case LongTerm = 1;
    case ShortTerm = 2;
    case Commercial = 4;
    case NotSpecified = 0;
}