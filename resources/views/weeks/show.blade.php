@extends('weeks.metadata')

@section('week')
        <p>Week {{ $week->id }}</p>        
        <h4>Name: {{ $metadata->name }}</h4>
        <p>{{ $week->start_date }} - {{ $week->end_date }}</p>      
        <h3>{{ $week->school }}</h3>        
        <h3>{{ $week->work }}</h3>        
        <h3>{{ $week->otj_training }}</h3>         
@endsection
