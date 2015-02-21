<?php

namespace Ddd\BoundedContextB\Domain;

/**
 * @author Guillaume MOREL <guillaume.morel@verylastroom.com>
 */
class EntityAlpha
{
    /** @var int */
    private $id;

    /** @var mixed */
    private $xxx;

    public function __construct($id, $xxx)
    {
        $this->id = $id;
        $this->xxx = $xxx;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getXxx()
    {
        return $this->xxx;
    }
}
