<form class="" action="/auth/register" method="POST">
  { !! csrf_field() !!}
  <div>
    User Name
    <input type="text" name="name" value="{{old('name')}}">
  </div>
  <div>
    Email
    <input type="email" name="email" value="{{old('email')}}">
  </div>
  <div>
    Passwd
    <input type="password" name="password" >
  </div>
  <div>
     Config_password
     <input type="password" name="password_confiramation" >
  </div>
  <div>
    <button type="submit">Register</button>
  </div>
</form>
