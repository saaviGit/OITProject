@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="">
<head>

    <title></title>
</head>
<style>


</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="margin-left: 500px; margin-top: 100px;">
            <br>
            <h1 class="title">Assignments Table</h1>

            @foreach ($assignments as $Assignment)
                <br/>
                <table style="margin-left: 50px;">
                    <tr>
                        <td>
                            <a style="color: black" href="{{ url('/show/') }}">

                                        {{ $Assignment->id}}
                                        {{ $Assignment->sname}}
                            </a>
                        </td>
                        <td>
                            <a style=" padding: 5px;" href="assignments/{{ $Assignment->id }}/edit">Edit Assignment</a>
                        </td>
                    </tr>
                </table>
            @endforeach

            <br/>
            <form action="{{ route('assignments.create') }}">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link" style="margin-left: 35px">Create New Assignment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


@endsection
