@extends('weeks.master')
@section('cssforpdf')
@endsection
@section('content')
        <p>Ausbildungsnachweis für Ausbildungswoche Nr. <span class="underlined">{{ $week->week_nr }}</span></p>        
        <p class="datesdisplay"> von <span class="underlined"> {{ $week->start_date }}</span>   bis <span class="underlined">{{ $week->end_date }}</span></p>      

            <table class="metadata-table">
                <tbody>
                    <tr>
                        <td class="metadata">Name: </td>
                        <td><span class="underlined">{{ $week->name }}</span></td>
                    </tr>
                    <tr>
                        <td class="metadata">Ausbildungsberuf: </td>
                        <td><span class="underlined">{{ $week->profession }}</span></td>
                    </tr>
                    <tr>
                        <td class="metadata">Ausbildende Abteilung: </td>
                        <td><span class="underlined">{{ $week->department }}</span></td>
                    </tr>
                </tbody>
            </table>
            <h4>Tätigkeit und Stoff der Unterweisung</h4>
            <p>Ausbildung am Arbeitsplatz</p>
        <table class="table table-bordered">
            <tbody>
               <td>{!! $week->work !!}</td> 
            </tbody>
        </table>
            <p>Betriebliche Schulung/Unterweisung</p>
        <table class="table table-bordered">
            <tbody>
               <td>{!! $week->training !!}</td> 
            </tbody>
        </table>
            <p>Berufschule</p>
        <table class="table table-bordered">
            <tbody>
                <tr><td>{!! $week->school !!}</td></tr> 
            </tbody>
        </table>
        
        <a href="/weeks/export/{{ $week->id }}" class="btn btn-primary">Export</a>
        <a href="/weeks/" class="btn btn-primary">Abbrechen</a>
@endsection
