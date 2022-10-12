{include file="head.tpl" }
<div class="formAddEdit">
    <form action="{$action}" method="POST" enctype="multipart/form-data">

        <label>Nombre de casa: </label>
        <input type="text" {if $house != null} value="{$house->nombre_casa}" {/if} name="nameHouse">

        <label>Escudo de la casa:</label>
        <input type="file" name="shield">

        <label>Fundador: </label>
        <input type="text" {if $house != null} value="{$house->fundador}" {/if} name="founder">

        <label>Colores: </label>
        <input type="text" {if $house != null} value="{$house->colores}" {/if} name="colors">

        <label>Simbolo: </label>
        <input type="text" {if $house != null} value="{$house->simbolo}" {/if} name="symbol">
        <div>
            <button type="submit">
                {if $house != null} Agregar cambios {else} Agregar casa {/if}
            </button>
        </div>
    </form>
</div>
{include file="foot.tpl" }