<?php

namespace Worker\Jobs;

interface JobInterface
{
    /**
     * @return string
     */
    public function job(): string;

    /**
     * @return string
     */
    public function action(): string;
}
