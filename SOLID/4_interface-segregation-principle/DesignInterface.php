<?php

interface DesignInterface extends JobInterface
{
    /**
     * @return string
     */
    public function designate(): string;
}