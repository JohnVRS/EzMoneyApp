
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login & Registration Form</title>
      <!---Custom CSS File--->
      <style>

        /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body{
      min-height: 100vh;
      width: 100%;
      background: #009579;
    }
    .container{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      max-width: 430px;
      width: 100%;
      background: #fff;
      border-radius: 7px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.3);
    }
    .container .registration{
      display: none;
    }
    #check:checked ~ .registration{
      display: block;
    }
    #check:checked ~ .login{
      display: none;
    }
    #check{
      display: none;
    }
    .container .form{
      padding: 2rem;
    }
    .form header{
      font-size: 2rem;
      font-weight: 500;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .form input{
      height: 60px;
      width: 100%;
      padding: 0 15px;
      font-size: 17px;
      margin-bottom: 1.3rem;
      border: 1px solid #ddd;
      border-radius: 6px;
      outline: none;
    }

    

    .form button{
      height: 60px;
      width: 100%;
      padding: 0 15px;
      font-size: 17px;
      margin-bottom: 1.3rem;
      border: 1px solid #ddd;
      border-radius: 6px;
      outline: none;
    }
    
    .form input:focus{
      box-shadow: 0 1px 0 rgba(0,0,0,0.2);
    }
    .form a{
      font-size: 16px;
      color: #009579;
      text-decoration: none;
    }
    .form a:hover{
      text-decoration: underline;
    }
    .form button.button{
      color: #fff;
      background: #009579;
      font-size: 1.2rem;
      font-weight: 500;
      letter-spacing: 1px;
      margin-top: 1.7rem;
      cursor: pointer;
      transition: 0.4s;
    }
    .form button.button:hover{
      background: #006653;
    }
    .signup{
      font-size: 17px;
      text-align: center;
    }
    .signup label{
      color: #009579;
      cursor: pointer;
    }
    .signup label:hover{
      text-decoration: underline;
    }

    input.gender {
      width: 7%;
      height: 15px;
      font-size: 17px;
      margin-bottom: 1.3rem;
      border: 1px solid #ddd;
      outline: none;
      left: 0%;
      top: 0%;

      margin: 0;
      margin-bottom: 10px;
      padding-right: 7px; 
    }

  </style>
</head>
<body>

    @if($mensagem = Session::get('erro'))
        {{ $mensagem }}
    @endif

    @if ($errors->any())
        @foreach($errors->all() as $error)
            {{ $error}} <br>
        @endforeach
    @endif


  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="{{ route('login.auth') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <a href="#">Forgot password?</a>
        <button type="submit" class="button"> Login </button>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Create a password">
        <input type="tel" name="phone" placeholder="Phone number">
        <label for="gender">Gender</label>
        <input type="checkbox" name="gender" id="male" class="gender" value="1">Male
        <input type="checkbox" name="gender" id="female" class="gender" value="2">Female
        <input type="date" name="birth" placeholder="Birth">
        
        <button type="submit" class="button">Singup</button>

      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>

