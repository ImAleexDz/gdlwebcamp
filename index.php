<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque debitis similique quis nostrum nesciunt ut aliquid dicta sunt ex ad eveniet laudantium distinctio cum perferendis sit est unde, minima magni?
    </p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="./img/ImagenesSitioWeb/img/bg-talleres.jpg">
        <source src="./img/VideosFondo/video/video.mp4" type="video/mp4">
        <source src="./img/VideosFondo/video/video.webm" type="video/webm">
        <source src="./img/VideosFondo/video/video.ogv" type="video/ogv">
      </video>
    </div> <!--contenedor video -->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
            <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
            <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y Javascript</h3>
              <p><i class="fas fa-clock"></i>16:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Alejandro Díaz Alvarado</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fas fa-clock"></i>20:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Alejandro Díaz Alvarado</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div> <!--ID talleres-->

          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fas fa-clock"></i>10:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Gregorio Sánchez</p>
            </div>
            <div class="detalle-evento">
              <h3>Tecnologías del futuro</h3>
              <p><i class="fas fa-clock"></i>17:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Susan Sánchez</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--Conferencias-->

          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI/UX para móviles</h3>
              <p><i class="fas fa-clock"></i>17:00 hrs</p>
              <p><i class="fas fa-calendar"></i>11 de Dic</p>
              <p><i class="fas fa-user"></i>Harold García</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fas fa-clock"></i>10:00 hrs</p>
              <p><i class="fas fa-calendar"></i>11 de Dic</p>
              <p><i class="fas fa-user"></i>Susana Rivera</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--seminarios-->

        </div> <!--programa-evento-->
      </div> <!--.contenedor-->
    </div> <!--contenido-programa-->
  </section> <!--seccion programa-->

  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="./img/ImagenesSitioWeb/img/invitado1.jpg" alt="imagen invitado">
          <p>
            Rafael Bautista
          </p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="./img/ImagenesSitioWeb/img/invitado2.jpg" alt="imagen invitado">
          <p>
            Shari Herrera
          </p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="./img/ImagenesSitioWeb/img/invitado3.jpg" alt="imagen invitado">
          <p>
            Gregorio Sánchez
          </p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="./img/ImagenesSitioWeb/img/invitado4.jpg" alt="imagen invitado">
          <p>
            Susana Rivera
          </p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="./img/ImagenesSitioWeb/img/invitado5.jpg" alt="imagen invitado">
          <p>
            Harold García
          </p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="./img/ImagenesSitioWeb/img/invitado6.jpg" alt="imagen invitado">
          <p>
            Susan Sánchez
          </p>
        </div>
      </li>
    </ul>
  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p>Invitados</li>
        <li><p class="numero"></p>Talleres</li>
        <li><p class="numero"></p>Dás</li>
        <li><p class="numero"></p>Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cumque expedita laudantium quidem hic error, repellat tempora eos fugiat tenetur consequatur optio saepe nam voluptates! Quam tenetur unde repudiandae numquam!
          </p>
          <footer class="info-testimonial clearfix">
            <img src="./img/ImagenesSitioWeb/img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div> <!--.testimonial-->
  
      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cumque expedita laudantium quidem hic error, repellat tempora eos fugiat tenetur consequatur optio saepe nam voluptates! Quam tenetur unde repudiandae numquam!
          </p>
          <footer class="info-testimonial clearfix">
            <img src="./img/ImagenesSitioWeb/img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div> <!--.testimonial-->
  
      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cumque expedita laudantium quidem hic error, repellat tempora eos fugiat tenetur consequatur optio saepe nam voluptates! Quam tenetur unde repudiandae numquam!
          </p>
          <footer class="info-testimonial clearfix">
            <img src="./img/ImagenesSitioWeb/img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div> <!--.testimonial-->
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>regístrate al newsletter</p>
      <h3>GdlWebCamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div> <!--contenido -->
  </div>

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>días</li>
        <li><p id="horas" class="numero"></p>horas</li>
        <li><p id="minutos" class="numero"></p>minutos</li>
        <li><p id="segundos" class="numero"></p>segundos</li>
      </ul>
    </div>
  </section> <!--Contador-->

  <?php include_once 'includes/templates/footer.php'; ?>