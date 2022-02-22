<?php

namespace Sardoj\PackageComposer;

class Inspire
{
    protected $inspirations = [
        'You are amazing',
        'It so beautiful!',
        'You are awesome',
    ];

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function displayInspiration()
    {
        return 'Jonathan say: '.$this->name. ' '.$this->inspirations[rand(0, count($this->inspirations)-1)];
    }
}
