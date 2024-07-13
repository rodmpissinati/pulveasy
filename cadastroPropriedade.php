<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro Propriedade</title>
</head>
<header>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script></header>
<body>

<a class="linkVoltar" href="pulverizacao.php">Voltar</a>
    <div class="cadastroPropriedade">
      <div class="formPropriedade">
      <div class="headerPropriedade">
          <img class="imgPropriedade" src="imagens\nav4.png" alt="">
      </div>  
          <h3 class="headerPropriedade">Cadastro de Propriedade</h3>
        <div class="container col-6 mb-4 ">
        <form action="processaPropriedade.php" method="POST" class="row g-3">
          <div class="col-5">
            <label for="rua" class="form-label">Cidade</label>
            <input type="text" name= "cidade" class="form-control" id="cidade" placeholder="Digite a cidade">
          </div>
          <div class="col-7">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" name= "bairro" class="form-control" id="bairro" placeholder="Digite o bairro">
          </div> 
          <div class="col-10">
            <label for="rua" class="form-label">Rua</label>
            <input type="text" name= "rua" class="form-control" id="rua" placeholder="Digite a rua">
          </div>
          <div class="col-2">
            <label for="numero" class="form-label">Número</label>
            <input type="text" name= "numero" class="form-control" id="numero" placeholder="Digite o Nº">
          </div>

          <div class="col-md-4">
            <label for="estado" name= "estado" class="form-label">Estado:</label>
            <select name="estado" size="1" id="select" class="form-select">
              <option value="ac">Acre</option>
              <option value="al">Alagoas</option>
              <option value="ap">Amapá</option>
              <option value="ba">Bahia</option>
              <option value="ce">Ceará</option>
              <option value="df">Distrito Federal</option>
              <option value="go">Goiás</option>
              <option value="ma">Maranhão</option>
              <option value="mt">Mato Grosso</option>
              <option value="ms">Mato Grosso do Sul<option>
              <option value="mg">Minas Gerais</option>
              <option value="pa">Pará</option>
              <option value="pb">Paraíba</option>
              <option value="pr">Paraná</option>
              <option value="pe">Pernambuco</option>
              <option value="pi">Piauí</option>
              <option value="rj">Rio de Janeiro</option>
              <option value="rn">Rio Grande do Norte</option>
              <option value="rs">Rio Grande do Sul</option>
              <option value="ro">Rondônia</option>
              <option value="rr">Roraima</option>
              <option value="sc">Santa Catarina</option>
              <option value="sp">São Paulo</option>
              <option value="se">Sergipe</option>
              <option value="to">Tocantins</option>
          </select>
          </div>
          <div class="col-8">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" name= "cnpj" class="form-control" id="nome" placeholder="Digite o CNPJ">
          </div>
          <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name= "nomePropriedade" class="form-control" id="nome" placeholder="Digite o nome da propriedade">
          </div>
              <div class="d-grid gap-12 col-12 mx-100vw">
              <input type="button" class="btn btn-success" value="Cadastrar">
              </div>
          </div>
        </form>
      </div>
    </div>
    </div>

    
</body>
</html>