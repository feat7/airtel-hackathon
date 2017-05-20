<?php

namespace App;

use Elasticquent\ElasticquentTrait;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    // implementing elasticsearch
    use ElasticquentTrait;
}
