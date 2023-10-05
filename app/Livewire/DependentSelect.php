<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;
use App\Models\Equipment;

class DependentSelect extends Component
{
    public $selectedClient;
    public $selectedEquipment;


    public function render()
    {
        $clients = Client::all();
        // $provinces = Province::where('country_id', $this->selectedCountry)->get();
        $equipments = Equipment::where('client_id', $this->selectedClient)->get();

        return view('livewire.dependent-select', compact('clients', 'equipments'));
    }

    public function loadEquipments()
    {
        $this->selectedEquipment = null;
        $this->render();
    }
}
