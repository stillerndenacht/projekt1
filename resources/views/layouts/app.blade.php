<html>
<head>
    <title>Mein erstes Laravel Tool</title>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            border: 2px solid blue;
        }
    </style>
</head>
<body>
<h1>Hallo das ist projekt1laravel</h1>

<div class="container">
    <div class="row">
        @yield('projects')
        {{-- <div  class="col-md-2">@yield('dashboard')</div>
         <div  class="col-md-8">@yield('content')</div> --}}
    </div>
</div>

<!-- ####### ab hier Aufgabe ######### -->

<div class=" ">
    <div class="table-responsive">
        <table class="table table-dark table-striped table-hover table-bordered">
            <thead>
            <tr>
                <!-- eine Auswahl der Kalenderwoche von bis-->
                <th>KW Dropdown1</th>
                <th>KW Dropdown2</th>
                <!--besser wäre hier eine von der ausgewählten KW abhängige Anzahl der Spalten-->
                <th>Montag abhängig Datum</th>
                <th>Dienstag abhängig Datum</th>
                <th>Mittwoch abhängig Datum</th>
                <th>Donnerstag abhängig Datum</th>
                <th>Freitag abhängig Datum</th>
            </tr>
            <tr>
                <th>Tagesstunde Dropdown?</th>
                <th>Bearbeiter Dropdown</th>
                <th>Montag Datum</th>
                <th>Dienstag Datum</th>
                <th>Mittwoch Datum</th>
                <th>Donnerstag Datum</th>
                <th>Freitag Datum</th>
            </tr>
            </thead>
            <tbody>
            <!--Stunde 1 ########################-->
            <tr>
                <td rowspan="4">1</td>
                <td>Bearbeiter1</td>
                <td>Mo Pkürzel Bearbeiter1</td>
                <td>Di Pkürzel Bearbeiter1</td>
                <td>Mi Pkürzel Bearbeiter1</td>
                <td>Do Pkürzel Bearbeiter1</td>
                <td>Fr Pkürzel Bearbeiter1</td>
            </tr>
            <tr>
                <td>Bearbeiter2</td>
                <td>Mo Pkürzel Bearbeiter2</td>
                <td>Di Pkürzel Bearbeiter2</td>
                <td>Mi Pkürzel Bearbeiter2</td>
                <td>Do Pkürzel Bearbeiter2</td>
                <td>Fr Pkürzel Bearbeiter2</td>
            </tr>
            <tr>
                <td>Bearbeiter3</td>
                <td>Mo Pkürzel Bearbeiter3</td>
                <td>Di Pkürzel Bearbeiter3</td>
                <td>Mi Pkürzel Bearbeiter3</td>
                <td>Do Pkürzel Bearbeiter3</td>
                <td>Fr Pkürzel Bearbeiter3</td>
            </tr>
            <tr>
                <td>Bearbeiter4</td>
                <td>Mo Pkürzel Bearbeiter4</td>
                <td>Di Pkürzel Bearbeiter4</td>
                <td>Mi Pkürzel Bearbeiter4</td>
                <td>Do Pkürzel Bearbeiter4</td>
                <td>Fr Pkürzel Bearbeiter4</td>
            </tr>
            <!--Stunde 2 ########################-->
            <tr>
                <td rowspan="4">2</td>
                <td>Bearbeiter1</td>
                <td>Mo Pkürzel Bearbeiter1</td>
                <td>Di Pkürzel Bearbeiter1</td>
                <td>Mi Pkürzel Bearbeiter1</td>
                <td>Do Pkürzel Bearbeiter1</td>
                <td>Fr Pkürzel Bearbeiter1</td>
            </tr>
            <tr>
                <td>Bearbeiter2</td>
                <td>Mo Pkürzel Bearbeiter2</td>
                <td>Di Pkürzel Bearbeiter2</td>
                <td>Mi Pkürzel Bearbeiter2</td>
                <td>Do Pkürzel Bearbeiter2</td>
                <td>Fr Pkürzel Bearbeiter2</td>
            </tr>
            <tr>
                <td>Bearbeiter3</td>
                <td>Mo Pkürzel Bearbeiter3</td>
                <td>Di Pkürzel Bearbeiter3</td>
                <td>Mi Pkürzel Bearbeiter3</td>
                <td>Do Pkürzel Bearbeiter3</td>
                <td>Fr Pkürzel Bearbeiter3</td>
            </tr>
            <tr>
                <td>Bearbeiter4</td>
                <td>Mo Pkürzel Bearbeiter4</td>
                <td>Di Pkürzel Bearbeiter4</td>
                <td>Mi Pkürzel Bearbeiter4</td>
                <td>Do Pkürzel Bearbeiter4</td>
                <td>Fr Pkürzel Bearbeiter4</td>
            </tr>
            <!--Stunde 3 ########################-->
            <tr>
                <td rowspan="4">3</td>
                <td>Bearbeiter1</td>
                <td>Mo Pkürzel Bearbeiter1</td>
                <td>Di Pkürzel Bearbeiter1</td>
                <td>Mi Pkürzel Bearbeiter1</td>
                <td>Do Pkürzel Bearbeiter1</td>
                <td>Fr Pkürzel Bearbeiter1</td>
            </tr>
            <tr>
                <td>Bearbeiter2</td>
                <td>Mo Pkürzel Bearbeiter2</td>
                <td>Di Pkürzel Bearbeiter2</td>
                <td>Mi Pkürzel Bearbeiter2</td>
                <td>Do Pkürzel Bearbeiter2</td>
                <td>Fr Pkürzel Bearbeiter2</td>
            </tr>
            <tr>
                <td>Bearbeiter3</td>
                <td>Mo Pkürzel Bearbeiter3</td>
                <td>Di Pkürzel Bearbeiter3</td>
                <td>Mi Pkürzel Bearbeiter3</td>
                <td>Do Pkürzel Bearbeiter3</td>
                <td>Fr Pkürzel Bearbeiter3</td>
            </tr>
            <tr>
                <td>Bearbeiter4</td>
                <td>Mo Pkürzel Bearbeiter4</td>
                <td>Di Pkürzel Bearbeiter4</td>
                <td>Mi Pkürzel Bearbeiter4</td>
                <td>Do Pkürzel Bearbeiter4</td>
                <td>Fr Pkürzel Bearbeiter4</td>
            </tr>
            <!--Stunde 4 ########################-->
            <tr>
                <td rowspan="4">4</td>
                <td>Bearbeiter1</td>
                <td>Mo Pkürzel Bearbeiter1</td>
                <td>Di Pkürzel Bearbeiter1</td>
                <td>Mi Pkürzel Bearbeiter1</td>
                <td>Do Pkürzel Bearbeiter1</td>
                <td>Fr Pkürzel Bearbeiter1</td>
            </tr>
            <tr>
                <td>Bearbeiter2</td>
                <td>Mo Pkürzel Bearbeiter2</td>
                <td>Di Pkürzel Bearbeiter2</td>
                <td>Mi Pkürzel Bearbeiter2</td>
                <td>Do Pkürzel Bearbeiter2</td>
                <td>Fr Pkürzel Bearbeiter2</td>
            </tr>
            <tr>
                <td>Bearbeiter3</td>
                <td>Mo Pkürzel Bearbeiter3</td>
                <td>Di Pkürzel Bearbeiter3</td>
                <td>Mi Pkürzel Bearbeiter3</td>
                <td>Do Pkürzel Bearbeiter3</td>
                <td>Fr Pkürzel Bearbeiter3</td>
            </tr>
            <tr>
                <td>Bearbeiter4</td>
                <td>Mo Pkürzel Bearbeiter4</td>
                <td>Di Pkürzel Bearbeiter4</td>
                <td>Mi Pkürzel Bearbeiter4</td>
                <td>Do Pkürzel Bearbeiter4</td>
                <td>Fr Pkürzel Bearbeiter4</td>
            </tr>
            <!--Stunde 5 ########################-->
            <tr>
                <td rowspan="4">5</td>
                <td>Bearbeiter1</td>
                <td>Mo Pkürzel Bearbeiter1</td>
                <td>Di Pkürzel Bearbeiter1</td>
                <td>Mi Pkürzel Bearbeiter1</td>
                <td>Do Pkürzel Bearbeiter1</td>
                <td>Fr Pkürzel Bearbeiter1</td>
            </tr>
            <tr>
                <td>Bearbeiter2</td>
                <td>Mo Pkürzel Bearbeiter2</td>
                <td>Di Pkürzel Bearbeiter2</td>
                <td>Mi Pkürzel Bearbeiter2</td>
                <td>Do Pkürzel Bearbeiter2</td>
                <td>Fr Pkürzel Bearbeiter2</td>
            </tr>
            <tr>
                <td>Bearbeiter3</td>
                <td>Mo Pkürzel Bearbeiter3</td>
                <td>Di Pkürzel Bearbeiter3</td>
                <td>Mi Pkürzel Bearbeiter3</td>
                <td>Do Pkürzel Bearbeiter3</td>
                <td>Fr Pkürzel Bearbeiter3</td>
            </tr>
            <tr>
                <td>Bearbeiter4</td>
                <td>Mo Pkürzel Bearbeiter4</td>
                <td>Di Pkürzel Bearbeiter4</td>
                <td>Mi Pkürzel Bearbeiter4</td>
                <td>Do Pkürzel Bearbeiter4</td>
                <td>Fr Pkürzel Bearbeiter4</td>
            </tr>
            <!--Stunde 6 ########################-->
            <tr>
                <td rowspan="4">6</td>
                <td>Bearbeiter1</td>
                <td>Mo Pkürzel Bearbeiter1</td>
                <td>Di Pkürzel Bearbeiter1</td>
                <td>Mi Pkürzel Bearbeiter1</td>
                <td>Do Pkürzel Bearbeiter1</td>
                <td>Fr Pkürzel Bearbeiter1</td>
            </tr>
            <tr>
                <td>Bearbeiter2</td>
                <td>Mo Pkürzel Bearbeiter2</td>
                <td>Di Pkürzel Bearbeiter2</td>
                <td>Mi Pkürzel Bearbeiter2</td>
                <td>Do Pkürzel Bearbeiter2</td>
                <td>Fr Pkürzel Bearbeiter2</td>
            </tr>
            <tr>
                <td>Bearbeiter3</td>
                <td>Mo Pkürzel Bearbeiter3</td>
                <td>Di Pkürzel Bearbeiter3</td>
                <td>Mi Pkürzel Bearbeiter3</td>
                <td>Do Pkürzel Bearbeiter3</td>
                <td>Fr Pkürzel Bearbeiter3</td>
            </tr>
            <tr>
                <td>Bearbeiter4</td>
                <td>Mo Pkürzel Bearbeiter4</td>
                <td>Di Pkürzel Bearbeiter4</td>
                <td>Mi Pkürzel Bearbeiter4</td>
                <td>Do Pkürzel Bearbeiter4</td>
                <td>Fr Pkürzel Bearbeiter4</td>
            </tr>
            <!--Stunde 7 ########################-->
            <tr>
                <td rowspan="4">7</td>
                <td>Bearbeiter1</td>
                <td>Mo Pkürzel Bearbeiter1</td>
                <td>Di Pkürzel Bearbeiter1</td>
                <td>Mi Pkürzel Bearbeiter1</td>
                <td>Do Pkürzel Bearbeiter1</td>
                <td>Fr Pkürzel Bearbeiter1</td>
            </tr>
            <tr>
                <td>Bearbeiter2</td>
                <td>Mo Pkürzel Bearbeiter2</td>
                <td>Di Pkürzel Bearbeiter2</td>
                <td>Mi Pkürzel Bearbeiter2</td>
                <td>Do Pkürzel Bearbeiter2</td>
                <td>Fr Pkürzel Bearbeiter2</td>
            </tr>
            <tr>
                <td>Bearbeiter3</td>
                <td>Mo Pkürzel Bearbeiter3</td>
                <td>Di Pkürzel Bearbeiter3</td>
                <td>Mi Pkürzel Bearbeiter3</td>
                <td>Do Pkürzel Bearbeiter3</td>
                <td>Fr Pkürzel Bearbeiter3</td>
            </tr>
            <tr>
                <td>Bearbeiter4</td>
                <td>Mo Pkürzel Bearbeiter4</td>
                <td>Di Pkürzel Bearbeiter4</td>
                <td>Mi Pkürzel Bearbeiter4</td>
                <td>Do Pkürzel Bearbeiter4</td>
                <td>Fr Pkürzel Bearbeiter4</td>
            </tr>
            <!--Stunde 8 ########################-->
            <tr>
                <td rowspan="4">8</td>
                <td>Bearbeiter1</td>
                <td>Mo Pkürzel Bearbeiter1</td>
                <td>Di Pkürzel Bearbeiter1</td>
                <td>Mi Pkürzel Bearbeiter1</td>
                <td>Do Pkürzel Bearbeiter1</td>
                <td>Fr Pkürzel Bearbeiter1</td>
            </tr>
            <tr>
                <td>Bearbeiter2</td>
                <td>Mo Pkürzel Bearbeiter2</td>
                <td>Di Pkürzel Bearbeiter2</td>
                <td>Mi Pkürzel Bearbeiter2</td>
                <td>Do Pkürzel Bearbeiter2</td>
                <td>Fr Pkürzel Bearbeiter2</td>
            </tr>
            <tr>
                <td>Bearbeiter3</td>
                <td>Mo Pkürzel Bearbeiter3</td>
                <td>Di Pkürzel Bearbeiter3</td>
                <td>Mi Pkürzel Bearbeiter3</td>
                <td>Do Pkürzel Bearbeiter3</td>
                <td>Fr Pkürzel Bearbeiter3</td>
            </tr>
            <tr>
                <td>Bearbeiter4</td>
                <td>Mo Pkürzel Bearbeiter4</td>
                <td>Di Pkürzel Bearbeiter4</td>
                <td>Mi Pkürzel Bearbeiter4</td>
                <td>Do Pkürzel Bearbeiter4</td>
                <td>Fr Pkürzel Bearbeiter4</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>
