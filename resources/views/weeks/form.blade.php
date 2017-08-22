@extends('weeks.master')
@section('content')
            {!! Form::open(array('class'=>'form')) !!}
                 <div class="row">
                    {{ Form::label('start_date', 'Von') }}
                </div>
                <div class="row date">
                    {{ Form::date('start_date') }}
                </div>
                 <div class="row label">
                    {{ Form::label('end_date', 'Bis') }}
                   </div>
                <div class="row date">
                    {{ Form::date('end_date') }}
                </div>
                 <div class="row label">
                    {{ Form::label('work', 'Ausbilfung am Arbeitsplatz') }}
                </div>
                <div class="row textarea">
                    {{ Form::textarea('work') }}
                </div>
                <div class="row label">
                    {{ Form::label('training', 'Berufliche Schulung/Unterweisung') }}
                </div>
                <div class="row textarea">
                    {{ Form::textarea('training') }}
                </div>
                <div class="row label">
                    {{ Form::label('school', 'Berufschule') }}
                </div>
                <div class="row textarea">
                    {{ Form::textarea('school') }}
                </div>
                <div class="row">
                    {{ Form::submit('Speichern') }}
                </div>
            {!! Form::close() !!}
@endsection
