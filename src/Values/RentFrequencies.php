<?php
/**
*	This file contains the Rent Frequencies Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum RentFrequencies : int
{
    case Yearly = 1;
    case Quarterly = 4;
    case Monthly = 12;
    case Weekly = 52;
    case Daily = 365;
}