<?php

namespace Dutta\LaravelRating;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dutta\LaravelRating\LaravelRating
 */
class LaravelRatingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelRating';
    }
}
