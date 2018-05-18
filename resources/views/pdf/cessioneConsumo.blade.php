<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://dublincore.org/documents/dcmi-terms/">
    <meta http-equiv="Content-Type" content="text/xml; charset=utf-8"/>
    <style type="text/css">
        @page {
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            empty-cells: show
        }

        td, th {
            vertical-align: top;
            font-size: 12pt;
        }

        h1, h2, h3, h4, h5, h6 {
            clear: both
        }

        ol, ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li span. {
            clear: both;
            line-height: 0;
            width: 0;
            height: 0;
            margin: 0;
            padding: 0;
        }

        span.footnodeNumber {
            padding-right: 1em;
        }

        span.annotation_style_by_filter {
            font-size: 95%;
            font-family: Arial;
            background-color: #fff000;
            margin: 0;
            border: 0;
            padding: 0;
        }

        * {
            margin: 0;
        }

        .P1 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
        }

        .P2 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
            text-align: center ! important;
        }

        .P3 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
        }

        .P4 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
            text-align: center ! important;
        }

        .P5 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
            margin-left: 8.8cm;
            margin-right: 1.9cm;
            text-align: center ! important;
            text-indent: 0cm;
            background-color: transparent;
        }

        .P6 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
            margin-left: 8.8cm;
            margin-right: 1.9cm;
            text-align: center ! important;
            text-indent: 0cm;
            background-color: transparent;
        }

        .P7 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
            margin-left: 0cm;
            margin-right: 0cm;
            text-align: center ! important;
            text-indent: 0cm;
            background-color: transparent;
        }

        .P8 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
            margin-left: 0cm;
            margin-right: 0cm;
            text-align: center ! important;
            text-indent: 0cm;
            background-color: transparent;
        }

        .P9 {
            font-size: 12pt;
            font-family: Liberation Serif;
            writing-mode: page;
            margin-left: 0cm;
            margin-right: 0cm;
            text-align: left ! important;
            text-indent: 0cm;
            background-color: transparent;
        }

    </style>
</head>
<body dir="ltr" style="max-width:21.001cm;margin-top:2cm; margin-bottom:2cm; margin-left:2cm; margin-right:2cm; ">
<p class="P1"><h5>[Copia per il Traente]</h5></p>
<p
        class="P2">COMANDO 1ª REGIONE AEREA</p>
<p class="P2">Ufficio Comando</p>
<p class="P1"> </p>
<p class="P1"> </p>
<p class="P2">Ricevuta</p>
<p class="P1"> </p>
<p class="P1"> </p>
<p class="P3">Io sottoscritto <b><u>{{Auth::user()->name}}</u></b> </p>
<p class="P3"><span class="T1">in qualità di fiduciario M.A. consegno a: <b><u> {{$req['nominativoUtente']}}</u></b></span></p>
<p class="P3"> </p>
<p class="P3">il sottoelencato materiale di consumo:</p>
<p class="P1"><b>N° {{$req['quantita']}} {{$req['denominazione']}} </b></p>
<p class="P1"> </p>
<p class="P1"> </p>
<p class="P1">Milano <b>{{\Carbon\Carbon::today()->format('d/m/Y')}}</b> </p>
<p class="P1"> </p>
<p class="P1"> </p>
<p class="P5">Firma per la consegna</p>
<p class="P6"> </p>
<p class="P6"> </p>
<p class="P7"> </p>
<p class="P9">-  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -
     -  -  -  -  -  -  -  -  -  -  -  -</p>
<p class="P8"> </p>
<p class="P8"><h5>[Copia per il Fiduciario]</h5> </p>
<p class="P8"> </p>
<p class="P4">COMANDO 1ª REGIONE AEREA</p>
<p class="P2">Ufficio Comando</p>
<p class="P1"> </p>
<p class="P1"> </p>
<p class="P2">Ricevuta</p>
<p class="P1"> </p>
<p class="P1"> </p>
<p class="P1">Io sottoscritto  <b><u> {{$req['nominativoUtente']}}</u></b></p>
<p class="P3"><span class="T1">ricevo da:  <b><u>{{Auth::user()->name}}</u></b></span></p>
<p class="P3"> </p>
<p class="P3">il sottoelencato materiale di consumo:</p>
<p class="P1"><b>N° {{$req['quantita']}} {{$req['denominazione']}}</b></p>
<p class="P1"> </p>
<p class="P1"> </p>
<p class="P1">Milano <b>{{\Carbon\Carbon::today()->format('d/m/Y')}}</b> </p>
<p class="P1"> </p>
<p class="P1"> </p>
<p class="P6">Firma per ricevuta</p></body>
</html>