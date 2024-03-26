<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;
class ClientTable extends Component
{
    use WithPagination;
    public $search ='';
    public $perPage = 10;
    public function render()
    {
        return view('livewire.client-table', [
            'clients'=> Client::search($this->search)
            ->paginate($this->perPage),
        ]);
    }
}
