<?php

namespace Article\Formatters;

use Article\Article;

class XmlFormatter implements FormatterInterface
{
    /**
     * @param Article $article
     * @return string
     */
    public function format(Article $article): string
    {
        return xmlrpc_encode($article->getAll());
    }
}
