<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://dublincore.org/documents/dcmi-terms/">
    <meta http-equiv="Content-Type" content="text/xml; charset=utf-8"/>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css">
        @page {
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
            line-height: 115%;
            margin-bottom: 0cm;
            margin-top: 0cm;
            text-align: center ! important;
            font-family: Arial;
            vertical-align: top;
            writing-mode: lr-tb;
            text-decoration: underline;
            font-weight: bold;
        }

        .P11 {
            font-size: 16pt;
            font-weight: bold;
            line-height: 115%;
            margin-bottom: 0cm;
            margin-top: 0cm;
            text-align: center ! important;
            font-family: Cambria;
            vertical-align: top;
            writing-mode: lr-tb;
        }

        .P14 {
            font-size: 16pt;
            font-weight: bold;
            line-height: 100%;
            margin-bottom: 0cm;
            margin-top: 0cm;
            text-align: center ! important;
            font-family: Cambria;
            vertical-align: top;
            writing-mode: lr-tb;
        }

        .P2 {
            font-size: 12pt;
            line-height: 150%;
            margin-bottom: 0cm;
            margin-top: 0cm;
            text-align: left ! important;
            font-family: Arial;
            vertical-align: top;
            writing-mode: lr-tb;
        }

        .P3 {
            font-size: 12pt;
            font-weight: bold;
            line-height: 150%;
            margin-bottom: 0cm;
            margin-top: 0cm;
            text-align: left ! important;
            font-family: Arial;
            vertical-align: top;
            writing-mode: lr-tb;
        }

        .P7 {
            font-size: 12pt;
            line-height: 115%;
            margin-bottom: 0cm;
            margin-top: 0cm;
            text-align: left ! important;
            font-family: Arial;
            vertical-align: top;
            writing-mode: lr-tb;
            margin-left: 0cm;
            margin-right: -0.101cm;
            text-indent: 0cm;
            font-weight: bold;
        }

        .P8 {
            font-size: 12pt;
            line-height: 115%;
            margin-bottom: 0cm;
            margin-top: 0cm;
            text-align: center ! important;
            font-family: Arial;
            vertical-align: top;
            writing-mode: lr-tb;
            margin-left: 0cm;
            margin-right: -0.101cm;
            text-indent: 0cm;
            font-weight: bold;
        }

        .T1 {
            font-family: Arial;
            font-size: 14pt;
        }

        .T3 {
            font-family: Arial;
            font-size: 12pt;
            text-decoration: underline;
        }

    </style>
</head>
<body dir="ltr"
      style="max-width:21.001cm;margin-top:1.752cm; margin-bottom:2.002cm; margin-left:2cm; margin-right:2cm; ">

<h1 class="P11"><a id="a__AERONAUTICA_MILITARE"><span/></a><span class="T1">AERONAUTICA MILITARE</span></h1>
<h1 class="P11"><span class="T1">{{ env('APP_ENTE') }}</span></h1>

<h1 class="P11"><span class="T1">{{ $ufficio->denominazione}}</span></h1>
<p class="P2"> </p>
<p class="P2"> </p>
<h1 class="P14"><span class="T3">DOCUMENTO INTERNO DI TRANSAZIONE LOGISTICA</span></h1>
<p class="P1"> </p>
<p class="P2"> </p>
<p class="P2"> </p>
<p class="P7">Si comunica il seguente movimento logistico:</p>
<p class="P2"> </p>
<p class="P2"> </p>
<p class="P2">N.D.C.: <span class="P3">{{ $result->denominazione->nuc}}</span></p>
<p class="P2"> </p>
<p class="P2">Denominazione:  <span class="P3">{{ $result->denominazione->denominazione}}</span> </p>
<p class="P2"> </p>
<p class="P2">Quantità Movimentata:  <span class="P3">{{ $req['quantita']}}</span> </p>
<p class="P2"> </p>
<p class="P2">Ente Originatore:  <span class="P3">{{ $req['enteOriginatore'] }}</span></p>
<p class="P2"> </p>
<p class="P2">Ente Destinatario:  <span class="P3">{{ $enteDest->codice.' - '.$enteDest->denominazione }}</span></p></p>
<p class="P2"> </p>
<p class="P2">Note:  <span class="P3">{{  $req['note'] }}</span></p>
<p class="P2"> </p>
<p class="P2">In data:  <span class="P3">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</span> </p>
<p class="P2"> </p>
<p class="P2"> </p>
<p class="P2"> </p>
<p class="P2"> </p>
<p class="P2"> </p>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="P8">PER RICEVUTA</th>
            <th class="P8">PER CESSIONE</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="P8">Il responsabile dell'Ente Destinatario</td>
            <td class="P8">Il responsabile dell'Ente Originatore</td>
        </tr>
        </tbody>
    </table>
</div>

