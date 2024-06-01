@extends('layouts.master')

@section('title')
   Buat Akun Baru 
@endsection

@section('content')
    
<form action="/welcome" method="POST">
    @csrf
    <label>First name:</label><br>
    <input type="text"  name="fname"><br>
    <label>Last name:</label><br>
    <input type="text"  name="lname"> <br>
    <label for="other">Gender :</label> <br><br>
    <input type="radio" id="male" name="fav_language" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="famele" name="fav_language" value="Famele">
    <label for="famele">Famele</label><br>
    <input type="radio" id="other" name="fav_language" value="other">
    <label for="other">Other</label>

    <p>Nationality:</p>

    <select>
      <option> Indonesian </option>
      <option> Korea Selatan</option>
      <option> Cina</option>
  </select>

  <p>Languenge Spoken:</p>

      <input type="checkbox" name="Bahasa Indonesia" value="Bahasa Indonesia">
      <label for="vehicle1"> Bahasa Indonesia </label><br>
      <input type="checkbox" name="English" value="English">
      <label for="vehicle2"> English </label><br>
      <input type="checkbox"  name="Other" value="Other">
      <label for="vehicle2"> mandarin </label><br>
      <input type="checkbox"  name="Other" value="Other">
      <label for="vehicle3"> Other </label> 

      <p>Bio:</p>
      <textarea name="message" rows="10" cols="30"></textarea> <br>
    <input type="submit" value="Sign Up">
  </form>
@endsection