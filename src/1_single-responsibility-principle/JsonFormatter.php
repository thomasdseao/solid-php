<?php

class JsonFormatter implements FormatterInterface
{
    /**
     * @param Article $article
     * @return string
     */
    public function format(Article $article): string
    {
        return json_encode($article->getAll());
    }
}
