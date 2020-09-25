<?php get_header(); ?>

<?php 
$directoryUri = get_template_directory_uri();
include_once("includes/nav.php");
?>
        
    <!-- Landing starts here -->
    <section class="landing">
        <div class="flex-container">
            <div>
                <h1>MD frizerski salon Tuzla</h1>
                <p>- dobrodošli -</p>
                <a href="#rezervacija-start"><button>NAPRAVI PROMJENU!</button></a>
            </div>
        </div>
    </section>

    <!-- Blog starts here -->
    <section class="blog" id="blog-start">
        <div class="section-headings">
            <h2 data-aos="fade-up">NOVOSTI</h2>
        </div>
        <hr>
        <div class="blog-container">
            <?php 
                if(have_posts()) {
                    while(have_posts()) {
                        the_post();  
                        if(in_category('Pocetna')) {
                            $excerpt = get_the_excerpt(); 
                            $excerpt = substr( $excerpt, 0, 150 );
                            $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );

                     
            ?>
            <div class="post-card">
                <p class="post-thumbnail"><?php echo the_post_thumbnail(array( 340 )); ?></p>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p class="post-date"><?php echo get_the_date('d.m.Y'); ?></p>
                <p class="post-excerpt"><?php echo "$result ..."; ?></p>
                <p class="post-more"><a href="<?php the_permalink(); ?>">Više...</a></p>
            </div>
            <?php 
                        }
                    }
                } else {
                    echo "<p>No content found</p>";
                }
            ?>
        </div>

        <div class="blog-button">
            <a href="<?php echo home_url(); ?>/novosti"><button>SVE NOVOSTI</button></a>
        </div>
    </section>

    <!-- About starts here (EDIT AFTER WP PLUGIN DOWNLOADED) -->
    <section class="about" id="about-start">
        <div class="section-headings">
            <h2 data-aos="fade-up">ŠTA RADIMO</h2>
        </div>
        <hr>
        <div class="about-text">
            <p>U našem salonu, koji postoji već dvadeset godina, smješten na adresi Albina Herljevića 14, 
                insistiramo striktno na kvalitetnim i provjerenim proizvodima. Od momenta kada uđete u naš salon, 
                želimo da se osjećate dobrodošlo. Naš personal pobrinut će se da Vaš boravak bude zaista ugodan, 
                u relaksirajućim uvjetima i atmosferi. Frizerski salon MD čine vrhunski frizerski experti koji 
                vjeruju da izvor unikatnog iskustva potiče od umjetnosti saslušanja Vaših želja i potreba. Vaša 
                temeljna konsultacija, Vaše personalizirano iskustvo sa kosom, Vaša rutina njege i buduće zakazivanje 
                termina biti će u potpunosti prilagođeno samo za VAS. Mi vjerujemo u ljubaznost, velikodušnost i 
                njegu prema Vama i Vašoj kosi, kao i Vašim trepavicama i noktima.</p>
        </div>
        <div class="flex-container">
            <div class="accordion">
                <div class="accordion-item" id="accordion-item-1">
                    <a class="accordion-link" href="#accordion-item-1">
                        FRIZERSKE USLUGE
                        <i class="fas fa-plus-circle"></i>
                    </a>
                    <div class="answer">
                    <p>Nudimo Vam mnogobrojne vrhunske frizerske usluge, krojene po Vašim željama i potrebama. 
                       Želite li frizure za svečane prilike?<br /><br /> Želite li nadogradnju kose, velaterapiju, moderni 
                       color (Balayage, Babylight, Ombre, Sombre, Flamboyage), brazilski keratinski treman?<br /><br />
                       Frizerski salon MD tu je za Vas.</p>
                    </div>
                </div>
                <div class="accordion-item" id="accordion-item-2">
                    <a class="accordion-link" href="#accordion-item-2">
                        ŠMINKA, OBRVE, TREPAVICE, DEPILACIJA
                        <i class="fas fa-plus-circle"></i>
                    </a>
                    <div class="answer">
                    <p>Pored frizerskih usluga nudimo i usluge šminkanja za bilo koje prilike.<br /><br />Farbanje, korekcija 
                        obrva voskom i japansko iscrtavanje obrva su naša ekspertiza, kao i depilacija ruku, nogu i 
                        naušnica.<br /><br /> Nadogradnja trepavica predstavlja polutrajni postupak kojim postižemo kvalitet, 
                        gustinu i dužinu trepavica. To se postiže ljepljenjem ekstenzija vještačkih trepavica na 
                        Vašu prirodnu trepavicu. </p>
                    </div>
                </div>
                <div class="accordion-item" id="accordion-item-3">
                    <a class="accordion-link" href="#accordion-item-3">
                        NOKTI
                        <i class="fas fa-plus-circle"></i>
                    </a>
                    <div class="answer">
                    <p>Nokti, tako mali, ali ipak tako bitan detalj svake žene. Mi smo zaduženi za Vas i Vaše nokte.<br /><br /> 
                        Nudimo sve usluge nadogradnje noktiju, bilo to gel tehnika, izlivanje, nadogradnja tipsama, 
                        manikir, pedikir ili ipak korekcija.</p>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/usluge_zena.png" alt="Women" data-aos="fade-up"></img>
            </div>
        </div>
    </section>

    <!-- Review starts here -->
    <section class="reviews">
        <div class="mobile-reviews">
            <img src="<?php echo get_template_directory_uri(); ?>/images/reviews-smart.png" alt="Reviews"></img>    
        </div>
        <div class="desktop-reviews">
            <img src="<?php echo get_template_directory_uri(); ?>/images/reviews.png" alt="Reviews"></img>    
        </div>
    </section>

    <!-- CallToAction starts here -->
    <section class="action">
        <div class="flex-container">
            <div data-aos="fade-right">
                <h3>IMPRESIONIRANI?</h3>
                <p>Zakažite Vaš termin odmah!</p>
            </div>
            <div data-aos="fade-left">
                <a href="#rezervacija-start"><button>REZERVIŠI</button></a>
            </div>
        </div>
    </section>

    <!-- Gallery starts here -->
    <section class="gallery" id="gallery-start">
        <div class="section-headings">
            <h2 data-aos="fade-up">GALERIJA</h2>
        </div>
        <hr>
        <div class="mobile-gallery">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-mobile.png" alt="Reviews"></img>    
        </div>
        <div class="desktop-gallery">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery.png" alt="Reviews"></img>    
        </div>
    </section>

    <!-- Video starts here -->
    <section class="video">
        <div class="video-section">
        <iframe width="100%" height="480px" src="https://www.youtube.com/embed/PPOuF8X7fYg" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Contact starts here -->
    <section class="contact" id="contact-start">
        <div class="flex-container">
            <div class="flex-item">
                <div class="section-headings" id="rezervacija-start">
                    <h2 data-aos="fade-up">REZERVACIJA</h2>
                </div>
                <hr>
                <div class="reservation">
                    <p>Rezervacije trenutno primamo isključivo preko poziva ili naših socijalnih mreža.</p>
                </div>
            </div>
            <div class="flex-item">
                <div class="section-headings">
                    <h2 data-aos="fade-up">KONTAKT</h2>
                </div>
                <hr>
                <div class="grid">
                    <div class="grid-heading">Radno vrijeme:</div>

                    <div class="grid-item">Ponedjeljak</div>
                    <div class="grid-item">09:00</div>
                    <div class="grid-item">-</div>
                    <div class="grid-item">17:00</div>

                    <div class="grid-item">Utorak</div>
                    <div class="grid-item">09:00</div>
                    <div class="grid-item">-</div>
                    <div class="grid-item">17:00</div>

                    <div class="grid-item">Srijeda</div>
                    <div class="grid-item">09:00</div>
                    <div class="grid-item">-</div>
                    <div class="grid-item">17:00</div>

                    <div class="grid-item">Četvrtak</div>
                    <div class="grid-item">09:00</div>
                    <div class="grid-item">-</div>
                    <div class="grid-item">17:00</div>

                    <div class="grid-item">Petak</div>
                    <div class="grid-item">09:00</div>
                    <div class="grid-item">-</div>
                    <div class="grid-item">17:00</div>

                    <div class="grid-item">Subota</div>
                    <div class="grid-item">09:00</div>
                    <div class="grid-item">-</div>
                    <div class="grid-item">17:00</div>

                    <div class="grid-item">Nedjelja</div>
                    <div class="grid-item">neradna</div>
                </div>
                <div class="phone">
                    <p>Telefon:</p>
                    <p><a href="tel:+38762150300">+387 62 150300</a></p>
                </div>
                <div class="adress">
                    <p>Adresa:</p>
                    <p><a href="https://www.google.com/maps/place/MD/@44.5414635,18.6673325,17z/data=!3m1!4b1!4m5!3m4!1s0x475ead1c0000354f:0xf88e7ca9b11dbc25!8m2!3d44.5414635!4d18.6695212" target="_blank">Albina Herljevića 14, Tuzla, BiH</a></p>
                </div>
            </div>
        </div> 
    </section>

    <!-- Map starts here -->
    <section class="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1BPQtforCxC7AZjOH-GS2AyQRtSlFe871" width="100%" height="500px"></iframe>
    </section>

<?php get_footer(); ?>