<?php
/**
*	This file contains the Price Qualifiers Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum PriceQualifiers : int
{
    case Defaults = 0;
    case POA = 1;
    case GuidePrice = 2;
    case FixedPrice = 3;
    case OffersInExcessOf = 4;
    case OIRO = 5;
    case SaleByTender = 6;
    case From = 7;
    case SharedOwnership = 9;
    case OffersOver = 10;
    case PartBuyRent = 11;
    case SharedEquity = 12;
    case ComingSoon = 16;
}