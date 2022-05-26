<?php

namespace App\Resolver;

use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Resolver\ResolverMap;

use App\Enum\Product;
use App\Enum\RegionCode;

class EnumResolverMap extends ResolverMap
{
    protected function map(): mixed
    {
        return [
            "Enum" =>
            [
                "all" => function () {
                    return ["products" => Product::cases(), "regionCodes" => RegionCode::cases()];
                },
                "productByValue" => function (Argument $args) {
                    return Product::tryFrom($args["value"]);
                },
                "productByName" => function (Argument $args) {
                    $products = Product::cases();
                    $key = array_search($args["name"], array_column($products, 'name'));
                    return $products[$key];
                },
                "products" => function () {
                    return Product::cases();
                },
                "regionCodeByValue" => function (Argument $args) {
                    return RegionCode::tryFrom($args["value"]);
                },
                "regionCodeByName" => function (Argument $args) {
                    $codes = RegionCode::cases();
                    $key = array_search($args["name"], array_column($codes, 'name'));
                    return $codes[$key];
                },
                "regionCodes" => function () {
                    return RegionCode::cases();
                }
            ]
        ];
    }
}
