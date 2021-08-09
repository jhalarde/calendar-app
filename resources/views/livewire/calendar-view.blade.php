<div>
    @foreach($months as $month)
        <h1>{{$month['month']}} {{$year}}</h1>

        <table class="table">
            <tbody>
                @foreach ($month['days'] as $day)
                    <tr class="@if($day['event']) table-success @endif">
                        <td style="width: 15%">{{ $day['date']->day }} {{ $day['date']->shortEnglishDayOfWeek }} </td>
                        <td>
                            @if($day['event'])
                                <span>{{ $day['event'] }}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</div>
