<?php

namespace App\Enum;

enum Product: int
{
    case UnleadedPetrol = 1;
    case PremiumUnleaded = 2;
    case Diesel = 4;
    case LPG = 5;
    case NintyEightRON = 6;
    case EEightFive = 10;
    case BrandDiesel = 11;
}