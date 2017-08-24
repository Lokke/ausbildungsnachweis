@extends('weeks.master')

@section('content')
<ul class="weekindex">
    @foreach ($weeks as $week)
        <li class="weeklist">
            <div class="col-md-3">
                <a href="/weeks/{{ $week->id }}">Week  {{ $week->week_nr }}</a>
            </div>
            <div class="col-md-9">{{ $week->start_date }} - {{ $week->end_date }}</div>
        </li>
    @endforeach
</ul>
    <a href="/weeks/add" class="btn btn-primary">Neue Woche</a>
@endsection
