<?php 

namespace BeycanPress\FreshBooks;

trait Helpers
{
    /**
     * @param array
     * @return object
     */
    public function arrayToObject(array $array) : object
    {
        return json_decode(json_encode($array));
    }

    /**
     * @param object
     * @return array
     */
    public function objectToArray(object $object) : array
    {
        return json_decode(json_encode($object), true);
    }
}