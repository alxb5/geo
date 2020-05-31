<?php

declare(strict_types=1);

namespace Brick\Geo\Doctrine\Types;

use Brick\Geo\Proxy\MultiLineStringProxy;

/**
 * Doctrine type for MultiLineString.
 */
class MultiLineStringType extends GeometryType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'multilinestring';
    }

    /**
     * {@inheritdoc}
     */
    protected function getProxyClassName() : string
    {
        return MultiLineStringProxy::class;
    }
}
