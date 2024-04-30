<?php

declare(strict_types = 1);

namespace DeepCopy\Filter;

use DeepCopy\Reflection\ReflectionHelper;

/** @final */
final class SetNullFilter implements Filter
{

    /**
     * Sets the object property to null.
     *
     * {@inheritDoc}
     */
    public function apply($object, $property, $objectCopier)
    {
        $reflectionProperty = ReflectionHelper::getProperty($object, $property);

        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($object, null);
    }

}
