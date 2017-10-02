@extends('weeks.master')

@section('content')
<ul class="weekindex">
    @foreach ($weeks as $week)
        <li class="weeklist">
            <div class="col-md-3">
                <a href="/weeks/{{ $week->id }}">Week  {{ $week->week_nr }}</a>
            </div>
            <div class="col-md-6">{{ $week->start_date }} - {{ $week->end_date }}</div>
            <div class="col-md-3">
             {{ Form::open(['method' => 'DELETE', 'route' => ['weeks.destroy', $week->id]]) }}
                {{ Form::hidden('id', $week->id) }}
                {{ Form::submit('Löschen', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
            </div>
        </li>
    @endforeach
</ul>
    <a href="/weeks/create" class="btn btn-primary">Neue Woche</a>
@endsection
