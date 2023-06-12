<?php
/**
*	This file contains the Stamp Texts Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum StampTexts : int
{
    case Auction = 1;
    case AvailableSoon = 2;
    case StampDutyPaid = 4;
    case ShortLet = 5;
    case Furnished = 6;
    case LongLet = 7;
    case OpenHouse = 8;
    case Incentive = 9;
    case NoChain = 10;
    case PartExchange = 11;
    case NewListing = 12;
    case FixedPrice = 13;
    case PremiumListing = 14;
    case OpenToOffers = 15;
    case NewPrice = 16;
    case NoStampDuty = 17;
    case SeaView = 19;
    case PublicNotice = 20;
    case Unfurnished = 21;
    case ViewingAdvised = 22;
    case WithLand = 23;
    case AttentionInvestors = 24;
    case StarBuy = 25;
    case NoSticker = 26;
    case Waterside = 27;
    case GenerousGarden = 28;
    case RecentlyRenovated = 29;
    case StunningViews = 30;
    case Smallholding = 31;
    case OpenDay = 32;
    case DoubleGarage = 33;
    case Annexe = 34;
    case MediaTour = 35;
    case BestBid = 36;
    case InformalTender = 37;
    case ForStudents = 59;
    case PetsConsidered = 60;
    case AvailableNow = 61;
    case SafeMoveProperty = 64;
    case AudioTour = 65;
    case VideoTour = 66;
    case ListedBuilding = 71;
    case PeriodProperty = 72;
    case Retirement = 73;
    case Equestrian = 74;
    case Conversion = 75;
    case Extended = 76;
    case Parking = 77;
    case ConfidentialRegister = 78;
    case BuyToLet = 79;
    case OutBuildings = 80;
    case FullyManaged = 85;
    case MoveByChristmas = 86;
}