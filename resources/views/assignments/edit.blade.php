@extends('layout')

@section('content')

    <div class="container" >


    <form style="margin-left: 400px; margin-right: 400px; margin-top: 100px" method="POST" action="/assignments/{{ $assignments->id }}">

        <h1 class="title" style="text-align: center"> Edit Assignment </h1>

        @method('PATCH')
        @csrf


        <div class="field">

            <label class="lable" for="name">Student ID </label>

            <div class="control">

                <input type="text" class="input" name="sid" placeholder="" value="{{ $assignments->sid }}" required>

            </div>

        </div>

        <div class="field">

            <label class="lable" for="sport">Student Name </label>

            <div class="control">

                <input type="text" class="input" name="sname" placeholder="" value="{{ $assignments->sname }}" required>


            </div>

        </div>
        <div class="field">

            <label class="lable" for="sport">Lecturer </label>

            <div class="control">

                <input type="text" class="input" name="lecturer" placeholder="" value="{{ $assignments->lecturer }}" required>


            </div>

        </div>
        <div class="field">

            <label class="lable" for="sport">File Name </label>

            <div class="control">

                <input type="text" class="input" name="file" placeholder="" value="{{ $assignments->file }}" required>


            </div>

        </div>


        <div class="field">

            <div class="control">

                <button style="width: 100%" type="submit" class="button is-link">Update Assignment</button>

            </div>

        </div>

    </form>

    <form style="margin-left: 400px; margin-right: 400px; margin-top: 10px" method="POST" action="/assignments/{{ $assignments->id }}">

        @method('DELETE')
        @csrf


        <div class="field">

            <div class="control">

                <button style="width: 100%" type="submit" class="button is-link">Delete Assignment</button>

            </div>

        </div>

    </form>

    </div>
@endsection

