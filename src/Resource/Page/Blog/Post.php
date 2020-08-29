<?php


namespace Kilica\Blog\Resource\Page\Blog;


use BEAR\Resource\ResourceObject;

class Post extends ResourceObject
{
    public function onGet($id)
    {
        $this['title'] = "sample title";
        $this['content'] = "sample content";
        $this['category'] = 1;

        return $this;
    }

    public function onPost()
    {
        
    }
}