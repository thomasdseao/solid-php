<?php

namespace Worker\Jobs\Webdesigner;

class Webdesigner implements DesignInterface
{
    /**
     * @return string
     */
    public function job(): string
    {
        return 'Webdesigner';
    }

    /**
     * @return string
     */
    public function designate(): string
    {
        return 'Designate';
    }

    /**
     * @return string
     */
    public function action(): string
    {
        return 'The '.$this->job().' '.$this->designate();
    }
}
