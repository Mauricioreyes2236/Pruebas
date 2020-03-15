<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Altas Artesanos</title>
</head>
    <style>
      html, body {
        background-color: #fff;
        /* color: #636b6f*/
        font-family: "Century Gothic";
        font-weight: 200;
        height: 100vh;
        margin: 0;
      }
    </style>
<body>
<form class="content" action="{{route('regusuario')}}" method="post">
      @csrf
      <center><table>
      <h1>REGISTRO DE ARTESANO</h1>
      Nombre(s):<input type="text" name="Nombre" onblur="fieldSize1()" id="nombre" pattern="[a-zA-Z]+" placeholder="Nombre(s)">
      <p id="error1"></p>
      Apellido Paterno: <input type="text" name="APP" onblur="fieldSize2()" id="app" pattern="[a-zA-Z]+" placeholder="Apellido Paterno">
      <p id="error2"></p>
      Apellido Materno: <input type="text" name="APM" onblur="fieldSize3()" id="apm" pattern="[a-zA-Z]+" placeholder="Apellido Materno">
      <p id="error3"></p>
      Telefono: <input type="text" name="Telefono" onblur="fieldSize6()" id="telefono" pattern="[0-9]+" placeholder="Teléfono">
      <p id="error6"></p>
      <!-- <input type="text" name="Celular" onblur="fieldSize7()" id="celular" pattern="[0-9]+" placeholder="Celular"> -->
      <!-- <p id="error7"></p> -->
      Email: <input type="text" name="Email" onblur="fieldSize8()" id="email" pattern="[a-zA-Z0-9\/.*@]+" placeholder="Email">
      <p id="error8"></p>
      <!-- <input type="password" name="Contraseña" onblur="fieldSize9()" id="password" pattern="[a-zA-Z0-9]+" placeholder="Contraseña"> -->
      <!-- <p id="error9"></p> -->
      <input type="submit" value="Registrar" >
      </center>
      </table>
    </form>

    <script type="text/javascript">
    const $input1 = document.querySelector("#nombre");
    const patron1 = /[a-zA-Z]+/;

    $input1.addEventListener("keydown", event => {
      if (patron1.test(event.key)){
        document.getElementById('nombre').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize1() {
      var nom = document.getElementById('nombre').value;
      if (nom.length>=3 && nom.length<=30) {
        document.getElementById('error1').innerHTML = "";
      }
      else {
        document.getElementById('error1').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('nombre').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input2 = document.querySelector("#app");
    const patron2 = /[a-zA-Z]+/;

    $input2.addEventListener("keydown", event => {
      if (patron2.test(event.key)){
        document.getElementById('app').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize2() {
      var apellido = document.getElementById('app').value;
      if (apellido.length>=5 && apellido.length<=30) {
        document.getElementById('error2').innerHTML = "";
      }
      else {
        document.getElementById('error2').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('app').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input3 = document.querySelector("#apm");
    const patron3 = /[a-zA-Z]+/;

    $input3.addEventListener("keydown", event => {
      if (patron3.test(event.key)){
        document.getElementById('apm').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize3() {
      var apm = document.getElementById('apm').value;
      if (apm.length>=5 && apm.length<=30) {
        document.getElementById('error3').innerHTML = "";
      }
      else {
        document.getElementById('error3').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('apm').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input4 = document.querySelector("#fn");
    const patron4 = /[0-9\/]+/;

    $input4.addEventListener("keydown", event => {
      if (patron4.test(event.key)){
        document.getElementById('fn').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize4() {
      var fn = document.getElementById('fn').value;
      if (fn.length>=10 && fn.length==10) {
        document.getElementById('error4').innerHTML = "";
      }
      else {
        document.getElementById('error4').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('fn').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input5 = document.querySelector("#genero");
    const patron5 = /[F]|[M]/;

    $input5.addEventListener("keydown", event => {
      if (patron5.test(event.key)){
        document.getElementById('genero').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize5() {
      var genero = document.getElementById('genero').value;
      if (genero==F && genero==M) {
        document.getElementById('error5').innerHTML = "";
      }
      else {
        document.getElementById('error5').innerHTML = "Error: Selecciona una opción.";
        document.getElementById('genero').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input6 = document.querySelector("#telefono");
    const patron6 = /[0-9]+/;

    $input6.addEventListener("keydown", event => {
      if (patron6.test(event.key)){
        document.getElementById('telefono').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize6() {
      var tel = document.getElementById('telefono').value;
      if (tel.length>=10 && tel.length<=16) {
        document.getElementById('error6').innerHTML = "";
      }
      else {
        document.getElementById('error6').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('telefono').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input7 = document.querySelector("#celular");
    const patron7 = /[0-9]+/;

    $input7.addEventListener("keydown", event => {
      if (patron7.test(event.key)){
        document.getElementById('celular').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------

    </script>

    <script type="text/javascript">
    const $input8 = document.querySelector("#email");
    const patron8 = /[a-zA-Z0-9\/.*@]/;

    $input8.addEventListener("keydown", event => {
      if (patron8.test(event.key)){
        document.getElementById('email').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize8() {
      var email = document.getElementById('email').value;
      if (email.length>=10 && email.length<=30) {
        document.getElementById('error8').innerHTML = "";
      }
      else {
        document.getElementById('error8').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('email').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input9 = document.querySelector("#password");
    const patron9 = /[a-zA-Z0-9]+/;

    $input9.addEventListener("keydown", event => {
      if (patron9.test(event.key)){
        document.getElementById('password').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    </script>
</body>
</html>