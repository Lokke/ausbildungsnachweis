
<!doctype html>
<html>
    <head>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #1e1c1c;
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .container {
                align-items: left;
                display: flex;
                justify-content: left;
                margin-left: 30px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
                margin-left: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .textarea {
                margin-bottom: 15px;
            }
    
            .label {
                margin-top: 15px;

            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
             <h2 class="title">Ausbildungsnachweis</h2>   
    </head>
    <body>
       <div class="container">
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
        </div>
    </body>
</html>
