<?php

namespace Article;

class Article
{
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return 'Article Title';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Article Description';
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return '<p>Article Content</p>';
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return 'article-slug';
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'content' => $this->getContent(),
            'slug' => $this->getSlug(),
        ];
    }
}
