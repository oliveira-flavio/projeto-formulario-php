<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/styles/styles.css" />
  <title>Formulário de cadastro</title>

</head>

<body>
  <div class="wrapper">
    <h1 class="title">Formulário de Cadastro</h1>

    <form action="/pessoaFisica.php" method="post">

      <div class="opcao-cadastro">
        <label for="escolha">Escolha o tipo de cadastro</label>
        <div class="caixa-selecao">
          <input type="radio" name="escolha" id="showPf" />
          <label for="pf">Pessoa Física</label><br>
          <input type="radio" name="escolha" id="showPj" />
          <label for="pj">Pessoa Jurídica</label><br>
        </div>
      </div>
      <!-- ################# Início formulário pessoa FÍSICA ############################## -->
      <div class="form" id="pessoaFisica" style="display:none">
        <br>
        <hr>
        <br>
        <h2 class="sub-title">Cadastro Pessoa Física</h2>

        <div class="input_field">
          <label for="nome">Nome completo <span class="text-danger">*</span></label>
          <input type="text" name="nome" class="input" id="nome" required onkeypress="return /^[a-zA-Z\s]*$/.test(event.key)" />
        </div>
        <div class="input_field">
          <label for="cpf">CPF <span class="text-danger">*</span></label>
          <input type="text" name="cpf" id="cpf" class="input" placeholder="000.000.000-00" required />
        </div>
        <div class="input_field">
          <label for="rg">RG <span class="text-danger">*</span></label>
          <input type="text" name="rg" class="input" id="rg" placeholder="0.000.000-0" required />
        </div>
        <div class="input_field">
          <label for="dataNascimento">Data de Nascimento <span class="text-danger">*</span></label>
          <input type="text" name="data_nascimento" class="input" id="data_nascimento" placeholder="DD/MM/AAAA" required />
        </div>

        <div class="input_field">
          <label>Escolaridade <span class="text-danger">*</span></label>
          <div class="caixa-selecao">
            <select name="escolaridade" required>
              <option selected>Selecione</option>
              <option value="fundamental_completo">
                Ensino fundamental Completo
              </option>
              <option value="fundamental_incompleto">
                Ensino fundamental incompleto
              </option>
              <option value="medio_completo">Ensino Médio Completo</option>
              <option value="medio_incompleto">Ensino Médio Incompleto</option>
              <option value="superior_completo">
                Ensino Superior Completo
              </option>
              <option value="superior_incompleto">
                Ensino Superior Incompleto
              </option>
            </select>
          </div>
        </div>

        <div class="input_field">
          <label for="genero">Gênero</label>
          <div class="caixa-selecao">
            <select name="genero">
              <option selected>Selecione</option>
              <option value="feminino">Feminino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
        </div>
        <h2 class="sub-title">Filiação</h2>
        <br>
        <div class="input_field">
          <label for="nome_mae">Nome da Mãe</label>
          <input type="text" name="nome_mae" class="input" onkeypress="return /^[a-zA-Z\s]*$/.test(event.key)" />
        </div>

        <div class="input_field">
          <label for="nome_pai">Nome do Pai</label>
          <input type="text" name="nome_pai" class="input" onkeypress="return /^[a-zA-Z\s]*$/.test(event.key)" />
        </div>

        <h2 class="sub-title">Dados de Contato</h2>
        <br>

        <div class="input_field">
          <label for="email">E-mail <span class="text-danger" id="email-status">*</span></label>

          <input type="email" name="email" class="input" id="email" onBlur="verificarEmail()" required placeholder="email@provedor.com.br" />
          <span id="email-status"></span>
        </div>
        <div class="input_field">
          <label for="telefone">Telefone <span class="text-danger">*</span></label>
          <input type="text" name="telefone" id="telefone" class="input" placeholder="(00)0000-0000 " required />
        </div>

        <div class="input_field">
          <label for="telefone_celular">Telefone celular</label>
          <input type="text" name="telefone_celular" class="input" id="telefone_celular" placeholder="(00)9 0000-0000" />
        </div>

        <div class="button">
          <input type="submit" value="Registrar" class="btn" />
          <input type="reset" value="Limpar Campos" class="btn" />
        </div>
      </div>
    </form>
    <!-- ################## Início formulário pessoa JURIDICA ############################ -->
    <form action="/pessoaJuridica.php" method="post">
      <div class="form" id="pessoaJuridica" style="display:none">
        <br>
        <hr>
        <br>
        <h2 class="sub-title">Cadastro Pessoa Jurídica</h2>

        <div class="input_field">
          <label for="razao_social">Razão Social <span class="text-danger">*</span></label>
          <input type="text" name="razao_social" class="input" required onkeypress="return /^[a-zA-Z\s]*$/.test(event.key)" />
        </div>
        <div class="input_field">
          <label for="cnpj">CNPJ <span class="text-danger">*</span></label>
          <input type="text" name="cnpj" class="input" id="cnpj" placeholder="00.000.000/0000-00" required />
        </div>
        <div class="input_field">
          <label for="inscricao_estadual">Inscrição Estadual</label>
          <input type="text" name="inscricao_estadual" id="ie" class="input" placeholder="0.000.000-0" required />
        </div>

        <div class="input_field">
          <label for="data_abertura">Data de Criação/Abertura <span class="text-danger">*</span></label>
          <input type="text" name="data_abertura" class="input" id="data_abertura" placeholder="DD/MM/AAAA" required />
        </div>

        <div class="input_field">
          <label>Ramo atividade <span class="text-danger">*</span></label>
          <div class="caixa-selecao">
            <select name="ramo_atividade">
              <option selected>Selecione</option>
              <option value="industria_textil">
                Industria Textil
              </option>
              <option value="logistica">
                Logística
              </option>
              <option value="tecnologia">Tecnologia</option>
              <option value="comercio_varejista">Comércio Varejista</option>
            </select>
          </div>
        </div>
        <h2 class="sub-title">Dados de contato</h2>
        <br>
        <div class="input_field">
          <label for="responsavel">Responsável <span class="text-danger">*</span></label>
          <input type="text" name="responsavel" class="input" onkeypress="return /^[a-zA-Z\s]*$/.test(event.key)" />
        </div>
        <div class="input_field">
          <label for="departamento">Departamento</label>
          <input type="text" name="departamento" class="input" onkeypress="return /^[a-zA-Z\s]*$/.test(event.key)" />
        </div>
        <div class="input_field">
          <label for="email">E-mail <span class="text-danger">*</span></label>
          <input type="email" name="email" id="email" class="input" onBlur="verificarEmail()" placeholder="email@provedor.com.br" required />
          <span id="email-status"></span>
        </div>
        <div class="input_field">
          <label for="telefone">Telefone <span class="text-danger">*</span></label>
          <input type="text" name="telefone" class="input" id="telefone" placeholder="(00)0000-0000" required />
        </div>
        <div class="input_field">
          <label for="telefone_celular">Telefone celular</label>
          <input type="text" name="telefone_celular" class="input" id="telefone_celular" placeholder="(00)9 0000-0000" />
        </div>
        <div class="button">
          <input type="submit" value="Registrar" class="btn" />
          <input type="reset" value="Limpar Campos" class="btn" />
        </div>

      </div>
      <!-- </div> -->
    </form>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script src="js/mask.js"></script>
  <script src="js/verificarEmail.js"></script>
  <script src="js/index.js"></script>

</body>

</html>