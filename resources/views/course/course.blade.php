<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Course Registration </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #ffffff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }


        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        #submit {
            background-color: #008CBA; /* Green */
            border: none;
            color: white;
            width: 150px;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="flex-center position-ref full-height">

    <div class="top-right links">



        <a href="">Student Registration</a>
        <a href="">Instructor Registration</a>
        <a href="">Course Registration</a>


    </div>

    <div>

        <br>
        <br>
        <h2>Course Registration</h2>

        <form action="{{ route('course.store') }}" method ="POST">
            @csrf

            <label for = "CourseName">Course name: </label>
            <input type="text" class="form-control" name="coursename" required><br>

            <label for = "CourseCode">Course Code:</label>
            <input type="text" class="form-control" name="coursecode" required><br>

            <label for = "Enrollment">Enrollment Key: </label>
            <input type="text" class="form-control" name="enroll" required><br>

            <label for = "Lectrer">Lecturer Incharge:</label>
            <input type="text" required class="form-control" name="inLect"><br>

            <input type="submit"  id ="submit" align="center" value="Submit" onclick="">


        </form>
    </div>

</div>
</body>
</html>
