<?php

namespace Article\Formatters;

use Article\Article;

interface FormatterInterface
{
    /**
     * @param Article $article
     * @return string
     */
    public function format(Article $article): string;
}
