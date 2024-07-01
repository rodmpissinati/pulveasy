<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro Propriedade</title>
</head>
<body>
    <div class="background">
    </div>

    <div class="container">
        <div class="form">
            <form action="processaCadastro.php" method="POST">

                <h1 id="txt_login">Cadastro Propriedade</h1>
                <div class="form_container">
                    <h3 class="txt_cadastro">Cidade</h3>
                    <input type="text" id="cidade" name="cidade" placeholder="Digite a Cidade">
                    <h3 class="txt_cadastro">Bairro</h3>
                    <input type="text" id="bairro" name="bairro" placeholder="Digite o Bairro">
                </div>
                <div class="form_container">
                <h3 class="txt_cadastro">Rua</h3>
                    <input type="text" id="rua" name="cidade" placeholder="Digite a Rua">
                    <h3 class="txt_cadastro">Número</h3>
                    <input type="number" id="numero" name="numero" placeholder="Digite o Número">
                </div>
                <div class="form_container">
                <h3 class="txt_cadastro">Estado</h3>
                    <select name="Estado" size="1" id="select">
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="ap">Amapá</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
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
                <div class="form_container">
                <h3 class="txt_cadastro">CNPJ</h3>
                <input type="text" id="cnpj" name="cnpj" placeholder="Digite o CNPJ">
                </div>
                <div class="form_container">
                <h3 class="txt_cadastro">Nome</h3>
                <input type="text" id="nomeP" name="nomeP" placeholder="Digite o Nome da Propriedade">
                </div>

               <div id="btn_container"> 
                    <input type="submit" id="btn_form" class="txt_cadastro" name="Entrar">
                </div>
                
            </form>
    
</body>
</html>