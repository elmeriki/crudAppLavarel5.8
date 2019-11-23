<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud Application with Laravel | Crude </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="/">MY CRUD APP</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="/">Signup</a></li>
      <li><a href="/update">Update Account</a></li>
      <li  class="active" ><a href="/delete">Delete User</a></li>
      <li><a href="/fetchAll">View Register Users</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>SIMPLE CRUP APPLICATION</h3>
  <p>Pine Valley Institute (PVI)  courses provide prospective students with an opportunity to gain skills and knowledge in the domains of  Computer Programming, Networking, Database Administration and other related ICT Courses.
</p>
</div>


<div class="container">

    <fieldset>
<legend>Delete your  Profile</legend>

<form action="/deleteuser" method="post">
    @csrf
<input type="number" placeholder="Enter ID to Delete" name="id">
<input type="submit" value="Delete">
</form>
    </fieldset>

  </div>

</body>
</html>
