<?php
/**
*	This file contains the Statuses Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum Statuses : int
{
    case Available = 1;
    case SSTC = 2;
    case SSTCM = 3;
    case UnderOffer = 4;
    case Reserved = 5;
    case LetAgreed = 6;
}