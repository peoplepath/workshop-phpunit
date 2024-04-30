<?php

declare(strict_types = 1);

namespace DeepCopy\Filter\Doctrine;

use DeepCopy\Filter\Filter;

/** @final */
final class DoctrineProxyFilter implements Filter
{

    /**
     * Triggers the magic method __load() on a Doctrine Proxy class to load the
     * actual entity from the database.
     *
     * {@inheritDoc}
     */
    public function apply($object, $property, $objectCopier)
    {
        $object->__load();
    }

}
