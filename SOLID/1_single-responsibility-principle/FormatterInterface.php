<?php

interface FormatterInterface
{
    /**
     * @param Article $Article
     * @return string
     */
    public function format(Article $article): string;
}
