<?= $this->extend('layouts/layout_auth')?>
<?= $this->section('content')?>
<div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-4">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Bem vindo</h4>
                                    <!-- <form  method="POST" action="index.html"> -->
                                        <?= form_open('/auth/login_submit');?>
                                        <div class="form-group">
                                            <label><strong>E-mail</strong></label>
                                            <input type="email" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Senha</strong></label>
                                            <input placeholder="************" type="password" class="form-control" value="">
                                        </div>
                                        <!-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div> -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                        </div>
                                        <?= form_close();?>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection()?>
