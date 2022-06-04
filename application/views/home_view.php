<nav class="navbar navbar-default menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off-mobile">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="scrollink" href="#home">HOME</a></li>
                        <li><a class="scrollink" href="#produto">PRODUTO</a></li>
                        <li><a class="scrollink" href="#projeto">PROJETO</a></li>
                        <li><a class="scrollink" href="#implantacao">IMPLANTAÇÃO</a></li>
                        <li><a class="scrollink" href="#lazer">LAZER</a></li>
                        <li><a class="scrollink" href="#localizacao">LOCALIZAÇÃO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<div id="home" class="container-fluid home">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 padding-off">
            <div>
                <img class="img-responsive" src="<?= base_url(); ?>assets/images/home.png" alt="Conquista Arbore">
            </div>
        </div>
    </div>
</div>


<!-- <div id="produto" class="container-fluid padding-off studio">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <a href="#" data-toggle="modal" data-target="#modalFichaTecnica">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/pagina-1.png" alt="Conquista Arbore">
                </a>
            </div>
        </div>
    </div>
</div> -->

<!-- <div id="projeto" class="container-fluid padding-off fachada">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center tt">
                    <p><span>hits</span> espera por você, <br class="visible-xs" /> <span>escolha já o seu.</span></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="galeria">
                        <section class="glr-fachada slider">
                            <div>
                                <a href="<?= base_url(); ?>assets/images/galeria/full/fachada-01-full.jpg" data-lightbox="galeria-fachada">
                                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/fachada-01.png" alt="Conquista Arbore">
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div id="implantacao" class="container-fluid padding-off implantacao">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center tt">
                    <p>O <span>ESPAÇO</span> QUE VOCÊ <span>DESEJA</span> PARA <br /><span>VIVER BEM</span> DE VERDADE.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="galeria">
                        <section class="glr-implantacao slider">
                            <div>
                                <a href="<?= base_url(); ?>assets/images/galeria/full/implantacao-01-full.jpg" data-lightbox="galeria-implantacao">
                                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/implantacao-01.png" alt="Conquista Arbore">
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div id="lazer" class="container-fluid padding-off lazer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center tt">
                    <p><span>Aperte o play</span> e entre <br class="visible-xs" />no ritmo <span>da diversão.</span></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="galeria">
                        <section class="glr-lazer slider">
                            <div>
                                <a href="<?= base_url(); ?>assets/images/galeria/full/lazer-01-full.jpg" data-lightbox="galeria-lazer">
                                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/lazer-01.png" alt="Conquista Arbore">
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<footer id="localizacao">
    <div class="container-fluid padding-off contato">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box-0">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off box-1">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off text-center tt">
                            <p>
                                PARA SABER MAIS E FAZER<br />
                                PARTE DESSE SUCESSO,<br />
                                É SÓ FALAR COM A GENTE!
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form method="post" role="form" id="hitscupece" action="<?php echo base_url("contato") ?>">
                                <div class="group-form">
                                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                        <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="NOME*" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                        <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="E-MAIL*" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                        <input id="telefone" class="phone form-control" type="tel" name="phone" required="required" placeholder="TELEFONE*" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                        <textarea id="form-mensagem" class="msg form-control" cols="30" rows="5" name="mss" placeholder="SUA MENSAGEM">Quero mais informações sobre o Conquista Arbore</textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                        <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Validar</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($email_enviado))
                                echo $email_enviado;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid padding-off redes">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="box">
                        <a href="https://m.facebook.com/tsincorporacaoeconstrucao" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-facebook@2x.png" alt=""></a>
                        <a href="https://instagram.com/tranchesisadek?utm_medium=copy_link" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-instagram@2x.png" alt=""></a>
                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=551156796760" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-phone@2x.png" alt=""></a>
                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=551156796760" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-whatsapp@2x.png" alt=""></a>
                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=551156796760" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-chat@2x.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logos.png" alt="Conquista Arbore">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off texto-legal">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur sapiente, laboriosam dolore ut fuga voluptatum amet voluptas vel adipisci nostrum ab similique quisquam veniam laborum quasi quas, voluptatem, animi repellendus!
                    </p>
                </div>
            </div>
        </div>
    </div> -->
</footer>

<!-- <div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Este site utiliza cookies para melhorar sua experiência de navegação, permitir um início de sessão seguro, recolher estatísticas e oferecer conteúdo adequado aos seus interesses. Ao continuar sua navegação, considera-se aceito nossa Política de Privacidade.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div> -->