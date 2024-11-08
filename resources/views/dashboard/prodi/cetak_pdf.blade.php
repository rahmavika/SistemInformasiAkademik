<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            table-layout: fixed; /* Ensures table fits within the container */
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            word-wrap: break-word; /* Ensures long text wraps within the cell */
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        th:nth-child(1), td:nth-child(1) {
            width: 6%; /* Adjust width of the 'No' column */
        }
        th:nth-child(2), td:nth-child(2) {
            width: 94%; /* Adjust width of the 'NIM' column */
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        @page {
            size: A4; /* Sets the paper size to A4 */
            margin: 15mm; /* Sets the margins to 20mm */
        }
        @media print {
            .container {
                page-break-inside: avoid;
            }
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Data Prodi</h2>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
            @foreach($prodis as $prodi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $prodi->nama }}</td>
            </tr>
            @endforeach
        </table>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Politeknik Negeri Padang</p>
        </div>
    </div>
</body>
</html>
