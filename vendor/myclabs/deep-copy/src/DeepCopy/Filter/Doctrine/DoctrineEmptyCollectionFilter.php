<?php

declare(strict_types = 1);

namespace DeepCopy\Filter\Doctrine;

use DeepCopy\Filter\Filter;
use DeepCopy\Reflection\ReflectionHelper;
use Doctrine\Common\Collections\ArrayCollection;

/** @final */
final class DoctrineEmptyCollectionFilter implements Filter
{

    /**
     * Sets the object property to an empty doctrine collection.
     */
    public function apply(object $object, string $property, callable $objectCopier): void
    {
        $reflectionProperty = ReflectionHelper::getProperty($object, $property);
        $reflectionProperty->setAccessible(true);

        $reflectionProperty->setValue($object, new ArrayCollection());
    }

} 