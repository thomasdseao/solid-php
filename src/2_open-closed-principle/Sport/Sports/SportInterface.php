<?php

namespace Sport\Sports;

interface SportInterface
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function rules(): string;
}
