<?php

namespace Sport\Sports;

final class Basketball implements SportInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Basketball';
    }

    /**
     * @return string
     */
    public function rules(): string
    {
        return 'The rules...';
    }
}
