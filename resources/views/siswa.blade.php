@extends('layouts.main')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NISN</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Alfinanda Rangga</td>
      <td>0062542906</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Aan Fatkhurrohman</td>
      <td>0056273195</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Arya Endsha</td>
      <td>0066870052</td>
      <td>Karangan</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Aditya Dwi Purnomo</td>
      <td>0088178022</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Arkan Arya Reza</td>
      <td>0066870052</td>
      <td>Suruh</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Diaz Ibanez Kaka</td>
      <td>0064920982</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Apriza Wahyu Setiawan</td>
      <td>0053101195</td>
      <td>Pogalan</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Dimas Sunar Khalid</td>
      <td>0063837679</td>
      <td>Munjungan</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Erico Kurniawan</td>
      <td>0054332385</td>
      <td>Bendungan</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Bagas Dwi Cahyo</td>
      <td>0066034687</td>
      <td>Pule</td>
    </tr>
  </tbody>
</table>
@endsection


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </head>
   <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  /* user-select: none; */
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  height: 100%;
}
body{
  display: grid;
  place-items: center;
  background: #dde1e7;
  text-align: center;
}
.content{
  width: 330px;
  padding: 40px 30px;
  background: #dde1e7;
  border-radius: 10px;
  box-shadow: -3px -3px 7px #ffffff73,
               2px 2px 5px rgba(94,104,121,0.288);
}
.content .text{
  font-size: 33px;
  font-weight: 600;
  margin-bottom: 35px;
  color: #595959;
}
.field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}
.field:nth-child(2){
  margin-top: 20px;
}
.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  outline: none;
  border: none;
  font-size: 18px;
  background: #dde1e7;
  color: #595959;
  border-radius: 25px;
  box-shadow: inset 2px 2px 5px #BABECC,
              inset -5px -5px 10px #ffffff73;
}
.field input:focus{
  box-shadow: inset 1px 1px 2px #BABECC,
              inset -1px -1px 2px #ffffff73;
}
.field span{
  position: absolute;
  color: #595959;
  width: 50px;
  line-height: 50px;
}
.field label{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 45px;
  pointer-events: none;
  color: #666666;
}
.field input:valid ~ label{
  opacity: 0;
}
.forgot-pass{
  text-align: left;
  margin: 10px 0 10px 5px;
}
.forgot-pass a{
  font-size: 16px;
  color: #3498db;
  text-decoration: none;
}
.forgot-pass:hover a{
  text-decoration: underline;
}
button{
  margin: 15px 0;
  width: 100%;
  height: 50px;
  font-size: 18px;
  line-height: 50px;
  font-weight: 600;
  background: #dde1e7;
  border-radius: 25px;
  border: none;
  outline: none;
  cursor: pointer;
  color: #595959;
  box-shadow: 2px 2px 5px #BABECC,
             -5px -5px 10px #ffffff73;
}
button:focus{
  color: #3498db;
  box-shadow: inset 2px 2px 5px #BABECC,
             inset -5px -5px 10px #ffffff73;
}
.sign-up{
  margin: 10px 0;
  color: #595959;
  font-size: 16px;
}
.sign-up a{
  color: #3498db;
  text-decoration: none;
}
.sign-up a:hover{
  text-decoration: underline;
}
   </style>
   <body>
      <div class="content">
         <div class="text">
            Login Form
         </div>

         <div class="card-body">
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }} 
        </div>
            @endif
         <form action="{{ route('login') }}" method="POST">
          @csrf
            <div class="field">
               <input type="text" placeholder="" id="email" class="form-control" name="email" required autofocus>
               <span class="fas fa-user"></span>
               @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
               <label>Email or Phone</label>
            </div>

            {{-- <div class="form-group mb-3">
                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div> --}}

            <div class="field">
                <input type="password" placeholder="" id="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>

            {{-- <div class="form-group mb-3">
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div> --}}

            <div class="forgot-pass">
               <a href="#">Forgot Password?</a>
            </div>
            <button>Sign in</button>
            <div class="sign-up">
               Not a member?
               <a href="{{ route('register') }}">signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>