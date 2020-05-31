<?php

declare(strict_types=1);

namespace Brick\Geo\Doctrine\Types;

use Brick\Geo\Proxy\PolygonProxy;

/**
 * Doctrine type for Polygon.
 */
class PolygonType extends GeometryType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'polygon';
    }

    /**
     * {@inheritdoc}
     */
    protected function getProxyClassName() : string
    {
        return PolygonProxy::class;
    }
}
