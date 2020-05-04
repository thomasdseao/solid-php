<?php

namespace Sport\Sports;

final class Football implements SportInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Football';
    }

    /**
     * @return string
     */
    public function rules(): string
    {
        return 'The rules...';
    }
}
