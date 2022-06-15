<?php

namespace App\Service;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\HttpFoundation\Response;

class ControllerService {
    private $serializer;

    public function __construct() {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizers = [new ObjectNormalizer(null, null, null, $extractor), new GetSetMethodNormalizer(), new ArrayDenormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders); 
    }

    public function deserialize($data, $class, $type = "json") {
        return $this->serializer->deserialize($data, get_class($class), $type);
    }

    public function serialize($data, $type = "json") {
        return $this->serializer->serialize($data,$type);
    }

    public function baseResponse($data, $type = "json", $responseType = Response::HTTP_OK, $contentType = "application/json"): Response
    {
        return new Response(
            ($type !== null ? $this->serialize($data, $type) : $data),
            $responseType,
            ["content-type" => $contentType]
        );
    }

    public function getSerializer()
    {
        return $this->serializer;
    }
}