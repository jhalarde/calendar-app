<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;

class CalendarView extends Component
{
    public $months,$days,$year;

    protected $listeners = ['updateCalendar'];
    
    public function mount()
    {
        $this->renderCalendarEvents(now()->startOfMonth(), now()->endOfMonth());
    }

    public function updateCalendar($from, $to)
    {
        $this->renderCalendarEvents(Carbon::parse($from), Carbon::parse($to));
    }

    public function renderCalendarEvents($from, $to)
    {
        $this->year = now()->year;

        //render months
        $this->months = collect();
        $monthFrom = $from->copy()->firstOfMonth();
        $monthTo = $to->copy()->firstOfMonth();
        
        while ($monthFrom->lte($monthTo)) {
            $this->months->push([
                'month' => $monthFrom->monthName,
                'days' => collect()
            ]);

            $monthFrom->addMonth();
        }

        //render days in months
        foreach ($this->months as $month) {
            while ($from->lte($to)) {
                if (Str::lower($month['month']) !== Str::lower($from->monthName)) break;

                $events = Event::whereDate('date', $from)->get();

                $month['days']->push([
                    'date' => $from->copy(),
                    'event' => $events->isNotEmpty() ? $events->map(fn($ev) => $ev->name)->join(', ') : null
                ]);
                
                $from->addDay();
            }
        }
    }

    public function render()
    {
        return view('livewire.calendar-view');
    }
}
