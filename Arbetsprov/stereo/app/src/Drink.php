<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class Drink extends DataObject 
{

    private static $db = [
        'Title' => 'Varchar',
        'Ingredients' => 'Varchar',
        'Price' => 'Currency',
        'Description' => 'Varchar'
    ];

    private static $has_one = [
        'image' => Image::class
    ];

}