<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Buenos Pizzaria</title>
</head>

<body>
    <header>
        <div class="logoinicio">
            <img src="https://cdn.pixabay.com/photo/2013/07/13/09/36/pizza-155771_1280.png" alt="" class="logo">
            <h1>Buenos Pizzaria</h1>
        </div>
        <div class="divBtn"> 
            <button class="btnInicio">Cadastrar-se</button>
        </div>
    </header>
    <!------------------- CARROSEL --------------->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="4000">
      <img style="height:45vh !important;" src="img/1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img  src="img/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!----------------------- TERMINA CARROSEL ----------------->
    <!----------------------- COMECO ACORDION ----------------->
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Pizzas pequenas: 3 sabores | Preço : 20,99 R$
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor" class="naoSelecionado">
                            <p>Calabresa</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor" class="naoSelecionado">
                            <p>Strogonoff</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor" class="naoSelecionado">
                            <p>4 Queijos</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor" class="naoSelecionado">
                            <p>Portuguesa</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor" class="naoSelecionado">
                            <p>Frango com Catupiry</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor" class="naoSelecionado">
                            <p>Mussarela</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor" class="naoSelecionado">
                            <p>Atum</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor" class="naoSelecionado">
                            <p>Marguerita</p>
                        </div>
                        <div class='pedido'>
                            <button id="btnconfi" class='desabilitado' disabled>Fazer pedido</button>
                        </div>
                </strong>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Pizza média: 4 sabores | Preço : 45,99 R$
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor2"  class="naoSelecionado2">
                            <p>Calabresa</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor2"  class="naoSelecionado2">
                            <p>Strogonoff</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor2"  class="naoSelecionado2">
                            <p>4 Queijos</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor2"  class="naoSelecionado2">
                            <p>Portuguesa</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor2"  class="naoSelecionado2">
                            <p>Frango com Catupiry</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor2"  class="naoSelecionado2">
                            <p>Mussarela</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor2"  class="naoSelecionado2">
                            <p>Atum</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor2"  class="naoSelecionado2">
                            <p>Marguerita</p>
                        </div>
                        <div class='pedido'>
                            <button id="btnconfi2" class='desabilitado2' disabled>Fazer pedido</button>
                        </div>
                    </strong>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Pizza grande: 5 sabores | Preço : 74,99 R$
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>
                         <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor3"  class="naoSelecionado3">
                            <p>Calabresa</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor3"  class="naoSelecionado3">
                            <p>Strogonoff</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor3"  class="naoSelecionado3">
                            <p>4 Queijos</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor3"  class="naoSelecionado3">
                            <p>Portuguesa</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor3"  class="naoSelecionado3">
                            <p>Frango com Catupiry</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor3"  class="naoSelecionado3">
                            <p>Mussarela</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor3"  class="naoSelecionado3">
                            <p>Atum</p>
                        </div>
                        <div class="escolhersabor">
                            <input type="checkbox" name="" id="sabor3"  class="naoSelecionado3">
                            <p>Marguerita</p>
                        </div>
                        <div class="pedido">
                            <button id="btnconfi3" class='desabilitado3' disabled>Fazer pedido</button>
                        </div>
                </strong>
                </div>
            </div>
        </div>
    </div>
    <!----------------------- TERMINAS ACORDION ----------------->
    <div class="mb-3">
        <form method="POST">
            <h2 class="tituloacordiao" id="cadastro">Registre-se</h2>
            <div>
                <div>
                    <label for="exampleInput" class="form-label">o que vai pedir ?:</label>
                    <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp"
                        name="pedido">
                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label">qual seu endereço ? :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="endereco">
                </div>
                <div>
                    <label for="exampleInputborda1" class="form-label">Pizza com borda ? :</label>
                    <input type="text" class="form-control" id="exampleInputborda1" name="borda">
                </div>
            </div>
            <div>
                <div>
                    <label for="exampleInput" class="form-label">Nome Completo:</label>
                    <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="nome">
                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label">Endereço de E-mail:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email">
                </div>
            </div>
            <button class="btn btn-primary">Registrar-se</button>
        </form>
    </div>

    <script src="app.js"></script>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "buenopizza";
    // cria a conexao 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        $sql = "INSERT INTO buenousuarios (nome, email) VALUES ('$nome', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    //-----------
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pedido = $_POST["pedido"];
        $endereco = $_POST["endereco"];
        $borda = $_POST["borda"];


        $sql = "INSERT INTO usuarios (pedido , endereco , borda) VALUES ('$pedido', '$endereco', '$borda')";

        if ($conn->query($sql) === TRUE) {
            echo "Novo pedido criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();

    ?>

</body>

</html>