<?php

$map->route('/blog', '/blog/{id}');
$map->route('/blog/comment', '/blog/{id}/comment');
$map->route('/user', '/user/{name}')->tokens(['name' => '[a-z]+']);

