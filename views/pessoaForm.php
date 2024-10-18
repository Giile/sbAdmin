<?php 
if (!empty($result['id'])) {
    // EDITAR
    $titulo = 'Editar Pessoa';
    $action = 'update';
    $id = $result['Id'];
    $nome = $result['Nome'];
    $cpf = $result['CPF'];
    $idade = $result['Idade'];
    $telefone = $result['Telefone'];
    $email = $result['Email'];
    $endereco = $result['Endereco'];
    $observacao = $result['Observacao'];
} else {
    // ADICIONAR
    $titulo = 'Adicionar Pessoa';
    $action = 'insert';
    $id = '';
    $nome = '';
    $cpf = '';
    $idade = '';
    $telefone = '';
    $email = '';
    $endereco = '';
    $observacao = '';
}
?>

<?php include './views/includes/header.php'; ?>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-2 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= $titulo ?></h1>
                            </div>
                            <form class="user" method="post" action="./pessoa.php?action=<?= $action ?>">
                                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nome" id="Nome" placeholder="Nome" value="<?= $nome ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="cpf" id="CPF"
                                            placeholder="CPF" value="<?= $cpf ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="endereco" id="Endereco"
                                        placeholder="Endereço" value="<?= $endereco ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="telefone"
                                            id="Telefone" placeholder="Telefone" value="<?= $telefone ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="idade"
                                            id="Idade" placeholder="Idade" value="<?= $idade ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="email"
                                            id="Email" placeholder="E-mail" value="<?= $email ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="observacao"
                                            id="Observacao" placeholder="Observação" value="<?= $observacao ?>">
                                    </div>
                                </div>  
                                <br>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Salvar
                                </button>
                            </form>
                            
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block bg-register-image"></div>
                </div>
            </div>
        </div>

    </div>

<?php include './views/includes/footer.php'; ?>