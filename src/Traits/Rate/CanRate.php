<?php

namespace Dutta\LaravelRating\Traits\Rate;

use Dutta\LaravelRating\LaravelRating;
use Dutta\LaravelRating\LaravelRatingFacade;
use Dutta\LaravelRating\Models\Rating;

trait CanRate
{
    public function ratings()
    {
        return $this->morphMany(Rating::class, 'model')->where('type', LaravelRating::TYPE_RATE);
    }

    public function rate($model, $value, $testimonial)
    {
        if ($value === null || $value === false || $value === -1) {
            return $this->unRate($model);
        }
        return LaravelRatingFacade::rate($this, $model, $value, $testimonial, LaravelRating::TYPE_RATE);
    }

    public function unRate($model)
    {
        return LaravelRatingFacade::unRate($this, $model, LaravelRating::TYPE_RATE);
    }

    public function getRatingValue($model)
    {
        return LaravelRatingFacade::getRatingValue($this, $model, LaravelRating::TYPE_RATE);
    }

    public function getTestimonialValue($model)
    {
        return LaravelRatingFacade::getTestimonialValue($this, $model, LaravelRating::TYPE_RATE);
    }

    public function isRated($model)
    {
        return LaravelRatingFacade::isRated($this, $model, LaravelRating::TYPE_RATE);
    }

    public function rated()
    {
        return LaravelRatingFacade::resolveRatedItems($this->ratings);
    }
}
