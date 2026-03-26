<?php

namespace Dbu\SnakeBundle\Game;

class CollisionException extends \RuntimeException
{
    private Coordinate $coordinate;

    public function __construct(Coordinate $coord)
    {
        parent::__construct(sprintf('Collision at %s/%s', $coord->x, $coord->y));

        $this->coordinate = $coord;
    }

    public function getCoordinate(): Coordinate
    {
        return $this->coordinate;
    }
}
