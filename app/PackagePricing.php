<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class PackagePricing extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'package';

    protected $fillable = [
        'PackagePricing', 'slug'
    ];
}
