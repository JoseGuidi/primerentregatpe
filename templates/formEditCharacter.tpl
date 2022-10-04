{include file="head.tpl" }
<form action="editChar/{$id}" method="POST">

    <label>Nombre: </label>
    <input type="text" name="name">

    <label>Casa: </label>
    <select name="idHouse">
        {foreach from=$houses item=$house}
            <option value="{$house->id}">{$house->nombre_casa}</option>
        {/foreach}
    </select>

    <label>Rol: </label>
    <input type="text" name="role">

    <label>Nucleo varita: </label>
    <input type="text" name="core">
    <button type="submit">Agregar cambios</button>
</form>
{include file="foot.tpl" }