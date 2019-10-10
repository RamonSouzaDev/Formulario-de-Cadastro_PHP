<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>Adicionar Contato</title>
</head>

<body>
    <div class="container">
        <div clas="span10 offset1">
          <div class="card">
            <div class="card-header">
                <h3 class="well"> Adicionar Contato </h3>
            </div>
            <div class="card-body">
            <form class="form-horizontal" action="create.php" method="post">

                <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                    <label class="control-label">Nome</label>
                    <div class="controls">
                        <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                        <?php if(!empty($nomeErro)): ?> 
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($cepErro)?'error ': '';?>">
                    <label class="control-label">CEP</label>
                    <div class="controls">
                        <input size="80" class="form-control" name="cep" type="text" placeholder="Cep" required="" value="<?php echo !empty($cep)?$endereco: '';?>">
                        <?php if(!empty($cepErro)): ?>
                            <span class="help-inline"><?php echo $cepErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <label class="control-label">Logradouro</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="logradouro" type="text" placeholder="Logradouro" required="" value="<?php echo !empty($logradouro) ? $logradouro : '';?>">
                        <?php if(!empty($logradouroErro)): ?>
                            <span class="help-inline"><?php echo $logradouroErro;?></span>
                            <?php endif;?>

                            <label class="control-label">Bairro</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="bairro" type="text" placeholder="Bairro" required="" value="<?php echo !empty($bairro) ? $bairro: '';?>">
                        <?php if(!empty($bairroErro)): ?>
                            <span class="help-inline"><?php echo $bairroErro;?></span>
                            <?php endif;?>

                            <label class="control-label">Cidade</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="cidade" type="text" placeholder="Cidade" required="" value="<?php echo !empty($cidade) ? $cidade : '';?>">
                        <?php if(!empty($cidadeErro)): ?>
                            <span class="help-inline"><?php echo $cidadeErro;?></span>
                            <?php endif;?>

                            <label class="control-label">Estado</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="estado" type="text" placeholder="Estado" maxlength="3" required="" value="<?php echo !empty($estado) ? $estado : '';?>">
                        <?php if(!empty($estadoErro)): ?>
                            <span class="help-inline"><?php echo $estadoErro;?></span>
                            <?php endif;?>

                <div class="control-group <?php echo !empty($telefoneErro)?'error ': '';?>">
                    <label class="control-label">Telefone</label>
                    <div class="controls">
                        <input size="35" class="form-control" name="telefone" type="text" placeholder="Telefone" required="" value="<?php echo !empty($telefone) ? $telefone : '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $telefoneErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($emailErro)?'error ': '';?>">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="email" type="text" placeholder="Email" required="" value="<?php echo !empty($email) ? $email : '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $emailErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="form-actions">
                    <br/>

                    <button type="submit" class="btn btn-success">Adicionar</button>
                    <a href="index.php" type="btn" class="btn btn-default">Voltar</a>

                </div>
            </form>
          </div>
        </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php
    require 'banco.php';

    if(!empty($_POST))
    {
        
        //Acompanha os erros de validação
        $nomeErro = null;
        $enderecoErro = null;
        $telefoneErro = null;
        $emailErro = null;
        $bairroErro = null;
        $estadoErro = null;
        $cidadeErro = null;

        $nome = $_POST['nome'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

    

        //Validaçao dos campos:
        $validacao = true;
        if(empty($nome))
        {
            $nomeErro = 'Por favor digite o seu nome!';
            $validacao = false;
        }

        if(empty($endereco))
        {
           
            
            $enderecoErro = 'Por favor digite o seu endereço!';
            $validacao = false;
        }

        if(empty($telefone))
        {

            $telefoneErro = 'Por favor digite o número do telefone!';
            $validacao = false;
        }

        if(empty($email))
        {
            $telefoneErro = 'Por favor digite o endereço de email';
            $validacao = false;
        }
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailError = 'Por favor digite um endereço de email válido!';
            $validacao = false;
        }

       

        //Inserindo no Banco:
        if($validacao)
        {
            
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'INSERT INTO pessoa (nome, cep, logradouro, bairro, cidade, estado, telefone, email) VALUES (:NOME, :CEP, :LOGRADOURO, :BAIRRO, :CIDADE, :ESTADO, :TELEFONE, :EMAIL)';


            $q = $pdo->prepare($sql);
            $q->bindParam(':NOME', $nome);
            $q->bindParam(':CEP', $cep);
            $q->bindParam(':LOGRADOURO', $logradouro);
            $q->bindParam(':BAIRRO', $bairro);
            $q->bindParam(':CIDADE', $cidade);
            $q->bindParam(':ESTADO', $estado);
            $q->bindParam(':TELEFONE', $telefone);
            $q->bindParam(':EMAIL', $email);
            $q->execute();
            
            Banco::desconectar();
            
            header("Location: /index.php");
            exit();
        }
    }
?>