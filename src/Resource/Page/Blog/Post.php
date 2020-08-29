<?php


namespace Kilica\Blog\Resource\Page\Blog;


use BEAR\Resource\ResourceObject;
use Monolog\Formatter\FormatterInterface;
use Ray\WebFormModule\FormInterface;

class Post extends ResourceObject
{
    /**
     * @var FormatterInterface
     */
    protected $form;

    /**
     * @Inject
     * @Named("blog_form")
     */
    public function setForm(FormInterface $form)
    {
        $this->form = $form;
    }

    public function onGet($id)
    {
        $this['title'] = "sample title";
        $this['content'] = "sample content";
        $this['category'] = 1;

        return $this;
    }

    /**
     * @FormValidation
     */
    public function onPost()
    {
        
    }
}