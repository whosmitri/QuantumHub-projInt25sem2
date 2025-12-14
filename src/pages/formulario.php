<form action="salvar_formulario.php" method="POST">
    <label>Área de interesse:</label>
    <select name="area">
        <option>Desenvolvimento</option>
        <option>Dados</option>
        <option>Cibersegurança</option>
        <option>Mobile</option>
        <option>Marketing</option>
        <option>Cloud</option>
    </select>

    <label>Nível:</label>
    <select name="nivel">
        <option>Iniciante</option>
        <option>Intermediário</option>
        <option>Avançado</option>
    </select>

    <label>Objetivo:</label>
    <input type="text" name="objetivo">

    <button type="submit">Enviar</button>
</form>