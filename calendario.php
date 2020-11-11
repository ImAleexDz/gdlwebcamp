<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>

        <?php
            try {
                // Creamos la conexión
                require_once('includes/funciones/bd_conexion.php');
                // Escribimos la consulta
                $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                // Unir tablas con join 
                $sql .= " INNER JOIN categoria_evento ";
                // relacionar tablas mediante id
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                $sql .= " ORDER BY evento_id ";
                //Consultamos la base
                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        ?>

        <div class="calendario">
            <?php 
                //Imprimimos los resultados
                $calendario = array();
                
                while ($eventos = $resultado->fetch_assoc()) { 
                    //Obtiene la fecha del evento
                    $fecha = $eventos['fecha_evento'];

                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
                        'icono' => $eventos['icono'],
                        'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                    );

                    $calendario[$fecha][] = $evento;
                    ?>
                    
                <?php }; //while de fetch_assoc ?>

                <?php
                    //Imprime todos los eventos
                    foreach($calendario as $dia => $lista_eventos) { ?>

                        <h3>
                            <i class="fa fa-calendar">
                                <?php 
                                    setlocale(LC_TIME, 'spanish.UTF-8'); 
                                    echo strftime("%A, %d, %B del %Y", strtotime($dia))
                                ?>
                            </i>
                        </h3>
                        <?php foreach($lista_eventos as $evento){ ?>
                            <div class="dia">
                                <p class="titulo">
                                    <?php echo $evento['titulo']; ?>
                                </p>
                                <p class="hora">
                                    <i class="fa fa-clock" aria-hidden="true"></i>
                                    <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                                </p>
                                <p>
                                    <i class="fas <?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                                    <?php echo $evento['categoria']; ?>
                                </p>
                                <p>
                                    <i class="fa fa-user"></i>
                                    <?php echo $evento['invitado']; ?>
                                </p>
                            </div>
                        <?php } ?>

                    <?php } ?>

        </div>

        <?php
            //Cerramos la conexión
            $conn->close();
        ?>

    </section>

    <?php include_once 'includes/templates/footer.php'; ?>