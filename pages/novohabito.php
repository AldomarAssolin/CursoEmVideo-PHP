
<div class="main habito">

<h3>Cadastrar novo hábito</h3>
<form action="<?php echo URL ?>inserthabito" method="POST" id="formularioNovoHabito" class="my-5">

    <div class="mb-3">
        <label for="nome" class="form-label text-light">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite o hábito" name="nome" autofocus>
    </div>

    <div class="col-12">
        <input type="submit" class="btn btn-primary" value="Enviar">
    </div>
</form>
</div>