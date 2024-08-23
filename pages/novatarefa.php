

<div class="main tarefas">

    <h3>Cadastrar novo hábito</h3>
    <form action="<?php echo URL ?>inserttarefa" method="POST" id="formularioNovaTarefa" class="my-5">

        <div class="mb-3">
            <label for="nome" class="form-label text-light">Nome da tarefa</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome da tarefa" name="nome" autofocus>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label text-light">Descricao da tarefa</label>
            <textarea type="text" class="form-control" id="descricao" placeholder="Digite o descricao da tarefa" name="descricao" autofocus></textarea>
        </div>
        <div class="mb-3">
            <label for="data" class="form-label text-light">Data da tarefa</label>
            <input type="date" class="form-control" id="data" placeholder="Digite o data da tarefa" name="data" autofocus>
        </div>

        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Enviar">
        </div>
    </form>
</div>