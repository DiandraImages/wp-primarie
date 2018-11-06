<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <h5 class="headin5_amrc col_white_amrc pt2">Date de contact</h5>
                <p><i class="fa fa-location-arrow"></i> Localitatea Barsau de Sus - 447037,<br> Str. Principala nr. 277 </p>
                <p><i class="fa fa-phone"></i> +40 0261.876.004 </p>
                <p><i class="fa fa-phone"></i> +40 0261.876.021 </p>
                <p><i class="fa fa fa-envelope"></i> primariabarsau@yahoo.com </p>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-3">
                <h5 class="headin5_amrc col_white_amrc pt2">Link-uri utile</h5>
                <ul class="footer_ul_amrc">
                    <li><a href="https://www.ghiseul.ro/ghiseul/public">Plătește online impozite şi taxe</a></li>
                    <li><a href="http://www.apia.org.ro/">Agenţia de Plăţi şi Intervenţie pentru Agricultură</a></li>
                    <li><a href="http://www.anpc.gov.ro/">Autoritatea Nationala pentru Protectia Consumatorilor</a></li>
                    <li><a href="http://www.monitoruloficial.ro/RO/article--e-Monitor--339.html">Monitorul Oficial</a></li>
                    <li><a href="http://www.bnr.ro/Home.aspx">Banca Nationala a Romaniei</a></li>
                </ul>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-3">
                <h5 class="headin5_amrc col_white_amrc pt2">Navigare Rapidă</h5>
                <ul class="footer_ul_amrc">
                    <li><a href="#">Formulare Tip</a></li>
                    <li><a href="#">Somatii si titluri executorii</a></li>
                    <li><a href="#">Raporteaza o Problema</a></li>
                    <li><a href="#">Impozite si taxe</a></li>
                    <li><a href="#">Anunturi/Concursuri</a></li>
                    <li><a href="#">Achizitii publice directe</a></li>
                </ul>
                <?php if(is_active_sidebar('footer-widget-area')): ?>
                <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
                  <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
                <?php endif; ?>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-3">
                <h5 class="headin5_amrc col_white_amrc pt2">Program de Lucru</h5>
                <ul class="footer_ul2_amrc">
                    <li>
                        <p>Luni – Joi 7.30-16.00</p>
                    </li>
                    <li>
                        <p>Vineri 7.30-13.30</p>
                    </li>

                </ul>
                <h5 class="headin5_amrc col_white_amrc pt2">Program casierie</h5>
                <ul class="footer_ul2_amrc">
                    <li>
                        <p>Luni – Joi 7.30-16.00</p>
                    </li>
                    <li>
                        <p>Vineri 7.30-13.30</p>
                    </li>

                </ul>
            </div>
        </div>
    </div>


    <div class="container">
        <ul class="foote_bottom_ul_amrc">
            <li><a href="#">Prima Pagina</a></li>
            <li><a href="#">Despre Comuna</a></li>
            <li><a href="#">Atractii Turistice</a></li>
            <li><a href="#">Evenimente</a></li>
        </ul>
        <p class="text-center">Copyright &copy; <?php echo date('Y'); ?> | Primaria Comunei Barsau</p>

        <ul class="social_footer_ul">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
