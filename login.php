

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, inicial-scale=1.0"/>
  <title>Login</title>
    <link rel="stylesheet" href="cover.css">
    <style>
        @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Oswald|Roboto);
body {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  font-family: "Roboto", sans-serif;
  background-color: gray;
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
  background-color: black;
  top: 50%;
  margin-top: -160px;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
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
  background-color: gray;
  transform: rotateX(52deg) rotateY(15deg) rotateZ(-38deg);
  width: 300px;
  height: 285px;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.container .box:after {
  background-color:#d4bdd8;
  top: -10px;
  left: 80px;
  width: 320px;
  height: 180px;
}
.container .container-forms {
  position: relative;
}
.container .btn, 
.container .btn2
{ 
  cursor: pointer;
  text-align: center;
  margin: 0 auto;
  width: 80px;
  color: #fff;
  background-color: gray ;
  opacity: 1;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  
}
.container .btn2{
  width: 120px;
  text-align: center;
  border: 0;
}
.container .btn:hover {
  opacity: 0.7;
}
.container .btn, .container input {
  padding: 10px 15px;
  border-radius: 10px;
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
  color: #3db69c ;
  font-size: 130px;
  opacity: 0;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.container .container-form .btn {
  position: relative;
  margin-top: 30px;
  border: 0;
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
  color: #3db69c;
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

.rabbit {
  width: 50px;
  height: 50px;
  position: absolute;
  bottom: 20px;
  right: 20px;
  z-index: 3;
  fill: #fff;
}
div {
    border-radius: 10px;
}

    </style>

</head>
<body>

    <div class="container">
    <div class="box"></div>
    <div class="container-forms">
        <div class="container-info">
        <div class="info-item">
            <div class="table">
            <div class="table-cell">
               
                <p>
                Você tem uma conta?
                </p>
                <div class="btn">
                Entrar
                </div>
            </div>
            </div>
        </div>
        <div class="info-item">
            <div class="table">
            <div class="table-cell">
                <p>
                Você não tem uma conta?
                </p>
                <p>Volte e entre na página "Cadastro"</p>
            </div>
            </div>
        </div>
        </div>
        <div class="container-form">
        <div class="form-item log-in">
            <div class="table">
	    <div class="table-cell">

            <h2 style="text-align: center; color: gray; font-weight: bold;">Login</h2>
		    <form method="POST">
	                <input name="Username" placeholder="Nome" type="text" required/>
        	        <input name="Password" placeholder="Senha" type="Password" required/>

	     		    <input class="btn" type="submit" value="Entrar">

		    </form>

            </div>
            </div>
            </div>
            <div class="form-item sign-up">
            <div class="table">
	    <div class="table-cell">

		    <form method="POST" action="./assets/php/cadastrarUsuarios.php">
        	    <input name="email" placeholder="Email" type="text" required/>
        	    <input name="nome" placeholder="Nome" type="text" required/>          
        	    <input name="sobre" placeholder="Sobrenome" type="text" required/>
        	    <input name="Username" placeholder="Nome de usuário" type="text" required/>
        	    <input name="Password" placeholder="Senha" type="Password" required/>

        	    <input class="btn2" type="submit" value=" Cadastrar">

		    </form>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    

    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./includes/js/script.js"></script>

</body>
</html>