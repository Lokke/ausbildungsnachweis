@extends('weeks.master')

@section('content')
<div class="weekindex">
    @foreach ($weeks as $week)
        <li class="weeklist">
            <div class="col-md-3">
                <a href="/weeks/{{ $week->id }}">Week  {{ $week->id }}</a>
            </div>
            <div class="col-md-9">Test</div>
        </li>
    @endforeach
</div>
@endsection
