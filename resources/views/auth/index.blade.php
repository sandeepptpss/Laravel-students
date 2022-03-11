<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
    </style>
</head>
<body>
<h2>Show Student  Details</h2>
<table style="width:90%">
  <tr>
    <th>S.Id</th>
    <th> Name</th> 
    <th>Email</th>
    <th> Branch</th>
    <th>Phone</th>
    <th>Address</th>
  </tr>
  @foreach ($students as $student)
 
  <tr>
    <td>{{$student['id']}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->email }}</td>
    <td>{{ $student->branch }}</td>
    <td>{{$student->phone}}</td>
    <td>{{$student->address}}</td>
    <td>
    <a href={{"delete/".$student['id']}}> Delete</a>
    <a href={{"edit/".$student['id']}}> Edit</a>
   
    </td>
  </tr>
  @endforeach
</table>
<a href="/student">Add Student</a>

</body>
</html>