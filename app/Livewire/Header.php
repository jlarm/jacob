<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Player;
use Livewire\Component;

final class Header extends Component
{
    public Player $player;

    public function render()
    {
        return view('livewire.header');
    }
}
