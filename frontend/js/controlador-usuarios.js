var usuario = null;


 //------------------------------------------------------------------------------------------------------------------------- 


function login () {
    // LOGIN FORM
    var data = new FormData(document.getElementById("loginForm"));
    
    // AJAX FETCH
    fetch("../../backend/api/verificar.php", { method:"POST", body:data })
    .then((res) => {
      if (res.status==200) { return res.text(); }
      else { alert(`Server error - ${res.status}`); }
    })
    .then((jwt) => {
      if (jwt=="NO") { alert("Invalid user/password "); }
      else {
  
        // generar cookie
        let expire = new Date();
        expire.setTime(expire.getTime() + (3600000)); // 1 HR FROM NOW
        document.cookie = `user=${jwt};expires=${expire.toUTCString()}`;
        alert("Good to go!");
        window.location.href = "/frontend/html/panel.php";
      }
    });
    return false;
  }

 //------------------------------------------------------------------------------------------------------------------------- 

  function create () {
    event.preventDefault();
    // (A) CREATE FORM
    var data = new FormData(document.getElementById('register'));
  
    // (B) AJAX FETCH
    fetch("../../backend/api/create.php", { method:"POST", body:data })
    .then((res) => {
      if (res.status==200) {
      alert('registro creado satisfactoriamente');
      }
      else {alert('no se pudo crear el registro'); }
    }).then((jwt) => {
      if (jwt=="NO") { alert("Invalid user/password "); }
      else {
        // generar cookie
        let expire = new Date();
        expire.setTime(expire.getTime() + (3600000)); // 1 HR FROM NOW
        document.cookie = `user=${jwt};expires=${expire.toUTCString()}`;
        alert("Good to go!");
        window.location.href = "/frontend/html/panel.php";
      }
    });
    return false;
  }

 //------------------------------------------------------------------------------------------------------------------------- 

    // get token
    const micookie_ = () =>{
      var miscookies = document.cookie;
      var listaCookies = miscookies.split(";");
      for (i in listaCookies) {
        busca = listaCookies[i].search("user");
        }
        igual = miscookies.indexOf("=");
        valor = miscookies.substring(igual+1);
      return valor;
      }


  //-------------------------------------------------------------------------------------------------------------------------    

  function form_update() {

    var formulario = document.getElementById('contenido');
    formulario.innerHTML = ``;

      const data = new FormData();
    
      data.append('user',micookie_());
  
    // (B) AJAX FETCH
    fetch("../../backend/api/datos_cargar.php", { method:"POST", body:data})
    .then(response => response.text())
    .then(data => {

      usuario = JSON.parse(data);
      
      formulario.innerHTML += editar_usuario(usuario['nombre'],usuario['mail'],usuario['username'],usuario['contraseña']);
         

    });
  };

 //------------------------------------------------------------------------------------------------------------------------- 

  function update () {

    event.preventDefault();

        if(micookie_() != "" ){

      const data = new FormData(document.getElementById('form-actualizar-user'));
     
      data.append('id',usuario['id']);
  
      //AJAX FETCH
      fetch("../../backend/api/editar-usuario.php", { method:"POST", body:data })
      .then((res) => {
        if (res.status==200) {
        alert('registro editado satisfactoriamente ahora puede ingresar');
        }
      });
      return false;
    }else{
      alert('su sesion ya ha expirado');
    }
  };


  //-------------------------------------------------------------------------------------------------------------------------

  var logout = function() {

        var jwt = micookie_();
        // generar cookie
        document.cookie = `user=${jwt}; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
        alert("cookie expired");
        window.location.href = "/homepage.html";
  }