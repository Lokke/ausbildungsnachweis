@extends('weeks.master')
@section('content')
            {!! Form::open(['method' => 'POST', 'route' => ['weeks.update',$week->id]]) !!}
            {{ method_field('PATCH') }}
                 <div class="row">
                    {{ Form::label('week_nr', 'Ausbildungsnachweis für Ausbildungswoche Nr. ') }}
                    {{ Form::number('week_nr') }}
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <div class="date">
                        {{ Form::label('start_date', 'Von') }}
                        {{ Form::date('start_date', null, array('class'=>'datetimepicker')) }}
                        {{ Form::label('end_date', 'Bis') }}
                        {{ Form::date('end_date', null, array('class'=>'datetimepicker')) }}
                    </div>
                </div>
                <div class="row">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', 'Noa Rave') }}
                </div>
                <div class="row">
                    {{ Form::label('profession', 'Ausbildungsberuf') }}
                    {{ Form::text('profession', 'Fachinformatik') }}
                </div>
                <div class="row">
                    {{ Form::label('department', 'Ausbildende Abteilung') }}
                    {{ Form::text('department', 'Technik') }}
                </div>
                 <div class="row">
                    {{ Form::label('work', 'Ausbildung am Arbeitsplatz') }}
                </div>
                <div class="row">
                    {{ Form::textarea('work', null, array('class'=>'summernote')) }}
                </div>
                <div class="row">
                    {{ Form::label('training', 'Berufliche Schulung/Unterweisung') }}
                </div>
                <div class="row">
                    {{ Form::textarea('training', null, array('class'=>'summernote')) }}
                </div>
                <div class="row">
                    {{ Form::label('school', 'Berufschule') }}
                </div>
                <div class="row">
                    {{ Form::textarea('school', null, array('class'=>'summernote')) }}
                </div>
                <div class="row">
                    {{ Form::submit('Speichern', array('class'=>'btn btn-primary')) }}
                    <a href="/weeks/" class="btn btn-primary">Abbrechen</a>
                </div>
            {!! Form::close() !!}
@endsection
