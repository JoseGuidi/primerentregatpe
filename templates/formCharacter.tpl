{include file="head.tpl" }
<div class="formAddEdit">
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
        <div>
            <button type="submit">
                {if !empty($char)}Agregar cambios {else} Agregar personaje {/if}
            </button>
        </div>
    </form>
</div>
{include file="foot.tpl" }