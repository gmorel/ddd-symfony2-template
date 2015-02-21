<?php

namespace Ddd\BoundedContextB\Infra;

use Ddd\BoundedContextB\Domain\EntityAlpha;
use Ddd\BoundedContextB\Domain\MainRepositoryInterface;

/**
 * @author Guillaume MOREL <guillaume.morel@verylastroom.com>
 */
class ORMMainRepository implements MainRepositoryInterface
{
    public function save(EntityAlpha $entityAlpha)
    {
        // @todo Implement save() method.
    }
}
