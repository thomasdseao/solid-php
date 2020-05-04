<?php

namespace Worker\Jobs\Developer;

use Worker\Jobs\JobInterface;

interface CodeInterface extends JobInterface
{
    /**
     * @return string
     */
    public function coding(): string;
}
