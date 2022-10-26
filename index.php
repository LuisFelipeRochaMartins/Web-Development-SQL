<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validação de campos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="function.js"></script>
    <link href="style.css" rel="stylesheet">
  </head> 
  <body>
      <nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="list.php">Agenda</a>
        <a href="index.php" class="navbar-brand">Adicionar</a>
      </div>
    </nav>
    </div>
    <div class="container">
  <div class="row">
    <div class="col">
      <div>
        <div>
          <form name ="formulario" action="data.php" method="post">
            <div class="mb-2"  >
              <label for="name" class="form-label">Nome</label>
              <div class="col-sm-8">
                <input type="text"
                class="form-control" 
                id="name" name="sNome"
                aria-describedby="nameHelp"
                placeholder="Seu nome aqui" 
                required onchange="tirarNumeros('name')">
              </div>
            </div>
            <div class="mb-2" >
              <label for="Sobrenome" class="form-label">Sobrenome</label>
              <div class="col-sm-8">
                <input type="text"
                class="form-control"
                id="surname"name="sSobrenome"
                aria-describedby="surnameHelp"
                placeholder="Seu Sobrenome"
                required onchange="tirarNumeros('surname')">
              </div>
            </div>

            <div class="mb-2" >
              <label for="Data" class="form-label">Data de Nascimento</label>
              <div class="col-sm-8">
                <input type="date"
                class="form-control"
                id="date"
                name="date"aria-describedby="dateHelp"
                required onchange="calcularIdade()">
              </div>
            </div>
            <div class="mb-2" >
              <label for="idade" class="form-label">Idade</label>
              <div class="col-sm-8">
                <input type="number"
                class="form-control"
                name="numero"
                id="idade"
                aria-describedby="dateHelp" disabled>
              </div>
            </div>        
            <div class="mb-2" >
              <label for="email" class="form-label">Endereço de Email</label>
              <div class ="col-sm-8"> 
                <input type="email"
                class="form-control"
                name="sEmail"id="sEmail"
                aria-describedby="emailHelp"
                placeholder="Seu e-mail" required>
              </div>
            </div>

            <div id="Telefone" class="form-text">Nós nunca vamos compartilhar seu Email com ninguém.</div>
            <div class="mb-0" >
              <label for="telefone" class="form-label">Telefone</label>
            </div>

            <div class="col-sm-8">
              <input type="text"
              class="form-control"
              id="sTel" name="sTel"
              aria-describedby="telHelp"
              placeholder="Seu telefone"
              required onchange="formatarTel()" >
            </div>
            <div>Você é parente?</div>

          <div class="mb-2 form-check">
            <div class="mb-0">
                <input type="checkbox"
                class="form-checkbox"
                name="checkbox"
                id="checkbox1"
                value ="1">
             <label class="form-checkbox" for="checkbox1">Parente</label>
              </div>
            </div>
              <button type="submit" class="btn btn-primary" >Enviar</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col">
      <div></div>
        <div>
          <form>
            <div class="mb-4"></div>
            <div class="input-group mb-3">
              <div class="col-sm-8">
                <div class="mb-2">
                <span>Origem do Contato</span>
                </div>
              <select class="form-select" id="select" >
                <option value="1" name="select1">Escola</option>
                <option value="2" name="select1">Trabalho</option>
                <option value="3" name="select1">Festas</option>
                <option value="4" name="select1">Famíl  ia</option>
              </div>
              </select>
            </div>
          </div>
          <div class="mb-2">
          <span>Foto</span>
        </div>
          <div class="input-group mb-3">
            <div class="col-sm-8">
            <input type="file"
            class="form-control"
            id="inputGroupFile02" 
            required>
          </div>
          </div>
          <div class="input-group mb-3">
            <div class="col-sm-8">
              <div class="mb-2">
              <span>Sexo</span>
              </div>
            <select class="form-select"id="select2" required>
              <option value="1" name="select2" >Masculino</option>
              <option value="2" name="select2" >Feminino</option>
            </div>
            </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script> src="funcion.js"</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>