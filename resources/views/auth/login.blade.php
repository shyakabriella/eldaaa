<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
</head>

<style>
  
@import url(https://fonts.googleapis.com/css?family=Roboto:500&display=swap);
body {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  font-family: "Roboto", sans-serif;
  background-color: #D6D8D5;
  overflow: hidden;
}

.table {
  display: table;
  width: 100%;
  height: 100%;
}

.table-cell {
  display: table-cell;
  vertical-align: middle;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.container {
  position: relative;
  width: 600px;
  margin: 30px auto 0;
  height: 320px;
  background-color: #1E797C;
  top: 50%;
  margin-top: -160px;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  border-radius: 10px;
}
.container .box {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.container .box:before, .container .box:after {
  content: " ";
  position: absolute;
  left: 152px;
  top: 50px;
  background-color: #E8CBC5;
  transform: rotateX(52deg) rotateY(15deg) rotateZ(-38deg);
  width: 300px;
  height: 285px;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.container .box:after {
  background-color: #E8CBC5;
  top: -10px;
  left: 80px;
  width: 320px;
  height: 180px;
}
.container .container-forms {
  position: relative;
}
.container .btn {
  cursor: pointer;
  text-align: center;
  margin: 0 auto;
  width: 60px;
  color: #fff;
  background-color: #ff73b3;
  opacity: 1;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.container .btn:hover {
  opacity: 0.7;
}
.container .btn, .container input {
  padding: 10px 15px;
}
.container input {
  margin: 0 auto 15px;
  display: block;
  width: 220px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.container .container-forms .container-info {
  text-align: left;
  font-size: 0;
}
.container .container-forms .container-info .info-item {
  text-align: center;
  font-size: 16px;
  width: 300px;
  height: 320px;
  display: inline-block;
  vertical-align: top;
  color: #fff;
  opacity: 1;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.container .container-forms .container-info .info-item p {
  font-size: 20px;
  margin: 20px;
}
.container .container-forms .container-info .info-item .btn {
  background-color: transparent;
  border: 1px solid #fff;
}
.container .container-forms .container-info .info-item .table-cell {
  padding-right: 35px;
}
.container .container-forms .container-info .info-item:nth-child(2) .table-cell {
  padding-left: 35px;
  padding-right: 0;
}
.container .container-form {
  overflow: hidden;
  position: absolute;
  left: 30px;
  top: -30px;
  width: 305px;
  height: 380px;
  background-color: #fff;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.container .container-form:before {
  content: "✔";
  position: absolute;
  left: 160px;
  top: -50px;
  color: #5356ad;
  font-size: 130px;
  opacity: 0;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.container .container-form .btn {
  position: relative;
  box-shadow: 0 0 10px 1px #ff73b3;
  margin-top: 30px;
}
.container .form-item {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 1;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  
}
.container .form-item.sign-up {
  position: absolute;
  left: -100%;
  opacity: 0;
}
.container.log-in .box:before {
  position: absolute;
  left: 180px;
  top: 62px;
  height: 265px;
}
.container.log-in .box:after {
  top: 22px;
  left: 192px;
  width: 324px;
  height: 220px;
}
.container.log-in .container-form {
  left: 265px;
}
.container.log-in .container-form .form-item.sign-up {
  left: 0;
  opacity: 1;
}
.container.log-in .container-form .form-item.log-in {
  left: -100%;
  opacity: 0;
}
.container.active {
  width: 260px;
  height: 140px;
  margin-top: -70px;
}
.container.active .container-form {
  left: 30px;
  width: 200px;
  height: 200px;
}
.container.active .container-form:before {
  content: "✔";
  position: absolute;
  left: 51px;
  top: 5px;
  color: #5356ad;
  font-size: 130px;
  opacity: 1;
}
.container.active input, .container.active .btn, .container.active .info-item {
  display: none;
  opacity: 0;
  padding: 0px;
  margin: 0 auto;
  height: 0;
}
.container.active .form-item {
  height: 100%;
}
.container.active .container-forms .container-info .info-item {
  height: 0%;
  opacity: 0;
}
.container .container-form{
    border-radius: 10px;
}
.container .btn {
    cursor: pointer;
    text-align: center;
    margin: 0 auto;
    width: 60px;
    color: #fff;
    background-color: #e649a5;
    border: 1px solid #e649a5;
    opacity: 1;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .container .btn:hover {
    opacity: 0.7;
    background-color: #ff73b3;
    border-color: #ff73b3;
  }
  
</style>
<body>
<div class="container">
  
<form method="POST" action="{{ route('login') }}" role="form" class="text-start">
@csrf
    <div class="container-forms">
      <div class="container-info">
        <div class="info-item">
          <div class="table">
            <div class="table-cell">
              <p>
                Have an account?
              </p>
              <div class="btn">
                Log in
              </div>
            </div>
          </div>
        </div>
        <div class="info-item">
          <div class="table">
            <div class="table-cell">
              <p>
                Wellecome to TB info Dashboard 
              </p>
              <div class="btn">
                  Staff only
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-form">
        <div class="form-item log-in">
          <div class="table">
            <div class="table-cell">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Username" required  />
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password" required/>
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              
              <button type="submit" class="btn">
                Log in
</button>
            
            </div>
          </div>
        </div>
        </form>
       
      </div>

    </div>
  </div>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script>
      $(".info-item .btn").click(function(){
    $(".container").toggleClass("log-in");
  });
  $(".container-form .btn").click(function(){
    $(".container").addClass("active");
  });
    </script>
</body>
</html>

