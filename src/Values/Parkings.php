<?php
/**
*	This file contains the Parkings Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum Parkings : int
{
    case Allocated = 13;
    case Communal = 14;
    case Covered = 15;
    case Garage = 16;
    case Driveway = 17;
    case Gated = 18;
    case OffStreet = 19;
    case OnStreet = 20;
    case Rear = 21;
    case Permit = 22;
    case PrivateParking = 23;
    case Residents = 24;
}