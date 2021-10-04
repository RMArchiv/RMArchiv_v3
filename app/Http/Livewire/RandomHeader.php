<?php

namespace App\Http\Livewire;

use App\Models\Logo;
use App\Models\User;
use Livewire\Component;

class RandomHeader extends Component
{
    public $logo;
    public $user;

    public function random_header(){
        $this->logo = Logo::where('votes_value', '>=', 0)->inRandomOrder()->first();

        if($this->logo){
            $this->user = User::whereId($this->logo->user_id)->first();
        }else{
            $this->user = '';
        }
    }

    public function render()
    {
        return view('livewire.random-header');
    }
}
