<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendario de Citas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/es.js"></script>
    <!-- Calendar-->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <script src="js/fullcalendar.min.js"></script>

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php include("menu.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7">  <div id="CalendarioWeb"></div></div>
            <div class="col"></div>
        </div>
     </div>
   
    
    <script>
    $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar({
            header:{
                left:'today,prev,next,Mybutton',
                center:'title',
                rigt: 'month,basicWeek,basicDay,agendaWeek,agendaDay'
            },
            customButtons:{
                Mybutton:{
                    text:"Button 1",
                    click:function(){
                        alert("Acción del botón")
                    }
                }
            },
            dayClick:function(date,jsEvent,view){

                $('#txtDate').val(date.format());
                $("#EventsModal").modal();


            },
           
                        events:'http://localhost/BookDent/eventos.php',

            eventClick:function(calEvent,jsEvent,view){
                //H2
                $('#eventTitle').html(calEvent.title);

                //show event information in the inputs
                $('#txtDescription').val(calEvent.description);
                $('#txtID').val(calEvent.id);
                $('#txtTitle').val(calEvent.title);
                $('#txtColor').val(calEvent.color);

                DateHour= calEvent.start._i.split(" ");
                $('#txtDate').val(DateHour[0]);
                $('#txtHour').val(DateHour[1]);


                $("#EventsModal").modal();
            }
         
    
        });
    });
    </script>


        <!-- Modal (Add, Edit & Delete dates) --> 
        <div class="modal fade" id="EventsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    Id: <input type="text" id="txtID" name="txtID">  
                    Fecha: <input type="text" id="txtDate"  name="txtDate"/> <br/>
                    Titulo <input type="text" id="txtTitle"  name="txtTitle"/> <br/>   
                    Hora: <input type="text" id="txtHour" value="10:30"  name="txtHour"/> <br/>
                    Descripción: <textarea id="textarea" type="textDescription" rows="3"></textarea><br/>
                    Color: <input type="color" value="#ff0000" id="txtColor"><br/>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnAdd" class="btn btn-success" >Agregar Cita</button>
                <button type="button" class="btn btn-success" >Modificar</button>
                <button type="button" class="btn btn-danger" >Borrar</button>
                <button type="button" class="btn btn-default">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#btnAdd').click(function(){

        var NuevoEvento= {
            title: $('#txtTitle').val(),
            start: $('#txtDate').val()+" "+$('txtHour').val(),
            color: $('#txtColor').val(),
            description: $('#txtDescription').val(),
            txtColor:"#FFFFFF"
        };

        $('#CalendarioWeb').fullCalendar('renderEvent', NuevoEvento );
        $("#EventsModal").modal('toggle');
        
    });

</script>



        </body>
        </html>