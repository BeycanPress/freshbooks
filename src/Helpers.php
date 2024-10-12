<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks;

trait Helpers
{
    /**
     * @param array<mixed> $array
     * @return object
     */
    public function arrayToObject(array $array): object
    {
        return json_decode(json_encode($array));
    }

    /**
     * @param object $object
     * @return array<mixed>
     */
    public function objectToArray(object $object): array
    {

        return json_decode(json_encode($object), true);
    }
}
