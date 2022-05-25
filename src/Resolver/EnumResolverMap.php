<?php

namespace App\Resolver;

use GraphQL\Error\Error;
use GraphQL\Language\AST\StringValueNode;
use GraphQL\Type\Definition\ResolveInfo;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Resolver\ResolverMap;

use App\Enum\Product;

class EnumResolverMap extends ResolverMap
{
    protected function map()
    {
        return [
            "Enum" =>
            [
                "product" => function ($value, Argument $args) {
                    return Product::tryFrom($args["value"]);
                },
                "products" => function ($value, Argument $args) {
                    return Product::cases();
                }
            ]
        ];
    }
}
