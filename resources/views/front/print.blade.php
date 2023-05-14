<html>

    <head>
        <title>DIAGNOSA</title>
        <style>
            .page-break {
                page-break-after: always;
            }

            @page {
                margin: 0.2cm;
            }

            body {
                font-size: 9pt;
                font-family: Arial, Helvetica, sans-serif;
                margin: 0.2cm;
                padding: 20px;
            }

            .title {
                font-size: 18pt;
                font-weight: w500;
            }

            p {
                margin: 0;
            }

            .text-center {
                text-align: center;
            }

            .text-justify {
                text-align: justify;
            }

            .text-right {
                text-align: right;
            }

            .table-item tbody tr td {
                padding: 5px 8px;
            }

            .table-item thead th {
                padding: 8px 8px;
            }



            .table-item thead {
                background: #ccc;
                border-bottom: 0.5px solid #000;
                border-top: 0.5px solid #000;
                display: table-row-group;
            }

            .table-item .total {
                background: #ccc;
            }

            /* .table-ttd tr td {
            border: 0.5px solid #000;
        } */

            td.ttd {
                vertical-align: bottom;
                text-align: center;
            }

            .table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            .table-header,
            td.table-header {
                border: 0px;
                border-collapse: collapse;
            }

            .uang-format {
                text-align: right;
            }

            .uang-format:before {
                content: "Rp ";
                float: left;
                padding-right: 1px;
            }
        </style>
    </head>

    <body>
        <h2 style="text-align:center"><strong>HASIL DIAGNOSA</strong></h2>
        <br>
        <table class="table-item table" style="width:100%;">
            <tbody>
                <tr>
                    <td width="20%">Tanggal</td>
                    <td>{{ $diagnosa->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
                <tr>
                    <td width="20%">Nama</td>
                    <td>{{ $diagnosa->name }}</td>
                </tr>
                <tr>
                    <td width="20%">Tipe Motor</td>
                    <td>{{ $diagnosa->tipeMotor->name ?? "" }}</td>
                </tr>
                <tr>
                    <td width="20%">Diagnosa Kerusakan</td>
                    <td>{{ $diagnosa->kerusakan->text ?? "" }}</td>
                </tr>
                <tr>
                    <td width="20%">Solusi</td>
                    <td class="text-justify">{{ $diagnosa->kerusakan->deskripsi ?? "" }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="table-item table" style="width:100%;">
            <thead>
                <tr>
                    <th width="5%">NO</th>
                    <th class="text-center">Gejala</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gejala as $data_gejala)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $data_gejala }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>

</html>