<?php

namespace App\Http\Filters\Post;

use Aldemeery\Sieve\Filter;
use Illuminate\Database\Eloquent\Builder;

class PostFilter extends Filter
{
    /**
     * Values mappings.
     *
     * @var array
     */
    protected $mappings = [
        // "largest" => "desc",
    ];

    /**
     * Filter records based on a given value.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder Eloquent builder instance.
     * @param string $value The resolved value of the filtration key sent in the query string.
     *
     * @return void
     */
    public function filter(Builder $builder, $value)
    {
        dd($value);
    }
}
