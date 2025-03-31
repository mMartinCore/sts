<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
class Searate extends Component
{
    public $get_link;
    public $rlink;
   
    public function mount(){ 
     
        $this->get_link='https://jashippers.com/api/searates';
    
    }

   public function getlink($link ){ 
  
    $this->get_link=$link; 
   
   }


    public function render()
    { 
            try {
                $searate=  Http::get($this->get_link);
            } catch (\Throwable $th) {
                $searate=[];
            }
             
        
        $this->rlink=$this->get_link; 
        return view('livewire.searate',  [
                        'searate'=>   $searate=$searate=json_decode($searate),
                        'sealinks'=>isset($searate->meta->links)?$searate->meta->links:[],
                    ] );
    }
 
}
