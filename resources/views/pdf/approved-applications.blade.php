<!-- resources/views/pdf/approved-applications.blade.php -->
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

</head>
<body>
  
    <h1>Approved Applications</h1>
    <a href="{{ route('applications.generate-approved-pdf') }}" class="btn btn-primary">Download Approved Applications PDF</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>National Id</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Ubudehe</th>
                <th>Asset</th>
                <th>Education</th>
                <th>Disability</th>
                <th>Disease</th>
             
                <!-- Add other columns as needed -->
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($applications as $application)
                <tr class="show">
                    <td>{{ ++$i }}</td>
                    <td>{{ $application->name }}</td>
                    <td>{{ $application->nid }}</td>
                    <td>{{ $application->phone }}</td>
                    <td>{{ $application->gender }}</td>
                   
                    <td>{{ $application->village }}</td>
                    <td>{{ $application->ubudehe }}</td>
                    <td>{{ $application->asset }}</td>
                    <td>{{ $application->education }}</td>
                    <td>{{ $application->disability }}</td>
                  
                    <!-- Add other columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach((row, index) => {
                setTimeout(() => {
                    row.classList.add('show');
                }, index * 100); // Adjust the delay as needed
            });
        });
    </script>

</body>
</html>
@endsection
