<?php

namespace Worker;

use Worker\Jobs\JobInterface;

class Employee
{
    /**
     * @param JobInterface $job
     * @return string
     */
    public function action(JobInterface $job): string
    {
        return $job->action();  
    }
}
