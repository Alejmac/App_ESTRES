<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <main>
            <div
                class="container"
            >
            <br>
                <div
                    class="row "
                >
                    <div class="col">
<!-- instrucciones -->
                    <h5>TEST DE ESTRÉS LABORAL</h5>
 
            Permite conocer en qué grado el trabajador padece los síntomas asociados
            al estrés.
<br>
<strong> Instrucciones: </strong> 

De los siguientes síntomas, selecciona el grado experimentado durante los
últimos 3 meses de acuerdo al semáforo presentado
<br>
    <span class="badge color1">1 (Nunca )</span>
    <span class="badge color2">2 (Casi Nunca )</span>
    <span class="badge color3">3 (Pocas veces )</span>
    <span class="badge color4">4 (Algunas veces )</span>
    <span class="badge color5">5 (Relativamente frecuente)</span>
    <span class="badge color6">6 (muy frecuente )</span>

    <br/> <br/>
    <!--from para las preguntas  -->
    <form action="" method="post">
<!-- preguntas  [ items] -->

<?php
$preguntas= [
    "Imposibilidad de conciliar el sueño",
    "Jaquecas y dolores de cabeza.",
    "Sensación de cansancio extremo o agotamiento.",
    "Tendencia de comer, beber o fumar más de lo habitual. ",
    "Disminución del interés sexual.",
    "Respiración entrecortada o sensación de ahogo. ",
    "Disminución del apetito. ",
    "Temblores musculares (por ejemplo tics nerviosos o
parpadeos). ",
    "Pinchazos o sensaciones dolorosas en distintas partes
del cuerpo",
    "Tentaciones fuertes de no levantarse por la mañana",
    "Tendencias a sudar o palpitaciones",
];
    ?>
<!-- opciones automaticas  -->
    <div class="card">
        <div class="card-body">
        <?php foreach($preguntas as $index => $pregunta){ ?>
        <span class="badge bg-ligh text-dark"> 
            <?php echo $index+1; ?>.-
        </span>
        <?php echo $pregunta;?>
        <br>
        <?php for ($opcion = 1; $opcion<=6;$opcion++){?>
        <span
            class="badge  color<?php echo $opcion;?>">
            <div class="form-check form-check-inline">
            <input
                class="form-check-input"
                type="radio"
                name="pregunta<?php echo $index;?>"
                value="<?php echo $opcion;?>" required
            />
            <label class="form-check-label" for=""><?php echo $opcion;?></label>
            </div>
        </span>
        <?php }?>

        <br/>
        <?php } ?>
    </div>
      </div>
      <button
        type="submit"
        class="btn btn-primary"
      >
        Enviar respuestas
    </button>
    
            </div>  
                <div class="col"><h5>RESPUESTAS</h5>
            <?php 
          
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $respuestas = [];
                $numeroPreguntas=count($preguntas);

                echo$numeroPreguntas;
                for($i=0;$i<$numeroPreguntas;$i++){
                    $respuestas[$i]=($_POST["pregunta".$i])?(int)$_POST["pregunta".$i]:0;
                    $respuestas[]=$respuestas;

                }
                $puntajeTotal= array_sum($respuestas);
                print_r($respuestas);

            }
            
            
            ?>
            </div>

            </div>
    </form>  
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries  -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
