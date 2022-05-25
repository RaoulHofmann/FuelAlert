<?php

namespace App\Resolver;

use GraphQL\Error\Error;
use GraphQL\Language\AST\StringValueNode;
use GraphQL\Type\Definition\ResolveInfo;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Resolver\ResolverMap;

use App\Enum\Product;
use App\Enum\RegionCode;

class EnumResolverMap extends ResolverMap
{
    protected function map()
    {
        return [
            "Enum" =>
            [
                "productByValue" => function ($value, Argument $args) {
                    return Product::tryFrom($args["value"]);
                },
                "productByName" => function ($value, Argument $args) {
                    $products = Product::cases();
                    $key = array_search($args["name"], array_column($products, 'name'));
                    return $products[$key];
                },
                "products" => function ($value, Argument $args) {
                    return Product::cases();
                },
                "regionCodeByValue" => function ($value, Argument $args) {
                    return RegionCode::tryFrom($args["value"]);
                },
                "regionCodeByName" => function ($value, Argument $args) {
                    $codes = RegionCode::cases();
                    $key = array_search($args["name"], array_column($codes, 'name'));
                    return $codes[$key];
                },
                "regionCodes" => function ($value, Argument $args) {
                    return RegionCode::cases();
                }
            ]
        ];
    }
}
