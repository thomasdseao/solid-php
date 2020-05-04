<?php

namespace Graphic\Quadrilaterals;

abstract class Quadrilateral
{
    /**
     * @var int
     */
    protected $height;

    /**
     * @var int
     */
    protected $width;

    /**
     * @param int $width
     * @param int $height
     */
    abstract public function resize(int $width, int $height);
    
    /**
     * @param int $value
     */
    public function setWidth(int $value)
    {
        $this->width = $value;
    }
    
    /**
     * @param int $value
     */
    public function setHeight(int $value)
    {
        $this->height = $value;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
    
    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
}
