<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        * {
            font-size: 7.55px !important;
        }

        table,
        thead,
        tr,
        tbody,
        th,
        td {
            text-align: center;
            vertical-align: center !important;
        }

        .table thead td {
            text-align: center;
            vertical-align: center !important;

        }
    </style>
</head>

<body>
    @php
        $total = (int) cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
    @endphp
    <h3><b>Bulan: Januari</b></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td rowspan="2">No</td>
                <td rowspan="2">Uraian Pekerjaan</td>
                <td rowspan="2">Bobot</td>
                <td colspan="{{ $total }}">Tanggal/Hasil Evaluasi</td>
                <td rowspan="2">Total</td>
                <td rowspan="2">Rata-rata</td>
                <td rowspan="2">Persentase Pencapaian</td>
            </tr>
            <tr>
                @for ($i = 1; $i <= $total; $i++)
                    <td>{{ $i }}</td>
                @endfor
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td> {{ $item->uraian->teks_uraian }}</td>
                    <td>{{ $item->uraian->bobot }}</td>
                    @for ($i = 1; $i <= $total; $i++)
                        <td>2</td>
                    @endfor
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <table class="table table-bordered w-100" style="width: 100% !important;">
        <thead>
            <tr>
                <td rowspan="2">No</td>
                <td rowspan="2">Uraian Pekerjaan</td>
                <td rowspan="2">Bobot</td>
                <td colspan="{{ $total }}">Tanggal/Hasil Evaluasi</td>
                <td rowspan="2">Total</td>
                <td rowspan="2">Rata-rata</td>
                <td rowspan="2">Persentase Pencapaian</td>
            </tr>
            <tr>
                @for ($i = $total; $i == 0; $i--)
                    <td>{{ $loop->iteration }}</td>
                @endfor
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="16">{{ $data[0]->uraian->aspek->nama_aspek }}</td>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td> {{ $item->uraian->teks_uraian }}</td>
                    <td>{{ $item->uraian->bobot }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                    <td>{{ $item->skor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
</body>

</html>
