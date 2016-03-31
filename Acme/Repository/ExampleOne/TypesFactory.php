<?php


class TypesFactory {

    public function makeFrom($typeData = array())
    {
        if(empty($typeData)) {
            return null;
        }

        return new ProductType(
            $typeData['category'], $typeData['name'], $typeData['code']
        );
    }
}