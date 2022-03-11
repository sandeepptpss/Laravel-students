<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student details</title>
</head>
<body>
<div class="">
<h2>Add Student Details</h2>

<form action="{{route('add-student')}}" method="POST">
@csrf
<input type="text" class="custom-form-name" name="name" value="name" placeholder="Name">
<br>
<br>
<input type="email" class="custom-form-email" name="email" value="email" placeholder="Email">
<br>
<br>
<input type="text" class="custom-form-branch" name="branch" value="branch" placeholder="Branch">
<br>
<br>
<input type="text" class="custom-form-phone" name="phone" value="phone" placeholder="Phone Number">
<br>
<br>
<input type="text" class="custom-form-address" name="address" value="address" placeholder="Address">
<br>
<br>
<button type="submit" class="btn btn-dark btn-block">Add Student</button>
<br>
<a href="/index">View</a>
<br>
<a href="#" class="btn btn-primary btn-sm">Edit</a>
                            
          
</form>
</div>
</body>
</html>