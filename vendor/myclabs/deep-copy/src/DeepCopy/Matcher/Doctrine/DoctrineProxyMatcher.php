<?php

declare(strict_types = 1);

namespace DeepCopy\Matcher\Doctrine;

use DeepCopy\Matcher\Matcher;
use Doctrine\Persistence\Proxy;

/** @final */
final class DoctrineProxyMatcher implements Matcher
{

    /**
     * Matches a Doctrine Proxy class.
     *
     * {@inheritDoc}
     */
    public function matches($object, $property)
    {
        return $object instanceof Proxy;
    }

}
