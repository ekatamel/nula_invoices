<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="/style.css">
        <title>FAKTURA č. 198100000{{$invoice->id}}</title>
        <style type="text/css">
            * {
                margin: 0;
                padding: 0;
                text-indent: 0;
                font-family: "Dejavu Sans"
            }
            .s1 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 10pt;
            }
            p {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: bold;
                text-decoration: none;
                font-size: 12pt;
                margin: 0pt;
            }
            .s2 {
                color: #00007e;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 8pt;
            }
            .s3 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: bold;
                text-decoration: none;
                font-size: 10pt;
            }
            .s4 {
                color: #00007e;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
            }
            .s5 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
            }
            .s6 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
            }
            .s7 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
            }
            .s8 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
            }
            .s9 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 8pt;
                vertical-align: 1pt;
            }
            .s10 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 10pt;
            }
            .s11 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 8pt;
            }
            .s12 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 10pt;
                vertical-align: -1pt;
            }
            .s13 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 8pt;
            }
            .s14 {
                color: #00007e;
                ffont-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 10pt;
            }
            .s15 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
            }
            .s16 {
                color: black;
                font-family: "Dejavu Sans";
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 7pt;
            }
            table,
            tbody {
                vertical-align: top;
                overflow: visible;
            }
        </style>
    </head>
    <body>  
      
      <div class="invoice">
       
        <p
            style="
                width: 90%;
                text-indent: 0pt;
                text-align: left;
                margin: auto;
                margin-top: 2rem;
            "
        >
          <span>{{$invoice->supplier->name}}</span>
            
            <span style="color: #00007e; margin-left: 20rem;">FAKTURA č. 198100000{{$invoice->id}}</span>
        </p>
        <table
            style="border-collapse: collapse; margin-left: 6.861pt; margin: auto; padding-bottom: 1rem;"
            cellspacing="0"
        >
            <tr style="height: 50pt">
                <td
                    style="
                        width: 280pt;
                        border-top-style: solid;
                        border-top-width: 1pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 2pt;
                        border-right-style: solid;
                        border-right-width: 2pt;
                    "
                    rowspan="2"
                >
                    <p
                        class="s2"
                        style="
                            padding-top: 4pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            line-height: 9pt;
                            text-align: left;
                        "
                    >
                        Dodavatel:
                    </p>
                    <p
                        class="s3"
                        style="
                            padding-left: 136pt;
                            text-indent: 0pt;
                            line-height: 120%;
                            text-align: left;
                        "
                    >
                    {{$invoice->supplier->name}}
                    </p>
                    <p
                        class="s3"
                        style="
                            padding-left: 136pt;
                            padding-right: 67pt;
                            text-indent: 0pt;
                            line-height: 120%;
                            text-align: left;
                        "
                    >
                        <!-- Lábkova 900/15 31800 Plzeň -->
                        {{$invoice->supplier->street}} 
                        {{$invoice->supplier->zip_code}} 
                        {{$invoice->supplier->municipality_name}} 
                    </p>
                    <p style="text-indent: 0pt; text-align: left"><br /></p>
                    <p
                        class="s4"
                        style="
                            padding-top: 6pt;
                            padding-left: 136pt;
                            text-indent: 0pt;
                            line-height: 10pt;
                            text-align: left;
                        "
                    >
                        IČ: {{$invoice->supplier->ico}} 
                    </p>
                    <p
                        class="s5"
                        style="
                            padding-left: 136pt;
                            padding-right: 61pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Telefon: <br>
                        Mobil:  <br>
                        E-mail: <br>
                    </p>
                    <p
                        style="
                            padding-left: 136pt;
                            padding-right: 17pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        <!-- <a
                            href="mailto:plzen@naseandulka.cz"
                            class="s6"
                            target="_blank"
                            >E-mail: </a
                        > -->
                    </p>
                </td>
                <td
                    style="
                        width: 255pt;
                        border-top-style: solid;
                        border-top-width: 1pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 2pt;
                        border-right-style: solid;
                        border-right-width: 1pt;
                    "
                >
                    <p
                        class="s5"
                        style="
                            padding-top: 4pt;
                            padding-left: 11pt;
                            padding-right: 9pt;
                            text-indent: 0pt;
                            line-height: 115%;
                            text-align: left;
                        "
                    >
                        Variabilní s.: 198100000{{$invoice->id}}
                        <span style="margin-left: 2rem"
                            >Konstantní s.:</span
                        >

                        <br />Objednávka č.:
                    </p>
                    <p
                        class="s5"
                        style="
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Objednávka ze dne:
                    </p>
                </td>
            </tr>
            <tr style="height: 110pt">
                <td
                    style="
                        width: 255pt;
                        border-top-style: solid;
                        border-top-width: 2pt;
                        border-left-style: solid;
                        border-left-width: 2pt;
                        border-bottom-style: solid;
                        border-bottom-width: 2pt;
                        border-right-style: solid;
                        border-right-width: 2pt;
                    "
                    rowspan="2"
                >
                    <p
                        class="s2"
                        style="
                            padding-top: 4pt;
                            padding-left: 10pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Odběratel: <span class="s7" style="margin-left: 10px;">IČ:</span
                        ><span class="s8"> </span
                        ><span class="s5" style="margin-left: 3rem"
                            >{{$invoice->customer->ico}} </span
                        >
                    </p>
                    <p
                        class="s5"
                        style="
                            padding-top: 1pt;
                            padding-left: 52pt;
                            text-indent: 0pt;
                            text-align: left;
                            margin-left: 10px;
                        "
                    >
                        DIČ:
                    </p>
                    <p style="text-indent: 0pt; text-align: left"><br /></p>
                    <p
                        class="s3"
                        style="
                            padding-left: 28pt;
                            padding-right: 80pt;
                            text-indent: 0pt;
                            line-height: 120%;
                            text-align: left;
                        "
                    >
                    {{$invoice->customer->name}} <br> 
                    {{$invoice->customer->street}} <br> 
                        {{$invoice->customer->zip_code}}
                        {{$invoice->customer->municipality_name}} 
                    </p>
                </td>
            </tr>
            <tr style="height: 59pt">
                <td
                    style="
                        width: 280pt;
                        border-top-style: solid;
                        border-top-width: 2pt;
                        border-left-style: solid;
                        border-left-width: 2pt;
                        border-bottom-style: solid;
                        border-bottom-width: 2pt;
                        border-right-style: solid;
                        border-right-width: 2pt;
                    "
                >
                    <p
                        class="s9"
                        style="
                            padding-top: 1pt;
                            padding-left: 10pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Banka:
                        <!-- <span class="s10" style="margin-left: 1.9rem"
                            >Fio banka, a.s.</span
                        > -->
                    </p>
                    <p
                        class="s9"
                        style="
                            padding-top: 1pt;
                            padding-left: 10pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        SWIFT:
                        <!-- <span class="s10" style="margin-left: 1.8rem"
                            >FIOBCZPPXXX</span
                        > -->
                    </p>
                    <p
                        class="s9"
                        style="
                            padding-top: 1pt;
                            padding-left: 10pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        IBAN:
                        <!-- <span class="s10" style="margin-left: 2.2rem"
                            >CZ5720100000002501460768</span
                        > -->
                    </p>
                    <p
                        class="s11"
                        style="
                            padding-top: 1pt;
                            padding-left: 10pt;
                            text-indent: 0pt;
                            text-align: left;
                            margin-right: 5rem;
                        "
                    >
                    <span style="margin-right: 5rem;">Číslo účtu:</span>
                        
                        <!-- <span
                            class="s12"
                            style="margin-left: 0.8rem; margin-right: 2rem"
                            >2501460768 </span
                        > -->
                    <span>Kód banky:</span>
                        
                        <!-- <span class="s12" style="margin-left: 1rem">2010</span> -->
                    </p>
                </td>
            </tr>
            <tr style="height: 68pt">
                <td
                    style="
                        width: 280pt;
                        border-top-style: solid;
                        border-top-width: 2pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 1pt;
                        border-right-style: solid;
                        border-right-width: 1pt;
                    "
                >
                    <p
                        class="s1"
                        style="
                            padding-top: 6pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Datum vystavení:
                    </p>
                    <p
                        class="s1"
                        style="
                            padding-top: 1pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Datum splatnosti:
                    </p>
                    <!-- <p
                        class="s1"
                        style="
                            padding-top: 1pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Firma není plátcem DPH.
                    </p> -->
                    <p
                        class="s1"
                        style="
                            padding-top: 4pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Forma úhrady: 
                    </p>
                </td>
                <td
                    style="
                        width: 255pt;
                        border-top-style: solid;
                        border-top-width: 2pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 1pt;
                        border-right-style: solid;
                        border-right-width: 1pt;
                    "
                >
                    <p
                        class="s2"
                        style="
                            padding-top: 7pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Konečný příjemce:
                    </p>
                </td>
            </tr>
            <tr style="height: 23pt">
                <td
                    style="
                        width: 535pt;
                        border-top-style: solid;
                        border-top-width: 1pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 1pt;
                        border-right-style: solid;
                        border-right-width: 1pt;
                    "
                    colspan="2"
                >
                    <p
                        class="s5"
                        style="
                            padding-top: 5pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
        
                        "
                    >
                      <span style="margin-right: 17rem;">Označení dodávky</span>    
                    
                        <span
                            class="s13"
                        >
                            <span>Množství </span>
                            <span style="margin-left: 5rem;">J.cena</span>
                            <span style="margin-right: 1rem; margin-left: 5rem;">Celkem</span>
                        </span>
                    </p>
                </td>
            </tr>
            <tr style="height: 57pt">
                <td
                    style="
                        width: 535pt;
                        border-top-style: solid;
                        border-top-width: 1pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 1pt;
                        border-right-style: solid;
                        border-right-width: 1pt;
                    "
                    colspan="2"
                >
                    <p style="text-indent: 0pt; text-align: left"><br /></p>
                    <p
                        class="s14"
                        style="
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Popis služeb
                    </p>
                    <p style="text-indent: 0pt; text-align: left"><br /></p>
                    <p
                        class="s5"
                        style="
                            /* padding-right: 11pt;
                            text-indent: 0pt;
                            text-align: right;
                            margin-right: 6rem; */
                            text-align: right;
                            margin-right: 1rem;
                        "
                    >

                    <span></span>
                    <span style="margin-left: 10rem;"></span>
                    <span style="margin-right: 1rem; margin-left: 10rem;">{{number_format($invoice->price, 2, ",", " ")}}</span>


                    </p>
                    </p>
                </td>
            </tr>
            <tr style="height: 41pt">
                <td
                    style="
                        width: 535pt;
                        border-top-style: solid;
                        border-top-width: 1pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 1pt;
                        border-right-style: solid;
                        border-right-width: 1pt;
                    "
                    colspan="2"
                >
                    <p
                        class="s5"
                        style="
                            padding-top: 6pt;
                            padding-left: 11pt;
                            padding-right: 1rem;
                            text-indent: 0pt;
                            text-align: left;
                            display: flex;
                            justify-content: space-between;
                            margin-right: 1rem;
                        "
                    >
                      <span style="margin-right: 32.5rem;">Součet položek</span>
                      <span>{{number_format($invoice->price, 2, ",", " ")}}</span>
                         
                    </p>
                    <p
                        class="s3"
                        style="
                            padding-top: 3pt;
                            padding-left: 11pt;
                            padding-right: 1rem;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                      <span style="margin-right: 8rem;">CELKEM K ÚHRADĚ</span>
                        
                        <span class="s1" style="margin-right: 4.2rem;">Částky jsou uvedeny v Kč </span>
                      <span style="margin-right: 1rem; margin-left:5rem;">{{number_format($invoice->price, 2, ",", " ")}}</span>
                      
                    </p>
                </td>
            </tr>
            <tr style="height: 219pt;">
                <td
                    style="
                        width: 535pt;
                        border-top-style: solid;
                        border-top-width: 1pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 1pt;
                        border-right-style: solid;
                        border-right-width: 1pt;
                    "
                    colspan="2"
                >
                    <p
                        class="s1"
                        style="
                            padding-top: 6pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                        "
                    >
                        Vystavil: <span class="s15"></span>
                    </p>
                    <p style="text-indent: 0pt; text-align: left"><br /></p>
                    <p
                        class="s16"
                        style="
                            padding-top: 9pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            line-height: 8pt;
                            text-align: left;
                            margin-top: 11rem;
                        "
                    >
                        Vydané jménem: {{$invoice->supplier->name}}
                    </p>
                    <p
                        class="s16"
                        style="
                            padding-left: 11pt;
                            padding-right: 279pt;
                            text-indent: 0pt;
                            line-height: 87%;
                            text-align: left;
                        "
                    >
                    </p>
                </td>
            </tr>
            <tr style="height: 133pt; position: relative">
                <td
                    style="
                        width: 535pt;
                        border-top-style: solid;
                        border-top-width: 1pt;
                        border-left-style: solid;
                        border-left-width: 1pt;
                        border-bottom-style: solid;
                        border-bottom-width: 1pt;
                        border-right-style: solid;
                        border-right-width: 1pt;
                        padding-top: 1rem;
                        padding-bottom: 1rem;
                    "
                    colspan="2"
                >
                    <!-- <p style="text-indent: 0pt; text-align: left"><br /></p> -->
                    <p
                        class="s11"
                        style="
                            /* padding-left: 180pt;
                            padding-right: 198pt; */
                            width: 50%;
                            margin: auto;
                            text-indent: 0pt;
                            text-align: center;
                        "
                    >
                        <span style="
                        margin-right: 8rem; margin-left: 5rem">Převzal: </span>
                        <span>Razítko:</span>
                    
                    </p>
                    <p style="text-indent: 0pt; text-align: left"><br /></p>
                    <div style="width: 100px; height: 100px;background-color: grey; margin-left: 2rem"></div>
                    <p
                        class="s16"
                        style="
                            padding-left: 41pt;
                            text-indent: 0pt;
                            text-align: left;
                            margin-top: 10px;
                        "
                    >
                        QR Platba+F
                    </p>
                    <p
                        class="s16"
                        style="
                            padding-top: 3pt;
                            padding-left: 11pt;
                            text-indent: 0pt;
                            text-align: left;
                            display: flex;
                            justify-content: space-between;
                        "
                    >
                        <a
                            href="http://www.mpohoda.cz/"
                            style="
                                color: black;
                                font-family: Arial, sans-serif;
                                font-style: normal;
                                font-weight: normal;
                                text-decoration: none;
                                font-size: 7pt;
                            "
                            target="_blank"
                            >Vystaveno v mobilní fakturaci </a
                        ><span
                            style="
                                color: black;
                                font-family: Arial, sans-serif;
                                font-style: normal;
                                font-weight: normal;
                                text-decoration: underline;
                                font-size: 7pt;
                            "
                            >www.mpohoda.cz</span
                        >
                        <span style="margin-left: 15rem; margin-right: 1rem;">Ekonomický a informační systém POHODA</span>
                        
                    </p>
                </td>

            </tr>
        </table>


      </div> 


    </body>
</html>
