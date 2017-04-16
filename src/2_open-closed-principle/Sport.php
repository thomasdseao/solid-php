<?php

class Sport
{
    /**
     * @return string
     */
    public function rules(SportInterface $sport): string
    {
        return $sport->rules();
    }
}
