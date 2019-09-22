<div class="list-group">
    @if($vehicle->make)
        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#!">
            Make
            <span>{{ $vehicle->getMake() }}</span>
        </a>
    @endif
    @if($vehicle->model)
        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#!">
            Model
            <span>{{ $vehicle->getModel() }}</span>
        </a>
    @endif
    @if($vehicle->submodel)
        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#!">
            Submodel
            <span>{{ $vehicle->getSubmodel() }}</span>
        </a>
    @endif
    @if($vehicle->year)
        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#!">
            Year
            <span>{{ $vehicle->getYear() }}</span>
        </a>
    @endif
    @if($vehicle->colour)
        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#!">
            Colour
            <span>{{ $vehicle->getColour() }}</span>
        </a>
    @endif
    @if($vehicle->vin_number)
        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#!">
            VIN Number
            <span>{{ $vehicle->getVinNumber() }}</span>
        </a>
    @endif
    @if($vehicle->engine_number)
        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#!">
            Engine Number
            <span>{{ $vehicle->getEngineNumber() }}</span>
        </a>
    @endif
    @if($vehicle->chassis_id)
        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#!">
            Engine Number
            <span>{{ $vehicle->getChassisId() }}</span>
        </a>
    @endif
</div>
