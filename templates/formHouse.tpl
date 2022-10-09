{include file="head.tpl" }
<form action="{$action}" method="POST">
    
    <label>Nombre de casa: </label>
<input type="text" {if $house != null} value="{$house->nombre_casa}" {/if} name="nameHouse">
    
    <label>Fundador: </label>
    <input type="text" {if $house != null} value="{$house->fundador}" {/if} name="founder">

    <label>Colores: </label>
    <input type="text" {if $house != null} value="{$house->colores}" {/if} name="colors">
    
    <label>Simbolo: </label>
    <input type="text" {if $house != null} value="{$house->simbolo}"  {/if} name="symbol">
    <button type="submit">
        {if $house != null}  Agregar cambios {else} Agregar casa {/if}
    </button>
</form>
{include file="foot.tpl" }