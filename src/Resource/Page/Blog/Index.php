<?php


namespace Kilica\Blog\Resource\Page\Blog;


use BEAR\Resource\ResourceObject;

class Index extends ResourceObject
{
    public function onGet()
    {
        $this['content'] = "HEllo !";
        return $this;
    }

}