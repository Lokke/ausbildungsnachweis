<!doctype html>
<html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link rel="stylesheet" href="https://rawgit.com/lodev09/bootstrap-markdown/master/css/bootstrap-markdown.min.css">
       <style> 
              body {
                        font-family: 'Times-Roman';
                        font-size: 14px;
                        margin: 0;
              }

              .container {
                        width: 700px;
                        height: 842px;
              }

              .table-bordered {
                        width: 700px;
                        height: 60px;
                        border-collapse: collapse;
                        margin-bottom: none;
                        vertical-align: top;
                        text-align: left;
              }

                .table-bordered td {
                        border: solid 0.5px; 
              }

               .table-comments .top-left {
                        height: 60px;
                        vertical-align: top;
                        text-align: left;
              }

              .small-table {
                        width: 700px;
                        height: 20px;
                        font-size: 12px;
              }

             .small-cell {
                        width: 170px;
              }


              .table-element {
                        height: 150px;
                        width: 700px;
                        border: solid 0.5px; 
              }
             
             html {
                    margin-top: none;
             }
    
             th {
                    font-weight: normal;
                    align: top;
                    width: 50%;
                    height: 45%;
             }

              .title {
                    padding-top: 20px; 
              }
            
              .metadata {
                   width: 200px; 
                   height: 30px;
              }

              .work {
                    padding-top: none; 
              }
               .underlined {
                    text-decoration: underline;
                    width: 200px;
               }

               .datesdisplay {
                    float: right;
               }
               .datesdisplay span {
                    margin: 0 7px 0 7px;
              }
                

               .border-left {
                    border-left: solid 0.5px;
               }
         </style>
    </head>
    <body>
        <div class="container">
            <p>Ausbildungsnachweis für Ausbildungswoche Nr. <strong>{{ $week->week_nr }}</strong></p>        
            <p class="datesdisplay"><span> von </span> {{ $week->start_date }} <span>  bis </span> {{ $week->end_date }}</p><br>      

            <table class="metadata-table">
                <tbody>
                    <tr class="metadata-row">
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
            <p class="work">Ausbildung am Arbeitsplatz</p>
            <table class="table table-element">
                <tbody>
                    <tr><td>{!! $week->work !!}</td></tr> 
                </tbody>
            </table>
            <p class="title">Betriebliche Schulung/Unterweisung</p>
            <table class="table table-element">
                <tbody>
                    <tr><td>{!! $week->training !!}</td></tr> 
                </tbody>
            </table>
            <p class="title">Berufschule</p>
            <table class="table table-element">
                <tbody>
                    <tr><td>{!! $week->school !!}</td></tr> 
                </tbody>
            </table>
            <br>
            <table class="table-bordered table-comments">
                    <tr>    
                        <td colspan="2" class="top-left">Bemerkungen</td>
                        <td colspan="2" class="border-left top-left"> Bemerkungen</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="top-left">Unterschrift</td>
                        <td colspan="2" class="border-left top-left">Unterschrift</td>
                    </tr>
                    <tr>
                                <td class="small-cell">Datum</td>
                                <td class="small-cell border-left">Auszubildender</td>
                                <td class="small-cell border-left">Datum</td>
                                <td class="small-cell border-left">Ausbilder</td>
                    </tr>
            </table>
        </div>
    </body>
</html>
