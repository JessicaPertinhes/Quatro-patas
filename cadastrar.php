<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4Patas</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
</head>

<body>

    <!-- narbar  -->
    <?php include_once 'navbar.php'; ?>

    <!-- conteúdo  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Cadastro de cliente</h1>
                </div>
            </div>


            <form action="index.html" method="post" style="margin-bottom:35px">
                <div class="row">
                    <div class="col-md-12">
                        <fieldset>
                            <legend class="header-underline">Informações pessoais</legend>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nome completo</label>
                                    <input type="text" class="form-control" name="nome_completo" required placeholder="José Maria">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="email" placeholder="seu@email.com"required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Data de nascimento</label>
                                    <input type="text" class="form-control" name="dt_nascimento" data-mask="00/00/0000" required placeholder="dd/mm/aaaa">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input type="text" class="form-control phone-mask" name="celular" required placeholder="(00) 90000-0000">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-control" name="sexo" required>
                                        <option value="">Selecione seu sexo</option>
                                        <option value="0">Feminino</option>
                                        <option value="1">Masculino</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend class="header-underline">Meu endereço</legend>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>CEP</label>
                                    <input type="text" class="form-control" name="cep" required placeholder="00000-000" data-mask="00000-000">
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-group">
                                    <label>UF</label>
                                    <input type="text" class="form-control" name="uf" required placeholder="UF" data-mask="aa">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="text" class="form-control" name="cidade" required placeholder="Cidade">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Bairro</label>
                                    <input type="text" class="form-control" name="bairro" required placeholder="Bairro" >
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Logradouro</label>
                                    <input type="text" class="form-control" name="logradouro" required placeholder="Logradouro">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Número</label>
                                    <input type="number" min="1" class="form-control" name="logradouro_numero" required placeholder="00" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Completo</label>
                                    <input type="text" class="form-control" name="complemento" required placeholder="Bloco B, Apartamento 21">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend class="header-underline">Termos & Condições</legend>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="enviar_senha"> Aceito que ao me cadastrar receberei em meu e-mail a senha de acesso a conta, isso faz parte do sistema anti-spam.
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="aceitar_termos"> Aceito os termos de uso aqui aplicado, acesso o termo <a href="#">clicando aqui</a>.
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="aceitar_politica"> Aceito as politicas de privacidade regidas neste site, acesso a politica de provacidade <a href="#">clicando aqui</a>.
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-2 col-md-offset-4">
                        <button class="btn btn-success btn-block"><i class="fa fa-thumbs-o-up"></i> Cadastrar</button>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-default btn-block"><i class="fa fa-reply"></i> Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- conteúdo  -->

    <!-- footer -->
    <?php include_once 'footer.php' ?>


    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/phone.mask.js"></script>
    <script src="js/cep-automatico.js"></script>
</body>
</html>
