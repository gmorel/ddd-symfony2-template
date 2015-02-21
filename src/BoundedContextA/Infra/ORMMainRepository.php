<?php

namespace Ddd\BoundedContextA\Infra;

use Ddd\BoundedContextA\Domain\EntityAlpha;
use Ddd\BoundedContextA\Domain\MainRepositoryInterface;

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
