<?php

declare(strict_types=1);

namespace Brick\Geo\Doctrine\Types;

use Brick\Geo\Proxy\LineStringProxy;

/**
 * Doctrine type for LineString.
 */
class LineStringType extends GeometryType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'linestring';
    }

    /**
     * {@inheritdoc}
     */
    protected function getProxyClassName() : string
    {
        return LineStringProxy::class;
    }
}
