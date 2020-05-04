<?php

namespace Worker\Jobs\Developer;

class Developer implements CodeInterface
{
    /**
     * @return string
     */
    public function job(): string
    {
        return 'Developer';
    }

    /**
     * @return string
     */
    public function coding(): string
    {
    	return 'Coding';
    }

    /**
     * @return string
     */
    public function action(): string
    {
    	return 'The '.$this->job().' '.$this->coding();
    }
}
