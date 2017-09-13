@extends('weeks.master')
@section('cssforpdf')
@endsection
@section('content')
        <p>Ausbildungsnachweis für Ausbildungswoche Nr. <span class="underlined">{{ $week->week_nr }}</span></p>        
        <br>
        <p class="datesdisplay"> von <span class="underlined"> {{ $week->start_date }}</span>   bis <span class="underlined">{{ $week->end_date }}</span></p>      
        <br>

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
            <table class="table table-bordered">
                <tbody>
                    <tr>    
                        <th colspan="2">Bemerkungen</th>
                        <th colspan="2">Bemerkungen</th>
                    </tr>
                    <tr>
                        <th colspan="2">Unterschrift</th>
                        <th colspan="2">Unterschrift</th>
                    </tr>
					<div>
                    <tr>
                        <td>Datum</td>
                        <td>Auszubildender</td>
                        <td>Datum</td>
                        <td>Ausbilder</td>
                    </tr>
					</div>
                </tbody>
            </table>
        
        <a href="/weeks/export/{{ $week->id }}" class="btn btn-primary">Export</a>
        <a href="/weeks/" class="btn btn-primary">Abbrechen</a>
@endsection
