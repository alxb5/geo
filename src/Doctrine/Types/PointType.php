<?php

declare(strict_types=1);

namespace Brick\Geo\Doctrine\Types;

use Brick\Geo\Proxy\PointProxy;

/**
 * Doctrine type for Point.
 */
class PointType extends GeometryType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'point';
    }

    /**
     * {@inheritdoc}
     */
    protected function getProxyClassName() : string
    {
        return PointProxy::class;
    }
}
