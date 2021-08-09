<div>
    <div class="mb-3">
        <label for="event" class="form-label">Event</label>
        <input type="text" class="form-control" id="event" wire:model="event">
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="fromDate" class="form-label">From</label>
                <input type="date" class="form-control" id="fromDate" wire:model="from">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="toDate" class="form-label">To</label>
                <input type="date" class="form-control" id="toDate" wire:model="to">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="mon" value="monday" wire:model="days">
            <label class="form-check-label" for="mon">Mon</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="tue" value="tuesday" wire:model="days">
            <label class="form-check-label" for="tue">Tue</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="wed" value="wednesday" wire:model="days">
            <label class="form-check-label" for="wed">Wed</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="thu" value="thursday" wire:model="days">
            <label class="form-check-label" for="thu">Thu</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="fri" value="friday" wire:model="days">
            <label class="form-check-label" for="fri">Fri</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="sat" value="saturday" wire:model="days">
            <label class="form-check-label" for="sat">Sat</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="sun" value="sunday" wire:model="days">
            <label class="form-check-label" for="sun">Sun</label>
        </div>
    </div>
    
    <div>
        <button class="btn btn-primary form-control" wire:click="save">Save</button>
    </div>
</div>
