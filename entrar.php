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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Entrar</h1>
                </div>
            </div>
            <form action="index.html" method="post" style="margin-top:21px">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <fieldset style="padding-bottom:21px">
                            <br>
                            <!-- <legend class="header-underline">Entrar</legend> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="email" placeholder="seu@email.com" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control" name="senha" required placeholder="Senha">
                                </div>
                            </div>


                            <div class="col-sm-6 text-center">
                                <button href="#" class="btn btn-success btn-block"><i class="fa fa-sign-in"></i> Entrar</button>
                            </div>

                            <div class="col-md-6">
                                <a href="#" class="btn btn-warning btn-block"><i class="fa fa-question-circle"></i> Esqueci minha senha</a>
                            </div>

                        </fieldset>

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
