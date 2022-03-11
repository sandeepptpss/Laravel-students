<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
</head>
<body>
  <form action="/edit" method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="text" class="custom-form-name" name="name" value="{{$data['name']}}" placeholder="Name">
<br>
<br>
<input type="email" class="custom-form-email" name="email" value="{{$data['email']}}" placeholder="Email">
<br>
<br>
<input type="text" class="custom-form-branch" name="branch" value="{{$data['branch']}}" placeholder="Branch">
<br>
<br>
<input type="text" class="custom-form-phone" name="phone" value="{{$data['phone']}}" placeholder="Phone Number">
<br>
<br>
<input type="text" class="custom-form-address" name="address" value="{{$data['address']}}" placeholder="Address">
<br>
<br>
<button type="submit" class="btn btn-dark btn-block">Update</button>
<br>
<a href="/index">View</a>
<br>
</form>
</body>
</html>