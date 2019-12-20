<html>
<head>
  <title>From</title>
</head>
<body>
<div>
  <ul>
  <!-- @foreach($errors->all() as $e)
  <li>{{$e}}</li>
  @endforeach -->
  </ul>
</div>
<form action="usercontroller" method="POST">
@csrf
<input type="text" name="user" placeholder="user">
@error('user')
  <div>{{$message}}</div>
  @enderror
<br> <br>
  <input type="text" name="email" placeholder="email">
  @error('email')
  <div>{{$message}}</div>
  @enderror
  <br><br>
  <button type="submit">Submit</button>
  </form>
</body>
</html>