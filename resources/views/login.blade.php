@extends('layout')

@section('title', 'Giriş Yap')

@section('form')
<span style="padding-left: 90px; padding-bottom: 30px; font-size: 32px" class="padding-bottom--15"><b>Oturum Aç</b></span>
<form action="{{route('login.post')}}" method="POST" id="stripe-login">
    @csrf
  <div class="field padding-bottom--24">
    <label for="email">Email</label>
    <input type="email" name="email">
  </div>
  <div class="field padding-bottom--24">
    <div class="grid--50-50">
      <label for="password">Şifre</label>
      </div>
      <input type="password" name="password">
      </div>
      <div style="padding-right: 115px" class="reset-pass">
        <a href="{{route('forgot_my_password')}}">Şifremi Unuttum?</a><br>
      </div>
      <div class="field padding-bottom--24">
          <input type="submit" name="submit" value="Oturum Aç">
          </div>
</form>
@endsection
