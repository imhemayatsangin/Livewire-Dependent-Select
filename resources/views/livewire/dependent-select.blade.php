<div>
    <div>
        <label for="client-select">Client:</label>
        <select id="client-select" wire:model="selectedClient" wire:change="loadEquipments">
            <option value="">Select Client</option>
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>
    </div>
    <br><br>
    <div>
        <label for="equipment-select">Equipment:</label>
        <select id="equipment-select" wire:model="selectedEquipment">
            <option value="">Select Equipment</option>
            @foreach ($equipments as $equipment)
                <option value="{{ $equipment->id }}">{{ $equipment->name }}</option>
            @endforeach
        </select>
    </div>
</div>



@push('scripts')
<script>


</script>

  @endpush