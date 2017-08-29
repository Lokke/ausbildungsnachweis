@extends('weeks.master')
@section('cssforpdf')
         <link rel="stylesheet" href="https://rawgit.com/lodev09/bootstrap-markdown/master/css/bootstrap-markdown.min.css">
         <link rel="stylesheet" href="css/frontend.css" type="text/css">
@endsection
@section('content')
        <p>Ausbildungsnachweis für Ausbildungswoche Nr. <span class="underlined">{{ $week->week_nr }}</span></p>        
        <p class="datesdisplay"> von <span class="underlined"> {{ $week->start_date }}</span>   bis <span class="underlined">{{ $week->end_date }}</span></p>      
        <p>Name: <span class="underlined">{{ $week->name }}</span></p>
        <p>Ausbildungsberuf:                   <span class="underlined">{{ $week->profession }}</span></p>
        <p>Ausbildende Abteilung: <span class="underlined">{{ $week->department }}</span></p>

            <h4>Tätigkeit und Stoff der Unterweisung</h4>
            <p>Ausbildung am Arbeitsplatz</p>
        <table class="table table-bordered">
            <tbody>
                <tr><td>{!! $week->training !!}</td></tr> 
            </tbody>
        </table>
            <p>Betriebliche Schulung/Unterweisung</p>
        <table class="table table-bordered">
            <tbody>
                <tr><td>{!! $week->work !!}</td></tr> 
            </tbody>
        </table>
            <p>Berufschule</p>
        <table class="table table-bordered">
            <tbody>
                <tr><td>{!! $week->school !!}</td></tr> 
            </tbody>
        </table>
        
        <a href="/weeks/export/{{ $week->id }}" class="btn btn-primary">Export</a>
@endsection
