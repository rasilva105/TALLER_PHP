<form method="post" action="../controllers/acronimo_controller.php">
    <input type="text" name="frase" placeholder="Ingrese frase">
    <button type="submit">Convertir</button>
</form>

<?php if(isset($resultado)) echo $resultado; ?>