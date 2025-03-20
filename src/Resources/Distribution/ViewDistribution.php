<?php

namespace Zahzah\ModuleDistribution\Resources\Distribution;

use Zahzah\LaravelSupport\Resources\ApiResource;
use Zahzah\ModulePeople\Resources\People\ViewPeople;

class ViewDistribution extends ApiResource
{
    public function toArray(\Illuminate\Http\Request $request): array
    {
        $arr = [
            'id'       => $this->id,
            'receiver' => $this->relationValidation('receiver',function(){
                return $this->receiver->toViewApi();
            }),
            'sender' => $this->relationValidation('sender',function(){
                return $this->sender->toViewApi();
            }),
            'transaction' => $this->relationValidation('transaction',function(){
                return $this->transaction->toViewApi();
            }),
            'flag' => $this->flag,
            'order_no' => $this->order_no,
            'distribution_no' => $this->distribution_no,
            'distributed_at' => $this->distributed_at,
            'ordered_at' => $this->ordered_at 
        ];
        
        return $arr;
    }

}

