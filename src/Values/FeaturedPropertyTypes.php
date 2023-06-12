<?php
/**
*	This file contains the Featured Property Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum FeaturedPropertyTypes : int
{
    case Subscription = 1;
    case FeaturedPropertyOfTheWeek = 2;
}