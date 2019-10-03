<!DOCTYPE html>
<html lang="">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <title></title>

</head>
<body>

<div class="container" style="margin-left: 400px; margin-right: 400px; margin-top: 100px">

    <h1 style="text-align: center">Create New Assignment</h1>

    <form method="POST" action="{{ route('assignments.store') }}">

        {{ csrf_field() }}

        <div>
            <label >Student ID :</label>
            <input type="text" name="sid" placeholder="Student ID" required>

        </div>
        <div>
            <label >Student Name :</label>
            <input type="text" name="sname" placeholder="Student name" required>

        </div>
        <div>
            <label >Lecturer of the module :</label>
            <input type="text" name="lecturer" placeholder="Lecturer" required>

        </div>
        <div>
            <label >File Name :</label>
            <input type="text" name="file" placeholder="file name....." required>

        </div>
        <div>

            <input type="submit" value="SUBMIT" style="background-color: #008CBA; width: 100%">

        </div>

    </form>

</div>

</body>
</html>
