<?php


namespace Kilica\Blog\Form\Blog;


use Ray\WebFormModule\AbstractForm;

class Post extends AbstractForm
{
    public function init()
    {
        $this->setField('title', 'text')
            ->setAttribs([
                'id' => 'title'
            ]);
        $this->setField('content', 'textarea')
            ->setAttribs([
                'id' => 'content'
            ]);

        $this->filter->validate('title')->is('alnum');
        $this->filter->useFieldMessage('title', 'Name must be alphabetic only');

        $this->filter->validate('content')->is('alnum');
        $this->filter->useFieldMessage('content', 'Content must be alphabetic only');
    }

}