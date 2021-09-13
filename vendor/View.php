<?php

/**
 * Class View
 * стандартный рендер тех файлов, что будут передаваться в объект.
 */
class View
{
    /**
     * @var string
     */
    public string $template;
    /**
     * @var string
     */
    public string $page;
    /**
     * @var array|null
     */
    public ?array $users;
    /**
     * @var array|null
     */
    public ?array $news;

    /**
     * @var float
     */
    public float $pages;

    /**
     * View constructor.
     * @param string $page
     * @param string $template
     */
    public function __construct(string $page, string $template = 'admin_template.php')
    {
        $this->template = $template;
        $this->page = $page;
    }

    /**
     * render on screen template
     */
    public function render()
    {
        include_once 'views' . DIRECTORY_SEPARATOR . $this->template;
    }
}