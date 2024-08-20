


<h1>Formulários PHP</h1>

<form action="<?php echo URL?>pages/valor.php" method="get" class="my-5">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label text-light">Nome</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome" name="nome">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label text-light">Ano de Nascimento</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o ano de nascimento" name="ano_nasc">
</div>

<fieldset class="text-light my-3">
    <legend>Sexo</legend>
    <label for="masc">Masculino</label>
    <input type="radio" name="sexo" id="masc" value="Homem" checked>
    <label for="fem">Feminino</label>
    <input type="radio" name="sexo" id="fem" value="Mulher">
</fieldset>

<div class="col-12">
    <input type="submit" class="btn btn-primary" value="Enviar">
</div>

</form>

<form action="<?php echo URL?>pages/cores.php" method="get" class="my-5 text-light">
    <div class="mb-3">
        <label for="itxt" class="form-label">Texto</label>
        <input type="text" name="txt" id="itxt" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="itam" class="form-label">Tamanho</label>
        <select name="tam" id="itam" class="form-control" >
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt">14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="icor" class="form-label">Cor</label>
        <input type="color" name="cor" id="icor">
    </div>
    <div class="col-12">
        <input type="submit" class="btn btn-primary" value="Gerar Cor">
    </div>
</form>