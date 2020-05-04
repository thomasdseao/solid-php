<?php

namespace Graphic\Quadrilaterals;

class Square extends Quadrilateral
{
    /**
     * @param int $width
     * @param int $height
     */
    public function resize(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}
