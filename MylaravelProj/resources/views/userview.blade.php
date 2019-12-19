<html>
<head>
  <title>From</title>
</head>
<body>
<form action="usercontroller" method="POST">
<input type="text" name="user">
@csrf
<br> <br>
  <input type="text" name="email">
  <br><br>
  <button type="submit">Submit</button>
  </form>
</body>
</html>