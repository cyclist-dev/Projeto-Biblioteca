<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php
    include("menu.php");
    ?>

    <div class="content">
        <div class="card">
            <h2>Cadastro de Novo Livro</h2>
            <p>Adicione uma nova obra ao acervo digital da biblioteca. Preencha as informações
                abaixo e envie uma capa e o arquivo digital do livro em formato pdf.</p>
            <br>
            <form action="">
                <label>Título do Livro</label>
                <input type="text" name="titulo" required>
                <label>Autor</label>
                <input type="text" name="autor" required>
                <label>Ano de Publicação</label>
                <input type="number" name="ano" required>
                <label>Categoria</label>
                <select name="categoria" required>
                    <option value="">Selecione</option>
                    <option value="">Romance</option>
                    <option value="">Literatura Brasileira</option>
                    <option value="">Fantasia</option>
                    <option value="">Ficcção Cientifíca</option>
                    <option value="">Educação</option>
                    <option value="">Tecnologia</option>
                    <option value="">História</option>
                    <option value="">Biografia</option>
                    <option value="">Infantil</option>
                    <option value="">Esportes</option>
                </select>
                <br><br>
                <label>Capa do Livro (imagem)</label>
                <input type="file" name="arquivo" accept="aplication/pdf" required>
                <br>
                <button class="btn">Cadastrar</button>

            </form>

        </div>
    </div>

</body>

</html>