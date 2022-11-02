<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Rate extends Component
{
  
    public $get_link;
    public $rlink;
   public function mount(){
   
 $this->get_link='http://vorkkloc.localhost/api/rates';
   }

   public function getlink($link ){
   
    $this->get_link=$link;
    
  
   }


    public function render()
    {
         
        // return Cache::remember('city' . $city, 60 * 5, function() use ($coordinates) {
          
            try {
                $rates=  Http::get($this->get_link);
            } catch (\Throwable $th) {
                $rates=[];
            }
            
          
        //     if ($rates->successful()) {
        //         return rates;
        //     }

        //     return rates=[];
        // });

        // $rates=$rates=$rates->json()   ;
     
        
        $this->rlink=$this->get_link;

  ;
        // return view('pages.rates.rates',  compact('rates','links'));
        return view('livewire.rate',
    [
        'rates'=>   $rates=$rates=json_decode($rates),
        'links'=>isset($rates->meta->links)?$rates->meta->links:[],
    ]
    );
    }
}
