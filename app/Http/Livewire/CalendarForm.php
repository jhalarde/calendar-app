<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CalendarForm extends Component
{
    public $event,$from,$to;
    public $days = [];

    public function save() 
    {
        $from = Carbon::parse($this->from);
        $to = Carbon::parse($this->to);

        while ($from->lte($to)) {
        
            if (in_array(Str::lower($from->englishDayOfWeek), $this->days)) {
                Event::create([
                    'name' => $this->event,
                    'date' => $from->copy()
                ]);
            }
            
            $from->addDay();
        }

        $this->emitTo('calendar-view', 'updateCalendar', $this->from, $this->to);
        $this->emit('event-added');
    }

    public function render()
    {
        return view('livewire.calendar-form');
    }
}
