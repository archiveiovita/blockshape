<?php namespace App\Contracts;

interface Sluggable
{
    public function sluggify();

    public function add();
}