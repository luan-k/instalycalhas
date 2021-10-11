<?php get_header();
?>
<div class="page-wraper contact">
    <div class="container contato-text mt-5 px-1 pt-5">
        <div class="row grid grid-cols-1 md:grid-cols-2">
            <div class="col-sm-6">
                <h3 data-anime="left">Telefone:</h3>
                <ul data-anime="left">
                    <li> (48) 3033-3277 </li>
                    <li> (48) 998479-1962 </li>
                </ul>
                
                <h3 class="mt-6" data-anime="left">Localização:</h3>
                <ul data-anime="left">
                    <li>
                        R. José Antônio Pereira, 3890 - Ipiranga, São José - SC, 88111-490
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 mt-9 md:mt-0">
                <?php echo do_shortcode('[wpforms id="82"]') ?>
                <!-- <form data-anime="right">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Insira seu email">
                    </div>
                    <div class="form-group">
                        <label for="messageTitle">Título</label>
                        <input type="text" class="form-control" id="messageTitle"
                            placeholder="Insira o titulo da mensagem">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea type="textarea" class="form-control" id="message"
                            placeholder="Insira o titulo da mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form> -->
            </div>
        </div>
    </div>
    <br><br>
    <!-- <div class="container text-center contato-text">
        <h3>Nossos Horários: </h3>
        <ul>

            Segunda a Sexta, das 08h00 às 18h.

        </ul>
    </div> -->
    <br><br>

    <!-- GOOGLE MAPS -->
    <section>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56581.429438616964!2d-48.635087915676934!3d-27.583007183306403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95274a32ec806a43%3A0x852bb2bd249f3ec5!2sInstaly%20Calhas!5e0!3m2!1sen!2sbr!4v1633902703322!5m2!1sen!2sbr" width="100" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</div>
<?php
    get_footer();
?>