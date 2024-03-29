<?php

namespace App\Http\Livewire;

use App\Models\User;
use Faker\Factory;
use Livewire\Component;

class Counter extends Component
{
    public $count;
    public $text;
    public $picture;

    public function counter(){
        if(\Auth::check()){
            $user = User::all()->first()->name;
            $this->count = $user;
        }else{
            $this->count = "Nicht eingeloggt";
        }


        $this->picture = random_int(1,9);

        $faker = Factory::create('de_DE');
        $this->text = $faker->realText();
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
