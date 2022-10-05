{include file="head.tpl" }
<form action="editHouse/{$house->id}" method="POST">
    
    <label>Nombre de casa: </label>
    <input type="text" value="{$house->nombre_casa}" name="nameHouse">
    
    <label>Fundador: </label>
    <input type="text" value="{$house->fundador}" name="founder">

    <label>Colores: </label>
    <input type="text" value="{$house->colores}" name="colors">
    
    <label>Simbolo: </label>
    <input type="text" value="{$house->simbolo}" name="symbol">
    <button type="submit">Agregar cambios</button>
</form>
{include file="foot.tpl" }