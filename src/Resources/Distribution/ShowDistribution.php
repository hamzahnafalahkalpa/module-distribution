<?php

namespace Zahzah\ModuleDistribution\Resources\Distribution;

use Zahzah\ModulePeople\Resources\People\ShowPeople;

class ShowDistribution extends ViewDistribution
{

    public function toArray(\Illuminate\Http\Request $request): array
    {
        $arr = [
            'author_receiver' => $this->relationValidation('authorReceiver',function(){
                return $this->authorReceiver->toViewApi();
            }),
            'author_sender' => $this->relationValidation('authorSender',function(){
                return $this->authorSender->toViewApi();
            }),
            'card_stocks' => $this->relationValidation('cardStocks',function(){
                return $this->cardStocks->transform(function($cardStock){
                    return $cardStock->toShowApi();
                });
            })
        ];

        $arr = array_merge(parent::toArray($request),$arr);
        
        return $arr;
    }
}

