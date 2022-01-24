// formulario para editar usuario


function editar_usuario(name,mail,username,password){
return `
<div class="content-container row">
    <div class="content">
      <form class="form-container" id="form-actualizar-user" onsubmit="return update ()">

        <div class="title">
          <span>Tus Datos</span>
        </div>

        <div class="inputs-container">

          <div class="row">
            <div class="left">
              <label>Nombre:</label>
            </div>
            <div class="right">
              <input class="input" type="text" value="${name}" name='name' />
              <a>Cambiar nombre</a>
            </div>
          </div>

          <div class="row">
            <div class="left">
              <label>mail:</label>
            </div>
            <div class="right">
              <input class="input" type="mail" value="${mail}" name='mail' />
              <a>Cambiar mail</a>
            </div>
          </div>

          <div class="row">
            <div class="left">
              <label>username:</label>
            </div>
            <div class="right">
              <input class="input" type="text" value="${username}" name='username'/>
              <a>Cambiar username</a>
            </div>
          </div>

          <div class="row">
            <div class="left">
              <label>contraseña:</label>
            </div>
            <div class="right">
              <input class="input" type="password" value="${password}" name='password' />
              <a>Cambiar password</a>
            </div>
          </div>

          <div class="button-container" type='submit'>
            <button>Actualizar</button>
          </div>

        </div>

      </form>
    </div>
  </div>

`

}