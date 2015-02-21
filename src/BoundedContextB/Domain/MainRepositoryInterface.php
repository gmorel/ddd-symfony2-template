<?php

namespace Ddd\BoundedContextB\Domain;

/**
 * Interface MainRepositoryInterface
 *
 * @author Guillaume MOREL <guillaume.morel@verylastroom.com>
 */
interface MainRepositoryInterface
{
    public function save(EntityAlpha $entityAlpha);
}
