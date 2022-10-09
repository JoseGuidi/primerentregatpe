{include file="head.tpl" }
<form action="{$action}" method="POST">

    <label>Nombre: </label>
    <input type="text" {if !empty($char)} value="{$char->nombre}" {/if} name="name">


    <label>Casa: </label>
    <select name="idHouse">
        {if !empty($char)}
            <option selected hidden>{$houseOfChar->nombre_casa}</option> 
        {/if}
        {foreach from=$houses item=$house}
            <option value="{$house->id}">{$house->nombre_casa}</option>
        {/foreach}
    </select>

    <label>Rol: </label>
    <input {if !empty($char)}value="{$char->rol}" {/if} type="text" name="role">

    <label>Nucleo varita: </label>
    <input {if !empty($char)}value="{$char->nucleo_varita}" {/if} type="text" name="core">
    <button type="submit">Agregar cambios</button>
</form>
{include file="foot.tpl" }