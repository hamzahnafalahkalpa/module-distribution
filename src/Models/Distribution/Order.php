<?php

namespace Hanafalah\ModuleDistribution\Models\Distribution;

class Order extends Distribution
{
    protected $table = 'distributions';
    public function getMorphClass()
    {
        return 'Distribution';
    }
}
