{include file="head.tpl" }
<form action="editChar/{$char->id}" method="POST">

    <label>Nombre: </label>
    <input type="text" value="{$char->nombre}" name="name">

    <label>Casa: </label>
    <select  name="idHouse">
            <option value="" selected disabled hidden>{$houseOfChar->nombre_casa}</option>
        {foreach from=$houses item=$house}
            <option value="{$house->id}">{$house->nombre_casa}</option>
        {/foreach}
    </select>

    <label>Rol: </label>
    <input value="{$char->rol}" type="text" name="role">

    <label>Nucleo varita: </label>
    <input value="{$char->nucleo_varita}" type="text" name="core">
    <button type="submit">Agregar cambios</button>
</form>
{include file="foot.tpl" }