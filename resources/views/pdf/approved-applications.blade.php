@extends('layouts.auth')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Applications</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr.show {
            opacity: 1;
        }
    </style>

    <!-- Include html2pdf.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
</head>
<body>

    @foreach ($applications->groupBy('province') as $province => $provinceApplications)
        <!-- Add the h1 title above each table with the province filter -->
        <h1 style="text-align: center;">Approved Applications in Province: {{ $province }}</h1>
        <a href="#" class="btn btn-primary" id="downloadPdfBtn{{ $province }}">Download PDF for {{ $province }}</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>National Id</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Province</th>
                    <th>District</th>
                    <th>Ubudehe</th>
                    <th>Asset</th>
                    <th>Education</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach ($provinceApplications as $application)
                    <tr class="show">
                        <td>{{ ++$i }}</td>
                        <td>{{ $application->name }}</td>
                        <td>{{ $application->nid }}</td>
                        <td>{{ $application->phone }}</td>
                        <td>{{ $application->gender }}</td>
                        <td>
                            <span class="pip-rwanda-location" data-type="0" data-element="{{ $application->province }}"></span>
                        </td>
                        <td>
                            <span class="pip-rwanda-location" data-type="1" data-element="{{ $application->district }}"></span>
                        </td>
                        <td>{{ $application->ubudehe }}</td>
                        <td>{{ $application->asset }}</td>
                        <td>{{ $application->education }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const rows{{ $province }} = document.querySelectorAll('tbody tr');

                rows{{ $province }}.forEach((row, index) => {
                    setTimeout(() => {
                        row.classList.add('show');
                    }, index * 100);
                });

                document.getElementById('downloadPdfBtn{{ $province }}').addEventListener('click', function () {
                    // Create a new div to include the title and the specific table
                    const content{{ $province }} = document.createElement('div');
                    content{{ $province }}.innerHTML = '<h1 style="text-align: center;">Approved Applications in Province: {{ $province }}</h1>';

                    // Append the existing table to the new div
                    const table{{ $province }} = document.querySelectorAll('table')[{{ $loop->index }}];
                    content{{ $province }}.appendChild(table{{ $province }});

                    // Generate PDF from the new div
                    html2pdf(content{{ $province }}, {
                        margin: 10,
                        filename: 'approved_applications_{{ strtolower($province) }}.pdf',
                        image: { type: 'jpeg', quality: 0.98 },
                        html2canvas: { scale: 2 },
                        jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' },
                    });
                });
            });
        </script>
    @endforeach

</body>
</html>
@endsection
