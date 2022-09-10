<?php 
include('header.php')
?>
<section class="slides">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/slide1-1920x466.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block textSlide">
                    <h5>Conoce nuestro Instituto</h5>
                    <a href="acerca.php">Más Información</a>
                </div>
             </div>
            <div class="carousel-item">
                <img src="./assets/images/slide2-1920x466.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block textSlide">
                <h5>Departamentos Disponibles</h5>
                <a href="departamentos.php">Más Información</a>  
            </div>
        </div>
        <div class="carousel-item">
            <img src="./assets/images/slide4-1920x466.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block textSlide">
                <h5>Nuestros servicios</h5>
                <a href="servicios.php">Más Información</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>
   
    <section class="content">
        <h1>Bienvenido al Centro Médico UNADM</h1>
    </section> 
    <section class="table1">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Servicios</th>
                <th scope="col">Información </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Urgencias 24/7</td>
                    <td>
                        <p>En el área de Urgencias brindamos tranquilidad inmediata, debido a que está diseñada y acondicionada para optimizar esos valiosos momentos en los que la vida está en riesgo.
                        Es por ello, que tenemos dispuestas unidades de choque y trauma con equipamiento que cumple con las especificaciones internacionales, equipo de rayos X y ultrasonido para hacer estudios en la misma camilla, acceso inmediato para realizar estudios de tomografía computarizada, quirófanos, así como la atención inmediata en cualquier especialidad.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>Alianza con aseguradoras</td>
                    <td>
                        <p>
                            Sabemos que tu tranquilidad vale mucho, es por eso que en Centro Médico UNADM trabajamos para que no tengas en la mente ninguna preocupación adicional, por ello, trabajamos con las aseguradoras más importantes del país.
                        </p>

                    </td>
                </tr>
                <tr>
                    <td>Excelentes instalaciones</td>
                    <td>
                        <p>
                            En Centro Médico UNADM sabemos que es importante tu comodidad, es por eso que buscamos brindarte las mejores instalaciones en tu visita para que te sientas como en casa.
                        </p>

                    </td>
                </tr>
                <tr>
                    <td>Todas las especialidades</td>
                    <td>
                        <p>
                            La complejidad de la salud humana y el desarrollo de las ciencias médicas, han permitido que se tenga un conocimiento profundo y complejo del funcionamiento del cuerpo humano.

                            Lo que nos abre la posibilidad de prevenir, y en su caso, diagnosticar y brindar el mejor tratamiento a cada paciente.

                            En Centro Médico UNADM, nos importa que encuentres en un sólo lugar todas las especialidades médicas, para que siempre recibas la mejor atención en cada uno de nuestros hospitales.
                        </p>

                    </td>
                </tr>
                <tr>
                    <td>Los mejores especialistas</td>
                    <td>
                        <p>
                            En Centro Médico UNADM, buscamos que cada uno de los médicos que forman parte de nuestra familia tengan una excelencia académica y práctica.
                            Pero uno de los rasgos que distingue a los integrantes de nuestra gran familia, es la calidez y la excelencia en el servicio a cada uno de nuestros pacientes, siendo éstos, nuestro motivo de existir.
                        </p>

                    </td>
                </tr>
                <tr>
                    <td>Atención de calidad</td>
                    <td>
                        <p>
                            En Centro Médico UNADM la atención de calidad se basa en ofrecer un servicio de acuerdo a los requerimientos del paciente. Es satisfacer las necesidades del cliente de manera consciente en todos los aspectos
                        </p>

                    </td>
                </tr>
            </tbody>
        </table>
        <a href="contacto.php" class="btn btn-primary" >Contáctanos</a>

    </section>
    <section class="table2">
        <h2>Nuestros Médicos</h2>
        <div class="medicos">
            <div class="medicos__item shadow">
                <img src="./assets/images/dr1.jpg" alt="" class="medicos__item__img">
                <p class="medicos__item__nombre">Dr. Andrea Fanti </p>
                <p class="medicos__item__especialidad">Cardiología</p>
            </div>
            <div class="medicos__item shadow">
                <img src="./assets/images/dr2.jpg" alt="" class="medicos__item__img">
                <p class="medicos__item__nombre">Dr. Shaun Murphy </p>
                <p class="medicos__item__especialidad">Oncología</p>
            </div>
            <div class="medicos__item shadow">
                <img src="./assets/images/dr3.jpg" alt="" class="medicos__item__img">
                <p class="medicos__item__nombre">Dr. Gregory House </p>
                <p class="medicos__item__especialidad">Terapía Intensiva</p>
            </div>
        </div>
    </section>
<?php 
    include('footer.php');
?>