<?php

declare(strict_types=1);

namespace Brick\Geo\Doctrine\Types;

use Brick\Geo\Proxy\MultiPointProxy;

/**
 * Doctrine type for MultiPoint.
 */
class MultiPointType extends GeometryType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'multipoint';
    }

    /**
     * {@inheritdoc}
     */
    protected function getProxyClassName() : string
    {
        return MultiPointProxy::class;
    }
}
