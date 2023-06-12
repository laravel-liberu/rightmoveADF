<?php
/**
*	This file contains the Property Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

enum PropertyTypes : int
{
    case NotSpecified = 0;
    case TerracedHouse = 1;
    case EndOfTerraceHouse = 2;
    case SemiDetachedHouse = 3;
    case DetachedHouse = 4;
    case MewsHouse = 5;
    case ClusterHouse = 6;
    case GroundFloorFlat = 7;
    case Flat = 8;
    case StudioFlat = 9;
    case GroundFloorMaisonette = 10;
    case Maisonette = 11;
    case Bungalow = 12;
    case TerracedBungalow = 13;
    case SemiDetachedBungalow = 14;
    case DetachedBungalow = 15;
    case MobileHome = 16;
    case LandResidential = 20;
    case LinkDetachedHouse = 21;
    case TownHouse = 22;
    case Cottage = 23;
    case Chalet = 24;
    case CharacterProperty = 25;
    case HouseUnspecified = 26;
    case Villa = 27;
    case Apartment = 28;
    case Penthouse = 29;
    case Finca = 30;
    case BarnConversion = 43;
    case ServicedApartment = 44;
    case Parking = 45;
    case ShelteredHousing = 46;
    case RetirementProperty = 47;
    case HouseShare = 48;
    case FlatShare = 49;
    case ParkHome = 50;
    case Garages = 51;
    case FarmHouse = 52;
    case EquestrianFacility = 53;
    case Duplex = 56;
    case Triplex = 59;
    case Longere = 62;
    case Gite = 65;
    case Barn = 68;
    case Trulli = 71;
    case Mill = 74;
    case Ruins = 77;
    case Restaurant = 80;
    case Cafe = 83;
    case MillCommercial = 86;
    case Castle = 92;
    case VillageHouse = 95;
    case CaveHouse = 101;
    case Cortijo = 104;
    case FarmLand = 107;
    case Plot = 110;
    case CountryHouse = 113;
    case StoneHouse = 116;
    case Caravan = 117;
    case Lodge = 118;
    case LogCabin = 119;
    case ManorHouse = 120;
    case StatelyHome = 121;
    case OffPlan = 125;
    case SemiDetachedVilla = 128;
    case DetachedVilla = 131;
    case BarNightclub = 134;
    case Shop = 137;
    case Riad = 140;
    case HouseBoat = 141;
    case HotelRoom = 142;
    case BlockOfApartments = 143;
    case PrivateHalls = 144;
    case Office = 178;
    case BusinessPark = 181;
    case ServicedOffice = 184;
    case RetailPropertyHighStreet = 187;
    case RetailPropertyOutOfTown = 190;
    case ConvenienceStore = 193;
    case Garages2 = 196;
    //possible duplicate
    case HairdresserBarberShop = 199;
    case Hotel = 202;
    case PetrolStation = 205;
    case PostOffice = 208;
    case Pub = 211;
    case WorkshopRetailSpace = 214;
    case DistributionWarehouse = 217;
    case Factory = 220;
    case HeavyIndustrial = 223;
    case IndustrialPark = 226;
    case LightIndustrial = 229;
    case Storage = 232;
    case Showroom = 235;
    case Warehouse = 238;
    case LandCommercial = 241;
    case CommercialDevelopment = 244;
    case IndustrialDevelopment = 247;
    case ResidentialDevelopment = 250;
    case CommercialProperty = 253;
    case DataCentre = 256;
    case Farm = 259;
    case HealthcareFacility = 262;
    case MarineProperty = 265;
    case MixedUse = 268;
    case ResearchAndDevelopmentFacility = 271;
    case SciencePark = 274;
    case GuestHouse = 277;
    case Hospitality = 280;
    case LeisureFacility = 283;
    case Takeaway = 298;
    case ChildcareFacility = 301;
    case Smallholding = 304;
    case PlaceOfWorship = 307;
    case TradeCounter = 310;
    case CoachHouse = 511;
    case HouseOfMultipleOccupation = 512;
    case SportsFacilities = 535;
    case Spa = 538;
    case CampsiteAndHolidayVillage = 541;
}