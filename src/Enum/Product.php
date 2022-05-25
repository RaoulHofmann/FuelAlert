<?php

namespace App\Enum;

/**
 * @GQL\Enum
 */
enum Product: int
{
    /**    
    * @GQL\EnumValue(description="Unleaded Petrol")
    */
    case UnleadedPetrol = 1;

    /**    
    * @GQL\EnumValue(description="Premium Unleaded")
    */
    case PremiumUnleaded = 2;

    /**     
    * @GQL\EnumValue(description="Diesel")
    */
    case Diesel = 4;

    /**     
    * @GQL\EnumValue(description="Liquefied Petroleum Gas")
    */
    case LPG = 5;

    /**     
    * @GQL\EnumValue(description="Premium 98")
    */
    case NintyEightRON = 6;

    /**     
    * @GQL\EnumValue(description="85")
    */
    case EEightFive = 10;

    /**     
    * @GQL\EnumValue(description="Brand Diesel")
    */
    case BrandDiesel = 11;
}
