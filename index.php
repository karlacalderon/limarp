<!doctype html>
<html amp lang="en">

<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>LIMARP - </title>
    <link rel="canonical" href="https://amp.dev/es/documentation/guides-and-tutorials/start/create/basic_markup/">
    <script async custom-element="amp-call-tracking" src="https://cdn.ampproject.org/v0/amp-call-tracking-0.1.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <style amp-custom>
        <?php include 'style.css';
        ?>

    </style>
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

    </style><noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }

        </style>
    </noscript>
</head>

<body>
    <?php include 'menu.php'; ?>
    <amp-video width="640" height="360" layout="responsive" src="https://neuron-armfuls.000webhostapp.com/img/head-video.mp4" autoplay loop></amp-video>

    <div class="header--welcome col-11">
        <h2><?php if(pll_current_language() == 'es') { echo 'LIMARP';}  else if(pll_current_language() == 'en') {echo 'Welcome to LIMARP'; } ?></h2>
        <h1><?php if(pll_current_language() == 'es') { echo 'UN CENTRO DE EXCELENCIA INTERNACIONAL PARA CIRUGÍA BARIÁTRICA';}  else if(pll_current_language() == 'en') {echo 'AN INTERNATIONAL CENTER OF EXCELLENCE FOR BARIATRIC SURGERY'; } ?> </h1>
        <p><a href="" title="Limarp home">LIMARP®️</a>
            <?php if(pll_current_language() == 'es') { echo 'es un centro bariátrico de excelencia reconocido a nivel internacional y ubicado en Tijuana, México. LIMARP se distingue de manera notable por sus altos estándares de calidad, liderazgo y compromiso con el tratamiento y manejo de la obesidad. Bajo la dirección de la doctora Liza María Pompa González, LIMARP ha sido revisado y acreditado como Centro de Excelencia para la Obesidad, lo que significa que hemos superado los más altos estándares de calidad en lo relacionado a tratamientos seguros y efectivos para la pérdida de peso, así como de cuidado médico y quirúrgico.

';}  else if(pll_current_language() == 'en') {echo 'is an internationally renowned bariatric center of excellence in <strong>Tijuana, MX,</strong> that is recognized for its superior quality standards, leadership, and dedication in the treatment and management of obesity. Under the leadership of <a href="">bariatric surgeon Liza María Pompa González,</a> LIMARP is a <strong>reviewed</strong> and <strong>accredited</strong> International Center of Excellence for Obesity, which means we have surpassed the <strong>highest international standards</strong> for quality in <a href="">safe and effective weight loss procedures,</a> and medical care and surgeries. '; } ?>

        </p>
        <div class="img--office">
            <amp-img src="https://neuron-armfuls.000webhostapp.com/img/limarp-office.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="501" width="770" layout="responsive"></amp-img>
            <p><i><?php if(pll_current_language() == 'es') { echo 'Las instalaciones de LIMARP cumplen con los más altos estándares de atención.';}  else if(pll_current_language() == 'en') {echo 'LIMARPs facility is held to the very highest standards of care.'; } ?></i></p>
        </div>
        <p><?php if(pll_current_language() == 'es') { echo 'Nuestras opciones de tratamiento personalizado siempre incluyen un plan nutricional y un régimen de actividad física, y pueden incluir métodos no invasivos como el balón intragástrico o métodos conocidos como de rescate, que incluyen diversos tipos de cirugía bariátrica.
<br><br>
De igual manera, proporcionamos servicios de cirugía plástica y procedimientos de contorneado de la silueta para retirar piel excedente y depósitos de grasa resistentes, ayudando así a que nuestros pacientes luzcan y se sientan lo mejor posible.';}  else if(pll_current_language() == 'en') {echo 'Our <strong>personalized treatment options</strong> always include a unique <a href="">nutrition plan</a> and <a href="">physical activity regimen,</a> and may include non-invasive methods such as an <a href="">intragastric balloon, </a>or rescue methods performed by a highly trained surgeon such as <a href="">various bariatric weight loss surgeries. </a>
<br><br>
We also provide <a href="">plastic surgery services</a> and body contouring procedures to remove excess skin and stubborn fat deposits, helping bariatric surgery patients and others to <strong>look and feel their absolute best.</strong>'; } ?>

        </p>
    </div>

    <div class="team col-12">
        <div class="team--content">
            <h3 class="green">
                <?php if(pll_current_language() == 'es') { echo 'Nuestro equipo está';}  else if(pll_current_language() == 'en') {echo ' Our Team Is'; } ?> </h3>
            <h3 class="white"><?php if(pll_current_language() == 'es') { echo 'DEDICADO A TU TRIUNFO';}  else if(pll_current_language() == 'en') {echo 'DEDICATED TO YOUR SUCCESS'; } ?>
            </h3>
            <amp-video width="640" height="360" layout="responsive" src="https://neuron-armfuls.000webhostapp.com/img/head-video.mp4" autoplay loop></amp-video>
            <p class="col-11"> <?php if(pll_current_language() == 'es') { echo 'Si está listo para perder peso y no recuperarlo, LIMARP puede proporcionarle las herramientas y la orientación que necesita para mejorar su calidad de vida. Nos hemos ganado la reputación de superar las expectativas de los pacientes desde el momento en que nos contactan. Todo nuestro equipo se esfuerza por construir relaciones personales y duraderas con los pacientes y seguir comprometidos con su éxito total.';}  else if(pll_current_language() == 'en') {echo 'If you are ready to lose weight and keep it off, LIMARP can provide you with the tools and guidance you need to improve your quality of life. We have earned a reputation for exceeding patients expectations from the moment they reach out to us. Our entire team strives to build personal and long-lasting relationships with patients and remain committed to their complete success.'; } ?>
            </p>
            <a href="" class="button" title="Limarp videos">

                <?php if(pll_current_language() == 'es') { echo 'Ver más videos';}  else if(pll_current_language() == 'en') {echo 'Watch More Videos'; } ?>
            </a>
        </div>
    </div>

    <div class="choose-full col-12">
        <div class="choose-content col-11">
            <div class="choose-head">
                <h2 class="first">
                    <?php if(pll_current_language() == 'es') { echo '¿Por qué elegir';}  else if(pll_current_language() == 'en') {echo ' Why Choose'; } ?>
                </h2>
                <h2 class="second">LIMARP?</h2>
            </div>

            <div class="choose-flex">
                <div class="choose-elements">
                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/afford.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="145" width="111" layout="responsive"></amp-img>
                    <h3>
                        <?php if(pll_current_language() == 'es') { echo 'Acreditaciones';}  else if(pll_current_language() == 'en') {echo 'Accreditation'; } ?>
                    </h3>
                    <p> <?php if(pll_current_language() == 'es') { echo 'Somos una de las instituciones dedicadas al control de peso más condecoradas en el mundo, por lo que nuestros pacientes pueden tener la tranquilidad de que están recibiendo el mejor cuidado posible.';}  else if(pll_current_language() == 'en') {echo 'We are one of the most decorated weight loss institutions in the world, so our patients can rest assured knowing they are getting the very best care.'; } ?>

                    </p>
                </div>
                <div class="choose-elements">
                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/afford-1.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="139" width="140" layout="responsive"></amp-img>
                    <h3> <?php if(pll_current_language() == 'es') { echo 'Todo incluido';}  else if(pll_current_language() == 'en') {echo 'All-Inclusiveness'; } ?>
                    </h3>
                    <p><?php if(pll_current_language() == 'es') { echo 'Nuestros amigables y atentos cirujanos y personal te ayudarán a planear cada fase de tu tratamiento quirúrgico; desde tu llegada a la ciudad, hasta tu regreso a casa.';}  else if(pll_current_language() == 'en') {echo 'Our friendly, attentive surgeons and staff will help you plan every step of your surgery, from your arrival at our Mexico center to your departure.'; } ?>
                    </p>
                </div>
                <div class="choose-elements">
                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/afford-2.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="113" width="112" layout="responsive"></amp-img>
                    <h3> <?php if(pll_current_language() == 'es') { echo 'Mejores costos';}  else if(pll_current_language() == 'en') {echo 'Affordability'; } ?>
                    </h3>
                    <p> <?php if(pll_current_language() == 'es') { echo 'Debido a que contamos con una conveniente ubicación, en Tijuana Baja California México, tenemos la posibilidad de proporcionar cuidado médico a precios mucho más accesibles que en los hospitales de los Estados Unidos.';}  else if(pll_current_language() == 'en') {echo ' Because we are conveniently located in Tijuana, Mexico, we are able to provide medical care at much more affordable rates than U.S. hospitals.'; } ?></p>
                </div>
            </div>

        </div>

    </div>

    <div class="certifications-section col-12">
        <div class="certificiations-content col-11">
            <div class="certifications-text">
                <h2><?php if(pll_current_language() == 'es') { echo 'Certificaciones';}  else if(pll_current_language() == 'en') {echo 'Certifications'; } ?></h2>
                <p><?php if(pll_current_language() == 'es') { echo 'Nuestras <a href="/our-center">instalaciones de vanguardia</a> están acreditadas como  <a href="http://www.surgicalreview.org/" title="Centro de Excelencia Internacional en Obesidad">Centro de Excelencia Internacional en Obesidad por Surgical Review Corporation </a>(SRC), entre otras certificaciones. Estos reconocimientos dan testimonio de los estándares de nuestros cirujanos en cuanto a seguridad, eficiencia y efectividad en el cuidado médico.';}  else if(pll_current_language() == 'en') {echo 'Our <a href="/our-center">state-of-the-art facility</a> is accredited as an International Center of Excellence for Obesity by the <a href="http://www.surgicalreview.org/">Surgical Review Corporation</a> (SRC), among other certifications. These recognitions are a testament to our surgeons strict standards regarding safe, efficient, and effective care.'; } ?>


                </p>
            </div>
            <div class="certifications-logo">
                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/center-excellence-metabolic.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>

                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/center-excellence-metabolic.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>

                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/center-excellence-metabolic.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>

                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/center-excellence-metabolic.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>

                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/center-excellence-metabolic.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>
                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/center-excellence-metabolic.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>
            </div>
        </div>
    </div>

    <div class="manteining-section col-12">
        <div class="manteining-content">
            <div class="manteining-text">
                <h2><?php if(pll_current_language() == 'es') { echo 'Manteniendo';}  else if(pll_current_language() == 'en') {echo 'Maintaining'; } ?></h2>
                <h3><?php if(pll_current_language() == 'es') { echo 'LOS MÁS ALTOS ESTÁNDARES DE ACREDITACIÓN';}  else if(pll_current_language() == 'en') {echo 'THE HIGHEST LEVELS OF ACCREDITATION'; } ?>
                </h3>
            </div>
            <div class="manteining-first col-11">
                <p>
                    <?php if(pll_current_language() == 'es') { echo 'LIMARP Centro de Excelencia Internacional en Obesidad está plenamente certificado por Surgical Review Corporation (SRC). Este organismo internacional examina centros de cirugía bariátrica en todo el mundo, revisando diferentes aspectos de sus instalaciones y concediendo la certificación solo si comprueban su excelencia en diversas áreas, como son experiencia, compromiso con la excelencia y otros factores importantes.  
<br><br>
Nuestra unidad es uno de los pocos centros de obesidad en Tijuana, y en todo México, que han alcanzado este nivel de excelencia.';}  else if(pll_current_language() == 'en') {echo '<a href="">LIMARP International Center of Excellence for Obesity</a> is <strong>fully accredited</strong> by the Surgical Review Corporation (SRC). This internationally recognized organization reviews bariatric surgery centers worldwide, examining different aspects of facilities and granting them accreditation if they prove excellence in a variety of areas, including <strong>experience, commitment to excellence</strong>, and <strong>other important factors. </strong>
<br><br>
Our facility is one of the only weight loss centers in Tijuana and all of Mexico to have achieved this level of excellence.'; } ?>
                </p>
                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/mainteince-limarp.jpg" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="223" width="960" layout="responsive"></amp-img><i><?php if(pll_current_language() == 'es') { echo 'Nuestras instalaciones están totalmente acreditadas por la Surgical Review Corporation (SRC).';}  else if(pll_current_language() == 'en') {echo ' Our facility is fully accredited by the Surgical Review Corporation (SRC).'; } ?></i><br><br>
                <p>
                    <?php if(pll_current_language() == 'es') { echo 'El programa de certificación de Centro Internacional de Excelencia (ICE por sus siglas en inglés), garantiza que los pacientes que busquen cirugía bariátrica o metabólica reciban un cuidado seguro y de la mayor calidad posible, sin importar en qué lugar del mundo se encuentre el centro que ostenta la certificación. Como uno de los primeros centros ICE certificados fuera de los Estados Unidos,  LIMARP®️ provee un cuidado exclusivo e incomparable a todos sus pacientes, en el marco de uno de los centros más avanzados del mundo. Esta distinción nos fue otorgada tras una serie de rigurosas revisiones de nuestras instalaciones y procesos por parte de un equipo médico experto a lo largo de dos años. Ellos examinaron cada fase de nuestra práctica, incluyendo nuestro personal, equipo quirúrgico e instalaciones para constatar nuestros altos estándares de calidad. Muy pocos hospitales en los Estados Unidos, y aún menos a nivel internacional, logran este estatus. 
<br><br>
Además de nuestra certificación por parte de SRC, mantenemos de los más altos niveles de acreditación en todo México y nos regimos por los más avanzados estándares de seguridad.';}  else if(pll_current_language() == 'en') {echo 'The International Center of Excellence (ICE) program certification guarantees that patients who seek bariatric or metabolic surgery receive the <strong>safest and highest quality care</strong>, regardless of where in the world the procedure is performed. As one of the first ICEs outside of the United States, LIMARP provides <strong>exclusive</strong> and <strong>unparalleled</strong> care to patients at one of the most advanced facilities in the world. We were awarded this prestigious honor after a series of rigorous onsite reviews by experts in the medical field over two yearlong periods. They examined every facet of the practice, staff, and facilities to ensure that our high quality of standards was consistently maintained. Very few U.S. hospitals, and even fewer international hospitals, achieve this status.
<br><br>
In addition to our SRC-certification, we maintain some of the highest levels of accreditation and rigorous safety standards in all of Mexico.'; } ?>
                </p>

            </div>
        </div>
    </div>



    <div class="reviews-section col-7">
        <div class="reviews-people">
            <a href=" <?php if(pll_current_language() == 'es') { echo  'https://goo.gl/maps/Y3eMdmjB9JwTimqCA';}  else if(pll_current_language() == 'en') { echo  'https://goo.gl/maps/2DpjhboMq6kyUPYYA'; } ?>
                 " title="">
                <div class="box-head col-11">
                    <div class="box-photo">
                        <amp-img src="https://neuron-armfuls.000webhostapp.com/img/review-google.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>

                        <div class="box-info">
                            <div class="name"> <?php if(pll_current_language() == 'es') { echo  'Rochinirasema R.';}  else if(pll_current_language() == 'en') { echo  'Carie Fitzgerald'; } ?></div>
                            <div class="date"> <?php if(pll_current_language() == 'es') { echo  'Octubre 2018';}  else if(pll_current_language() == 'en') { echo  'July 2019'; } ?></div>
                            <amp-img class="stars" src="https://neuron-armfuls.000webhostapp.com/img/review-stars.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="30" width="135" layout="responsive"></amp-img>
                        </div>
                    </div>


                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/google-review.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="65" width="65"></amp-img>
                </div>
                <p class="col-11">
                    <?php if(pll_current_language() == 'es') { echo  'Soy Irasema Rochin y tengo tres días de que me hicieron la manga gastrica, quiero dar gracias a todo el equipo de la Dra. Pompa Gonzales y claro que a ella misma también. Son un equipo de doctores , enfermeros etc súper amables , me trataron con cariño y respeto desde el primer día. Ahorita no recuerdo todos los nombres por qué sales un poco aturdida por la anestesia pero Ramiro es muy amable, al igual q recepción , Dr Luis Chaves, Jose súper enfermero, la psicóloga muy amable y profesional , ni que decir del Dr. Mariano súper humano y en fin todo el personal . Se me escapa algún nombre lo siento,GRACIAS y si me preguntan volverías a ir? CLARO QUE VOLVERÍA A IR A LIMARP SIN PENSARLO';}  else if(pll_current_language() == 'en') { echo  ' I had a GREAT experience from the beginning to where their driver picked me up at the airport and their driver took me back to the airport. Very professional staff, nice and curtious. The hospital is super clean. I was sceptical about going to Mexico by myself for the gastric sleeve but I can´t stress enough how safe I felt and was. I highly highly recommend Limarp.'; } ?>

                    <br><b class="btn-rev"><?php if(pll_current_language() == 'es') { echo  'Ver en Google+';}  else if(pll_current_language() == 'en') { echo  'View On Google+'; } ?></b></p>

            </a>
        </div>
        <div class="reviews-people">
            <a href="https://www.facebook.com/pg/dr.liza.maria.pompa/reviews/" title="">
                <div class="box-head col-11">
                    <div class="box-photo">
                        <amp-img src="https://neuron-armfuls.000webhostapp.com/img/review-facebook.jpg" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>

                        <div class="box-info">
                            <div class="name"><?php if(pll_current_language() == 'es') { echo  'Agosto 2019';}  else if(pll_current_language() == 'en') { echo  '  Trish Gavin'; } ?></div>
                            <div class="date"><?php if(pll_current_language() == 'es') { echo  'Yuly V.';}  else if(pll_current_language() == 'en') { echo  ' September 2016'; } ?>
                            </div>
                            <amp-img class="stars" src="https://neuron-armfuls.000webhostapp.com/img/review-stars.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="30" width="135" layout="responsive"></amp-img>
                        </div>
                    </div>


                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/facebook-review.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="65" width="65"></amp-img>
                </div>
                <p class="col-11"><?php if(pll_current_language() == 'es') { echo  'El mejor. Lugar Donde la comunicacion. Y atención. Con los pacientes es única muy buen servicio y atención todos son especiales ..es como sentirse en casa.';}  else if(pll_current_language() == 'en') { echo  'I had my sleeve surgery on November 12, 2014. Limarp hospital is an ICE and it shows. It is by far the best hospital I have ever been in. The care & concern provided by all there was impressive, even to the guy who cleaned the floors. They all acted in a kind caring yet professional way & took care of everything I needed. 5 out of 5 Stars!! '; } ?>
                    <br><b class="btn-rev"><?php if(pll_current_language() == 'es') { echo  ' Ver en Facebook';}  else if(pll_current_language() == 'en') { echo  ' View On Facebook'; } ?>
                    </b></p>
            </a>
        </div>
    </div>
    <div class="qualified-section col-12">
        <div class="qualified-head col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  'Un equipo quirúrgico';}  else if(pll_current_language() == 'en') { echo  'A Compassionate & Qualified'; } ?></h3>
            <h4><?php if(pll_current_language() == 'es') { echo  'COMPASIVO Y CALIFICADO';}  else if(pll_current_language() == 'en') { echo  'SURGICAL TEAM'; } ?>
            </h4>
        </div>
        <div class="qualified-content col-11">
            <div class="quialified-text">
                <p><?php if(pll_current_language() == 'es') { echo  'Cada miembro de nuestros equipos quirúrgicos y médicos, desde nuestros cirujanos hasta nuestro personal de enfermería y doctores, está completamente comprometido con tu salud y éxito. 
<br><br>
Combinamos un entrenamiento extensivo y altamente especializado en tratamientos de pérdida de peso y cirugía bariátrica, con una habilidad para lograr una relación personal y duradera con cada uno de nuestros pacientes. Bajo el liderazgo de la doctora Pompa González, atendemos a pacientes de todas partes del mundo, desde México hasta Europa. 
<br><br>
¿Estás listo para experimentar personalmente este nivel de cuidado? Solicita una cita en línea o llama al';}  else if(pll_current_language() == 'en') { echo  'Each member of our <a href="">surgical</a> and medical team, from our surgeons and doctors to our nurses, is committed to your health and success. We combine in-depth training in the specialized fields of weight loss treatment and bariatric surgery with an ability to form personal and lasting relationships with each of our patients. Led by Dr. Pompa González, we treat patients from all corners of the world, from Mexico to Europe.
<br><br>
Ready to experience this high level of care firsthand? Request your consultation online or call us:'; } ?>

                </p>
                <p class="tel">(619) 373-0229</p>
            </div>
            <div class="quialified-img">
                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/dra-liza-pompa-qualified.jpg" alt="Dr. Liza Pompa Qualified Surgical Team" title="Dr. Liza Pompa Qualified Surgical Team" height="429" width="600" layout="responsive"></amp-img>

                <i><?php if(pll_current_language() == 'es') { echo  'La doctora Liza María Pompa González es quien dirige a nuestro capacitado equipo.';}  else if(pll_current_language() == 'en') { echo  'Our highly trained team is led by Dr. Liza María Pompa González.'; } ?></i>
            </div>
        </div>
    </div>
    <div class="popular-services-section col-12">
        <div class="popular-services-header col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  'Nuestros servicios de';}  else if(pll_current_language() == 'en') { echo  ' Our Most Sought After'; } ?>
            </h3>
            <h4><?php if(pll_current_language() == 'es') { echo  'CIRUGÍA BARIÁTRICA MÁS SOLICITADOS';}  else if(pll_current_language() == 'en') { echo  'BARIATRIC SURGICAL SERVICES'; } ?></h4>
        </div>

        <div class="popular-services-body col-11">


            <div class="popular-serv">
                <a href="">
                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/gastric-sleeve.png" height="420" width="420" layout="responsive"></amp-img>
                    <h2>
                        <?php if(pll_current_language() == 'es') { echo  'Manga Gástrica';}  else if(pll_current_language() == 'en') { echo  'Gastric Sleeve'; } ?></h2>
                    <p><?php if(pll_current_language() == 'es') { echo  'La cirugía de manga gástrica es una cirugía bariátrica restrictiva que reduce de manera considerable el tamaño del estómago, controlando así tu apetito y facilitando una pérdida de peso dramática y sostenida.&nbsp;Durante una manga gástrica, nuestro cirujano bariatra divide el estómago del paciente en dos partes, retirando cerca del 90 por ciento del mismo.';}  else if(pll_current_language() == 'en') { echo  'Gastric sleeve surgery is a<strong> restrictive type of bariatric surgery</strong> that drastically reduces the size of the stomach, managing your appetite and encouraging dramatic, long-term weight loss. During a gastric sleeve, our bariatric surgeon will divide the stomach into two parts, removing about 90 percent.'; } ?>
                    </p>
                </a>
            </div>
            <div class="popular-serv">
                <a href="">
                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/gastric-baypass.png" height="420" width="420" layout="responsive"></amp-img>
                    <h2> <?php if(pll_current_language() == 'es') { echo  'Baypass Gástrico';}  else if(pll_current_language() == 'en') { echo  'Gastric Bypass'; } ?></h2>
                    <p><?php if(pll_current_language() == 'es') { echo  'El bypass gástrico representa una cirugía bariátrica restrictiva y malabsortiva, lo que significa que limita de manera importante la cantidad de comida que puedes ingerir y cambia la manera en que absorbes calorías y nutrientes.&nbsp;Durante el procedimiento, nuestro cirujano bariatra divide el estómago en dos bolsas, para posteriormente redirigir la bolsa menor hacia la parte inferior del intestino.';}  else if(pll_current_language() == 'en') { echo  ' Gastric bypass is a <strong>restrictive and malabsorptive</strong> form of bariatric surgery, meaning it limits how much you can eat and changes how you absorb calories and nutrients. During the procedure, our bariatric surgeon will divide the stomach into two pouches, then reroute the smaller pouch to the lower intestine.'; } ?>

                    </p>
                </a>
            </div>

            <div class="popular-serv">
                <a href="">
                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/mini-gastric-baypass.png" height="420" width="420" layout="responsive"></amp-img>
                    <h2><?php if(pll_current_language() == 'es') { echo  'Mini Baypass Gástrico';}  else if(pll_current_language() == 'en') { echo  'Mini Gastric Bypass'; } ?> </h2>
                    <p><?php if(pll_current_language() == 'es') { echo  'Un mini bypass gástrico es una forma menos invasiva de la cirugía tradicional de bypass gástrico. Al tratarse de un procedimiento menos invasivo y con menor riesgo, que facilita una pérdida de peso muy drástica a un menor costo, esta cirugía es una opción muy popular entre los pacientes de nuestra clínica, ubicada en Tijuana, México.';}  else if(pll_current_language() == 'en') { echo  'A mini gastric bypass is a less <strong>invasive form</strong> of a traditional gastric bypass surgery. Because it can help you achieve drastic weight loss with a lower cost, less extensive bariatric surgery, and reduced risk, it is a very popular choice among patients at our Tijuana, Mexico, office.'; } ?> </p>
                </a>
            </div>

            <div class="popular-serv">
                <a href="">
                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/intagrastric-ballon.png" height="420" width="420" layout="responsive"></amp-img>
                    <h2><?php if(pll_current_language() == 'es') { echo  'Balón Intragástrico';}  else if(pll_current_language() == 'en') { echo  'Intragastric Balloon'; } ?> </h2>
                    <p><?php if(pll_current_language() == 'es') { echo  'Un número cada vez mayor de pacientes eligen este método no quirúrgico para la reducción de peso. Se trata del avanzado balón intragástrico ORBERA, que promueve resultados rápidos con un mínimo de efectos secundarios. Este sencillo dispositivo reduce el volumen del estómago por la mitad hasta que se vacía y retira, una vez logrado su propósito.';}  else if(pll_current_language() == 'en') { echo  '
                More and more patients are turning to this <strong>non-surgical method of weight loss</strong>. We offer the advanced ORBERA™ intragastric balloon, which promotes rapid results with minimal side effects. This simple device reduces the stomach´s volume by half until it is deflated and removed.'; } ?>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="popular-services-section col-12">
        <div class="popular-services-header col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  'Todos nuestros procedimientos';}  else if(pll_current_language() == 'en') { echo  'All Bariatric Surgery'; } ?>
            </h3>
            <h4><?php if(pll_current_language() == 'es') { echo  'DE CIRUGÍA BARIÁTRICA';}  else if(pll_current_language() == 'en') { echo  'PROCEDURES'; } ?></h4>
        </div>
        <div class="popular-services-list-center col-6">
            <ul class="popular-services-list col-5">
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Manga gástrica
';}  else if(pll_current_language() == 'en') { echo  'Gastric Sleeve Surgery'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Cirugía bariátrica de revisión';}  else if(pll_current_language() == 'en') { echo  'Revision Bariatric Surgery'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Bypass gástrico';}  else if(pll_current_language() == 'en') { echo  'Gastric Bypass Surgery'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Mini bypass gástrico';}  else if(pll_current_language() == 'en') { echo  'Mini Gastric Bypass '; } ?></a></li>

            </ul>

            <ul class="popular-services-list col-5">
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Balón intragástrico';}  else if(pll_current_language() == 'en') { echo  'Intragastric Balloon'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Switch duodenal';}  else if(pll_current_language() == 'en') { echo  'Duodenal Switch'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Cirugía laparoscópica';}  else if(pll_current_language() == 'en') { echo  'Laparoscopic Surgery'; } ?></a></li>

            </ul>
        </div>
    </div>
    <div class="popular-services-section col-12">
        <div class="popular-services-header col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  'Nuestros resultados';}  else if(pll_current_language() == 'en') { echo  'Our Results'; } ?>
            </h3>
            <h4><?php if(pll_current_language() == 'es') { echo  'HABLAN POR SÍ SOLOS';}  else if(pll_current_language() == 'en') { echo  'SPEAK FOR THEMSELVES'; } ?></h4>
        </div>

        <div class="popular-services-list-center col-6">

            <div class="col-5">
                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/before-gastric-sleeve.jpg" alt="Before gastric sleeve" title="Before gastric sleeve" height="1375" width="661" layout="responsive"></amp-img>
            </div>

            <div class="col-5">
                <amp-img src="https://neuron-armfuls.000webhostapp.com/img/after-gastric-sleeve.jpg" alt="After gastric sleeve" title="After gastric sleeve" height="1375" width="661" layout="responsive"></amp-img>
            </div>


            <i class="after-patient col-12">
                <?php if(pll_current_language() == 'es') { echo  'Mediante la cirugía bariátrica, esta paciente obtuvo resultados que transformaron su vida.';}  else if(pll_current_language() == 'en') { echo  'This patient saw incredible, life-changing results after bariatric surgery.'; } ?></i>
        </div>
    </div>
    <div class="popular-services-section col-12">
        <div class="popular-services-header col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  'Una vista más detallada de la cirugía de manga gástrica';}  else if(pll_current_language() == 'en') { echo  'A Closer Look at Gastric Sleeve Surgery'; } ?>
            </h3>
            <h4><?php if(pll_current_language() == 'es') { echo  '(GASTRECTOMÍA VERTICAL EN MANGA)';}  else if(pll_current_language() == 'en') { echo  '(SLEEVE GASTRECTOMY)'; } ?></h4>
        </div>

        <p class="home-gastric-section col-11">
            <?php if(pll_current_language() == 'es') { echo  'La cirugía de manga gástrica (gastrectomía vertical en manga) es una cirugía restrictiva para bajar de peso que resulta segura, efectiva y por ende popular. Los candidatos para la gastrectomía vertical en manga deben tener un índice de masa corporal (IMC) mayor a 40 y haber intentado otros métodos para bajar de peso incluyendo dieta y ejercicio sin éxito. Esta cirugía se ejecuta de manera laparoscópica. Esta técnica conservadora se realiza mediante unas pequeñas incisiones y es menos riesgosa que una cirugía tradicional abierta. Después de la manga gástrica, los pacientes se quedan en el hospital uno o dos días. La gastrectomía vertical es una cirugía más corta y sencilla, lo que hace que el periodo de recuperación sea más rápido que el de otros procedimientos.';}  else if(pll_current_language() == 'en') { echo  'Gastric sleeve (sleeve gastrectomy) surgery is a safe, effective, and popular type of restrictive weight loss surgery. Candidates for sleeve gastrectomy should have a body mass index (BMI) over 40 and should have tried other methods of weight loss including diet and exercise without much success. The surgery is performed laparoscopically. This conservative technique requires a few small incisions and is less risky than traditional open surgery. After a gastric sleeve, patients stay at our hospital for one to two days. Sleeve gastrectomy requires a shorter, simpler surgery, which makes the recovery period much faster compared to other procedures. '; } ?>
        </p>
        <div class="team--content gastric-section">
            <a href="" class="button" title="Limarp videos">

                <?php if(pll_current_language() == 'es') { echo 'Ver más videos';}  else if(pll_current_language() == 'en') {echo 'Watch More Videos'; } ?>
            </a></div>
    </div>
    <div class="popular-services-section col-12">
        <div class="popular-services-header col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  'Nuestros servicios de';}  else if(pll_current_language() == 'en') { echo  'Our Most Sought After'; } ?>
            </h3>
            <h4><?php if(pll_current_language() == 'es') { echo  'CIRUGÍA PLÁSTICA MÁS SOLICITADOS';}  else if(pll_current_language() == 'en') { echo  'PLASTIC SURGICAL SERVICES'; } ?></h4>
        </div>
        
        <div class="popular-plastic-services col-8">
        <div class="plastic-services">
            <a href="">
            <amp-img src="https://neuron-armfuls.000webhostapp.com/img/plastic-services.jpg" alt="After gastric sleeve" title="After gastric sleeve" height="300" width="300" layout="responsive"></amp-img> 
            <h3><?php if(pll_current_language() == 'es') { echo  '  Implantes de mama';}  else if(pll_current_language() == 'en') { echo  'Breast Implants'; } ?>
            </h3>
            <p><?php if(pll_current_language() == 'es') { echo  '  A muchas pacientes que logran una pérdida de peso considerable, les quedan los senos muy flácidos y caídos. Los implantes de mama pueden restaurar el volumen perdido y ofrecer una figura rejuvenecida.';}  else if(pll_current_language() == 'en') { echo  'Many patients who achieve dramatic weight loss experience sagging breasts. Breast implants can restore lost volume and a more youthful shape.'; } ?>
            </p>
            </a>
        </div>
            
            
        <div class="plastic-services">
            <a href="">
            <amp-img src="https://neuron-armfuls.000webhostapp.com/img/plastic-services-1.jpg" alt="After gastric sleeve" title="After gastric sleeve" height="300" width="300" layout="responsive"></amp-img> 
            <h3><?php if(pll_current_language() == 'es') { echo  '  Lipectomía';}  else if(pll_current_language() == 'en') { echo  'Tummy Tuck'; } ?>
             </h3>
            <p><?php if(pll_current_language() == 'es') { echo  '  La pérdida de peso puede resultar en piel flácida y colgada, especialmente en el torso. Retirar la piel excedente mediante una lipectomía es una solución sencilla y efectiva.';}  else if(pll_current_language() == 'en') { echo  'Weight loss can leave excess skin, especially in the midsection. Surgical removal with a tummy tuck is simply the most effective solution.'; } ?></p></a>
        </div>
            
            
        <div class="plastic-services">
            <a href="">
            <amp-img src="https://neuron-armfuls.000webhostapp.com/img/plastic-services-2.jpg" alt="After gastric sleeve" title="After gastric sleeve" height="300" width="300" layout="responsive"></amp-img> 
            <h3>Mommy Makeover</h3>
            <p><?php if(pll_current_language() == 'es') { echo  '  El embarazo y la lactancia pueden afectar de manera importante tu figura y confianza. Nosotros podemos combinar la cirugía de busto con otros procedimientos para crear un plan personalizado.';}  else if(pll_current_language() == 'en') { echo  'Pregnancy and breastfeeding can seriously alter your figure and confidence. We can combine breast surgery and other procedures for a custom treatment plan.'; } ?>
                </p>
            </a>
        </div>
        
        </div>
    </div>
    <div class="popular-services-section col-12">
        <div class="popular-services-header col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  'Procedimientos de';}  else if(pll_current_language() == 'en') { echo  'Plastic Surgery'; } ?>
            </h3>
            <h4><?php if(pll_current_language() == 'es') { echo  'CIRUGÍA PLÁSTICA';}  else if(pll_current_language() == 'en') { echo  'PROCEDURES'; } ?></h4>
        </div>
        <div class="popular-services-list-center col-6">
            <ul class="popular-services-list col-5">
                <li><a href="
                    <?php if(pll_current_language() == 'es') { echo  'https://limarp--com--forever-4123729.cms.eiidev.com/inicio/cirugia-plastica/implantes-de-busto" title="Implantes de busto';}  else if(pll_current_language() == 'en') { echo  '#'; } ?>"><?php if(pll_current_language() == 'es') { echo  'Implantes de mama
';}  else if(pll_current_language() == 'en') { echo  'Breast Implants'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Liposucción';}  else if(pll_current_language() == 'en') { echo  'Liposuction'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Lipectomia';}  else if(pll_current_language() == 'en') { echo  'Tummy Tuck'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Lipectomia mini';}  else if(pll_current_language() == 'en') { echo  'Mini Tummy Tuck '; } ?></a></li>
                 <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Levantamiento de glúteo
';}  else if(pll_current_language() == 'en') { echo  'Butt Lift '; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Cirugía plástica posbariátrica';}  else if(pll_current_language() == 'en') { echo  'Post-Bariatric Plastic Surgery'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Reducción de busto';}  else if(pll_current_language() == 'en') { echo  'Breast Reduction'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Levantamiento de busto';}  else if(pll_current_language() == 'en') { echo  'Breast Lift'; } ?></a></li>

            </ul>

            <ul class="popular-services-list col-5">
                 <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Levantamiento de busto con implantes';}  else if(pll_current_language() == 'en') { echo  'Breast Lift with Implants'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Aumento de busto';}  else if(pll_current_language() == 'en') { echo  'Breast Augmentation'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Levantamiento facil completo';}  else if(pll_current_language() == 'en') { echo  'Full Facelift '; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Levantamiento facil de medio rostro';}  else if(pll_current_language() == 'en') { echo  'Mid Facelift '; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Levantamiento facial mini';}  else if(pll_current_language() == 'en') { echo  'Mini Facelift '; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Levantamiento de frente';}  else if(pll_current_language() == 'en') { echo  'Brow Lift'; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Rinoplastia';}  else if(pll_current_language() == 'en') { echo  'Rhinoplasty '; } ?></a></li>
                <li><a href=""><?php if(pll_current_language() == 'es') { echo  'Blefaroplastia';}  else if(pll_current_language() == 'en') { echo  'Blepharoplasty '; } ?></a></li>

            </ul>
        </div>
    </div>
    <div class="popular-services-section col-12">
        <div class="popular-services-header col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  'Obtén una mejor atención que la que recibirías';}  else if(pll_current_language() == 'en') { echo  'Get Better Care'; } ?>
            </h3>
            <h4><?php if(pll_current_language() == 'es') { echo  'EN LOS ESTADOS UNIDOS';}  else if(pll_current_language() == 'en') { echo  'THAN YOU WOULD IN THE U.S'; } ?></h4>
        </div>

        <p class="home-gastric-section col-11">
            <?php if(pll_current_language() == 'es') { echo  'Nuestras instalaciones son de las pocas en México que proporcionan un programa bariátrico integral completo y establecido. Además, nuestro centro ha superado los estándares de excelencia de los Estados Unidos en materia de procedimientos para la reducción de peso seguros y efectivos. Estamos reconocidos internacionalmente como uno de los centros de turismo médico para el paciente con sobrepeso y obesidad más especializados. Nuestras instalaciones de vanguardia se encuentran dentro del magnífico complejo de Las Torres del Grand Hotel–Plaza Agua Caliente, donde se goza de un ambiente relajado con hermosas vistas al campo de golf del Club Campestre de Tijuana, lo que contribuye a una experiencia de lo más placentera posible.<br><br>
      <amp-img src="https://neuron-armfuls.000webhostapp.com/img/tijuana-plastic-surgery.jpeg" alt="Before gastric sleeve" title="Before gastric sleeve" height="150" width="210" layout="responsive"></amp-img>
  <i>Nos encontramos dentro del magnífico complejo del Grand Hotel, con relajantes vistas al hermoso campo de golf del Club Campestre de Tijuana.</i><br><br>
Los pacientes LIMARP también reciben tratamientos personalizados que incluyen planes nutricionales y de actividad física, métodos no invasivos como el balón intragástrico o métodos de rescate como lo son los diversos tipos de cirugía para la pérdida de peso que realizamos. Nuestro departamento de cirugía plástica también realiza procedimientos para el contorno de la figura, mediante los cuales se puede retirar la piel excedente y los depósitos de grasa resistentes, ayudando así al paciente bariátrico a afinar su figura tras la pérdida de peso.';}  else if(pll_current_language() == 'en') { echo  'Our facility is one of the few centers in Mexico that provides a complete and established integrative bariatric weight loss program. In addition, our center has surpassed the United States standards for excellence in safe and effective weight loss procedures. We have been internationally recognized as one of the most specialized and advanced medical tourism centers for overweight and obese patients. Our state-of-the-art facilities are located within the stunning Grand Hotel – Plaza Agua Caliente Twin Towers complex in a relaxing environment with a beautiful view of Tijuana’s Country Club Golf Course to guarantee your experience is as pleasant as possible.<br><br>
<amp-img src="https://neuron-armfuls.000webhostapp.com/img/tijuana-plastic-surgery.jpeg" alt="Before gastric sleeve" title="Before gastric sleeve" height="150" width="210" layout="responsive"></amp-img> <i>We are located in the beautiful Grand Hotel with soothing views of Tijuana’s Country Club Golf Course.</i><br><br>
LIMARP patients also receive personalized treatment options, which can include a unique nutrition plan and physical activity regimen, non-invasive methods such as an intragastric balloon, or rescue methods such as various bariatric weight loss surgeries. Our plastic surgery department also provides body contouring procedures to remove excess skin and stubborn fat deposits, helping bariatric surgery patients to further refine their figures following weight loss. '; } ?>
        </p></div>
    
    
   <!--FALTA REVIEWS EN INGLÉS--> 
    <div class="reviews-section col-7">
        <div class="reviews-people">
            <a href=" <?php if(pll_current_language() == 'es') { echo  'https://goo.gl/maps/Y3eMdmjB9JwTimqCA';}  else if(pll_current_language() == 'en') { echo  'https://goo.gl/maps/2DpjhboMq6kyUPYYA'; } ?>
                 " title="">
                <div class="box-head col-11">
                    <div class="box-photo">
                        <amp-img src="https://neuron-armfuls.000webhostapp.com/img/review-google.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>

                        <div class="box-info">
                            <div class="name"> <?php if(pll_current_language() == 'es') { echo  'Melissa G.';}  else if(pll_current_language() == 'en') { echo  'Carie Fitzgerald'; } ?></div>
                            <div class="date"> <?php if(pll_current_language() == 'es') { echo  'Marzo 2019';}  else if(pll_current_language() == 'en') { echo  'July 2019'; } ?></div>
                            <amp-img class="stars" src="https://neuron-armfuls.000webhostapp.com/img/review-stars.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="30" width="135" layout="responsive"></amp-img>
                        </div>
                    </div>


                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/google-review.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="65" width="65"></amp-img>
                </div>
                <p class="col-11">
                    <?php if(pll_current_language() == 'es') { echo  'El mejor equipo amigables y profesional cambiaron mi vida de la mejor manera la doctora pompa es una persona con un corazon del tamaño del mundo se toma el tiempo de introducirse y te hace sentir en familia todo fue muy accesible desde la operacion la recuperación y las citas muy atentos todos y sobre todo super limpio gracias a todos super recomendado';}  else if(pll_current_language() == 'en') { echo  ' I had a GREAT experience from the beginning to where their driver picked me up at the airport and their driver took me back to the airport. Very professional staff, nice and curtious. The hospital is super clean. I was sceptical about going to Mexico by myself for the gastric sleeve but I can´t stress enough how safe I felt and was. I highly highly recommend Limarp.'; } ?>

                    <br><b class="btn-rev"><?php if(pll_current_language() == 'es') { echo  'Ver en Yelp';}  else if(pll_current_language() == 'en') { echo  'View On Yelp'; } ?></b></p>

            </a>
        </div>
        <div class="reviews-people">
            <a href="https://www.facebook.com/pg/dr.liza.maria.pompa/reviews/" title="">
                <div class="box-head col-11">
                    <div class="box-photo">
                        <amp-img src="https://neuron-armfuls.000webhostapp.com/img/review-facebook.jpg" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="300" width="300" layout="responsive"></amp-img>

                        <div class="box-info">
                            <div class="name"><?php if(pll_current_language() == 'es') { echo  'Marina V.';}  else if(pll_current_language() == 'en') { echo  '  Trish Gavin'; } ?></div>
                            <div class="date"><?php if(pll_current_language() == 'es') { echo  'Noviembre 2018';}  else if(pll_current_language() == 'en') { echo  ' September 2016'; } ?>
                            </div>
                            <amp-img class="stars" src="https://neuron-armfuls.000webhostapp.com/img/review-stars.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="30" width="135" layout="responsive"></amp-img>
                        </div>
                    </div>


                    <amp-img src="https://neuron-armfuls.000webhostapp.com/img/facebook-review.png" alt="LIMARP Bariatric center Tijuana" title="LIMARP Bariatric center Tijuana" height="65" width="65"></amp-img>
                </div>
                <p class="col-11"><?php if(pll_current_language() == 'es') { echo  'Es una Doctora Cirujana muy profesional y preparada al 100% con una atención impecable hacia sus pacientes.';}  else if(pll_current_language() == 'en') { echo  'I had my sleeve surgery on November 12, 2014. Limarp hospital is an ICE and it shows. It is by far the best hospital I have ever been in. The care & concern provided by all there was impressive, even to the guy who cleaned the floors. They all acted in a kind caring yet professional way & took care of everything I needed. 5 out of 5 Stars!! '; } ?>
                    <br><b class="btn-rev"><?php if(pll_current_language() == 'es') { echo  ' Ver en Facebook';}  else if(pll_current_language() == 'en') { echo  ' View On Facebook'; } ?>
                    </b></p>
            </a>
        </div>
    </div>
     <!--viaja a méxico para recibir chce-->
    <div class="popular-services-section col-12">
        <div class="popular-services-header col-6">
            <h3><?php if(pll_current_language() == 'es') { echo  '¿Viajar a México para recibir tratamiento médico?';}  else if(pll_current_language() == 'en') { echo  'Traveling to Mexico for Medical Treatment?'; } ?>
            </h3>
            <h4><?php if(pll_current_language() == 'es') { echo  'NOSOTROS FACILITAMOS TODO';}  else if(pll_current_language() == 'en') { echo  'WE MAKE IT EASY'; } ?></h4>
        </div>

        <p class="home-gastric-section col-11"><amp-img src="https://neuron-armfuls.000webhostapp.com/img/travel-tijuana-bariatric-surgery.png" alt="Travel to Mexico for Bariatric Surgery" title="Travel to Mexico for Bariatric Surgery" height="640" width="960" layout="responsive"></amp-img>
            <?php if(pll_current_language() == 'es') { echo  '<i>La doctora Pompa ha operado a paciente de todas partes del mundo</i><br><br>Si te preocupa viajar a México para recibir cirugía, no sientas ansiedad en lo absoluto. Cada año, millones de pacientes viajan a otros países a recibir tratamiento médico. Nuestro amigable y experimentado personal te guiará en cada paso de tu proceso, para que siempre estés informado y mantengas el ánimo en todo momento.  A pesar de que el camino hacia la pérdida de peso es diferente para cada persona, esto es lo que se puede esperar de manera típica:';}  else if(pll_current_language() == 'en') { echo  '<i>Worried about coming to Mexico for surgery?</i>Don´t be anxious. Every year, millions of patients travel to other countries for medical treatment. Our friendly and experienced staff will guide you through every step of the process, helping you feel informed and excited along the way. Although the weight loss journey will vary from patient to patient, here´s what you can typically expect when you get started: 

'; } ?>
        </p></div>
    
    
    
    
    
</body>

</html>
