

<div class="container">

    <h3>Cadastrar nova tarefa</h3>
    <hr>
    <form action="<?php echo URL ?>inserttarefa" method="POST" id="formularioNovaTarefa" class="my-5 w-100">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome da tarefa</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome da tarefa" name="nome" autofocus>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descricao da tarefa</label>
            <textarea type="text" class="form-control" id="descricao" placeholder="Digite o descricao da tarefa" name="descricao" rows="5" style="resize:none"></textarea>
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data da tarefa</label>
            <input type="date" class="form-control" id="data" placeholder="Digite o data da tarefa" name="data" autofocus>
        </div>

        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <a href="<?php echo URL ?>tarefas" class="btn btn-primary m-5">Voltar</a>
        </div>
    </form>
    <hr>
</div>