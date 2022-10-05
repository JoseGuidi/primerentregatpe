{include file="head.tpl"}
<img src="images/login.jpg" alt="Logo WikiPotter">
<div class="login">
  <form method="post" action="admin">
    <!-- Email input -->
    <div class="form-outline">
      <label class="form-label" name="user">Usuario:</label>
      <input type="text" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" name="password" />
    </div>
    <button class="btnLogIn" type="submit" class="btn btn-outline-primary">Log In</button>
  </form>
</div>
{include file="foot.tpl"}