{include file="head.tpl"}

<img src="images/login.png" alt="Logo WikiPotter">
{if !$isLogged}
  <div class="login">
    <form method="post" action="validate">

      <div class="form-outline">
        <label class="form-label">Usuario:</label>
        <input type="text" name="username" class="form-control" />
      </div>


      <div class="form-outline">
        <label class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" />
      </div>
      <button class="btnLogIn" type="submit" class="btn btn-outline-primary" >Log In</button>
    </form>
    {if $error}
      <div class="alert alert-danger" role="alert">
        Usuario o contraseña incorrecta, intente de nuevo.
      </div>
    {/if}
  </div>
{else}
  <h1 class="logeado"> Estas logueado como administrador </h1>
{/if}

{include file="foot.tpl"}