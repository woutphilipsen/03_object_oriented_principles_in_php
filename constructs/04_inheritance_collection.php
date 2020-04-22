<?php

class Collection
{
    protected $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        // ---------SHORT WAY------------
        return array_sum(array_column($this->items, $key));

        // [100, 200, 300]
        // return array_sum(array_map(function ($item) use ($key) {
        //     return $item->$key;
        // }, $this->items));
    }
    
}

class VideosCollection extends Collection
{
    protected $items = [];

    public function length()
    {
        return $this->sum('length');
    }
    
}

class Video
{
    public $title;
    public $length;
    
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Some video', '100'),
    new Video('Some video 2', '200'),
    new Video('Some video 3', '300')
]);


echo $videos->length();