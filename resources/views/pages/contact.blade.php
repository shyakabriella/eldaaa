@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width:50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
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
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="/selfpage.php" method="POST">

    <input type="text" id="fname" name="name" placeholder="Your name.."><br>
    <input type="text" id="lname" name="email" placeholder="Your email.."><br>
    <textarea id="subject" name="content" placeholder="Write something.." style="height:200px"></textarea> <br>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

@endsection
