@extends('layout')

@section('content')

    <!DOCTYPE html>
<html lang="">
<head>
    <style>
        a:link, a:visited {
            background-color: #008CBA;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: red;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <title></title>
</head>
<body style="margin-left: 400px; margin-right: 400px; margin-top: 100px">

<br>

<h1 class="title" style="text-align: center"> Below is the details of Assignment </h1>

<table>
    <tr>
        <td>StudentID: {{ $Assignment->sid }}</td>
    </tr>

    <tr>
        <td>Student Name: {{ $Assignment->sname }}</td>
    </tr>
    <tr>
        <td>Lecturer: {{ $Assignment->lecturer }}</td>
    </tr>
    <tr>
        <td>File Name: {{ $Assignment->file }}</td>
    </tr>
</table>

<br>
<p>

    <a href="assignments/{{ $Assignment->id }}/edit"> Edit Assignment </a>

</p>


@endsection

</body>
</html>
