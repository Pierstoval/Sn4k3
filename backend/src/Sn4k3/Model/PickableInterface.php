<?php

namespace Sn4k3\Model;

use Sn4k3\Collision\CollisionableInterface;

interface PickableInterface extends CollisionableInterface
{
    /**
     * @param Snake $snake
     *
     * @return void
     */
    public function onPick(Snake $snake);
}
