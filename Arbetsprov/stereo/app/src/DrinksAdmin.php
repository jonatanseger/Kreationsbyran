<?php

use SilverStripe\Admin\ModelAdmin;

class DrinksAdmin extends ModelAdmin 
{

    private static $managed_models = [
        'Drink'
    ];

    private static $url_segment = 'drinks';

    private static $menu_title = 'My Drinks';
}