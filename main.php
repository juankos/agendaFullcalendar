<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <link rel="stylesheet" href="css/foundation.min.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/fullcalendar.min.css" />
    <link rel="stylesheet" href="css/fullcalendar.print.min.css" media="print" />
    <script src="js/moment.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>


    <!-- Inicio del script del ALMANAQUE  -->

    <script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prevYear, nextYear',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,prev,next'
      },

      defaultDate: '2018-07-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-07-01',
        },
        {
          title: 'Long Event',
          start: '2018-07-07',
          end: '2018-07-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-07-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-07-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-07-11',
          end: '2018-07-13'
        },
        {
          title: 'Meeting',
          start: '2018-07-12T10:30:00',
          end: '2018-07-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-07-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-07-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-07-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-07-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-07-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-07-28'
        }
      ]
    });

  });

</script>

    <!-- Fin del script del ALMANAQUE  -->


    
     <title>Agenda</title>

</head>

<body>

    <div class="top-bar">
        <div class="top-bar-left">
            <h3>Agenda</h3>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="index.php" id="logout">Cerrar Sesión</a></li>
            </ul>
        </div>
    </div>

    <div class="expanded-row main-container">
        <div class="left-cont">
          
           <!-- DIV donde aparecerá el ALMANAQUE-->
            <div id="calendar"></div>
        </div>
        <div class="right-cont">
            <div class="add-btn">
                <h5>Nuevo Evento</h5>

            <!-- INICIO DEL FORMULARIO-->
                
                <form action="./procesos/procesardatos.php" method="POST">
                    <div class="row">
                        <div class="small-12 columns">
                            <label>Título del evento
                  <input type="text" id="titulo" name="titulo" placeholder="Escribe aquí" required="">
                </label>
                        </div>
                        <div class="small-8 columns">
                            <label>Fecha inicio
                  <input type="date" id="start_date" name="inicio" required="">
                </label>
                        </div>
                        <fieldset class="large-4 columns" id="dia-set">
                            <input id="allDay" name="dia" type="checkbox"><label for="allDay">Día entero</label>
                        </fieldset>
                        <div class="small-8 columns">
                            <label>Fecha fin
                  <input type="date" id="end_date" name="fin">
                </label>
                        </div>
                        <div class="small-6 columns">
                            <label>Hora de inicio
                  <input type="time" class="timepicker" id="start_hour" name="hinicio" required="">
                </label>
                        </div>
                        <div class="small-6 columns">
                            <label>Hora fin
                  <input type="time" class="timepicker" id="end_hour" name="hfin">
                </label>
                        </div>
                        <div class="small-12 columns btn-cont-enviar">
                            <button type="submit" class="success button">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="delete-btn">
                <h6>Arrastra aquí un evento que desees eliminar</h6>
                <img src="img/trash.png" alt="Eliminar">
            </div>
        </div>
    </div>

<!--   
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="js/what-input.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="js/app.js"></script>

    -->
</body>

</html>
