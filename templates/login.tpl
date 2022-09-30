{include file="head.tpl"}

<form method="post" action="admin" >
  <!-- Email input -->
  <div class="form-outline m-4">
    <input type="text"class="form-control" />
    <label class="form-label" name="user">Usuario:</label>
  </div>

  <!-- Password input -->
  <div class="form-outline m-4">
    <input type="password"  class="form-control" name="password"/>
    <label class="form-label" >Contraseña</label>
  </div>
  <button type="submit">Log In</button>
</form>

{include file="foot.tpl"}