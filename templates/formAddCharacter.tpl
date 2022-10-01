{include file="head.tpl" }
<form action="addChar" method="POST">

    <label>Nombre: </label>
    <input type="text" name="name">

    <label>Casa: </label>
    <select name="idHouse">
        {foreach from=$allHouses item=$house}
            <option value="{$house->id}">{$house->nombre_casa}</option>
        {/foreach}
    </select>

    <label>Rol: </label>
    <input type="text" name="role">

    <label>Nucleo varita: </label>
    <input type="text" name="core">
    <button type="submit">Agregar</button>
</form>
{include file="foot.tpl" }