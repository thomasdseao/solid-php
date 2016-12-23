<?php

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