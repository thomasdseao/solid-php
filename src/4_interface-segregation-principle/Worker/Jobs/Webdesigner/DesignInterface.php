<?php

namespace Worker\Jobs\Webdesigner;

use Worker\Jobs\JobInterface;

interface DesignInterface extends JobInterface
{
    /**
     * @return string
     */
    public function designate(): string;
}
