{include file="head.tpl" }
<form action="editHouse/{$id}" method="POST">
    
    <label>Nombre de casa: </label>
    <input type="text" name="nameHouse">
    
    <label>Fundador: </label>
    <input type="text" name="founder">

    <label>Colores: </label>
    <input type="text" name="colors">
    
    <label>Simbolo: </label>
    <input type="text" name="symbol">
    <button type="submit">Agregar cambios</button>
</form>
{include file="foot.tpl" }