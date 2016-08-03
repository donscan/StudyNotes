<form  action="/auth/login" method="post">
  {!! csrf_field() !!}
  <div class="">
    Email
    <input type="emial" name="email" value="{{ old('emial') }}">
  </div>
  <div class="">
    Password
    <input type="password" name="password" id="password">
  </div>
  <div class="">
    <input type="checkbox" name="remember" value="">Remember Me
  </div>
  <div class="">
    <button type="submit" name="button">Login</button>
  </div>
</form>
