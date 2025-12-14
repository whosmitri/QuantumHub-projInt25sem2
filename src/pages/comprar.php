<?php $curso = $_GET['curso']; ?>

<h1>Finalizar Compra</h1>
<p>Você está comprando: <strong><?= htmlspecialchars($curso) ?></strong></p>

<form>
    <label>Nome completo</label>
    <input type="text">

    <label>Cartão</label>
    <input type="text">

    <button>Finalizar</button>
</form>