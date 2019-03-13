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

    <script src="js/bootstrap-clockpicker.js"></script>
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css"
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php include("menu.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7 col-xs-10 col-sm-10 ">  <div id="CalendarioWeb"></div></div>
            <div class="col"></div>
        </div>
     </div>
   
    
    <script>
    $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar({
            header:{
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            customButtons:{
                Mybutton:{
                    text:"Button 1",
                    click:function(){
                        alert("Acción del botón")
                    }
                }
            },
            dayClick: function (date, jsEvent, view){
              limpiarFormulario();
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
              //  $('#txtHour').val(DateHour[1]);


                $("#EventsModal").modal();
            },

            editable:true,
            eventDrop:function(calEvent){
                $('#txtID').val(calEvent.id);
                $('#txtTitle').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescription').val(calEvent.description);

                var DateHour=calEvent.start.format().split("T");

                $('#txtDate').val(DateHour[0]);
                $('#txtHour').val(DateHour[1]);

             
                RecolectarDatosGUI();
                EnviarInformacion('modificar',NuevoEvento,true);



            }
         
    
        });
    });
    </script>


        <!-- Modal (Add, Edit & Delete dates) --> 
        <div class="modal fade" id="EventsModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <input type="hidden" id="txtID" name="txtID">  
                    <input type="hidden" id="txtDate"  name="txtDate"/> 

                    <div class="form-row">
                        <div class="form-group col-md-8">
                        <label>Titulo</label>
                         <input type="text" id="txtTitle"  class="form-control" placeholder="Titulo del evento"/>  
                    
                    </div>
                    
                    <div class="form-group col-md-4">
                     <label>Hora de la cita:</label>

                     <div class="input-group clockpicker" data-autoclose="true">
                     <input type="text" id="txtHour" value="10:30"  class="form-control"  />
                     </div>
                     
                  
                      </div>
                    </div>

                    <div class="form-group">
                    <label>Descripción de la cita:</label>
                     <textarea id="textarea" type="textDescription" rows="3" class="form-control"></textarea><br/>
                    </div>

                    <div class="form-group">
                    <label>Color:</label>
                     <input type="color" value="#ff0000" id="txtColor" class="form-control" style="height:36px;">


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnAdd" class="btn btn-success" >Agregar Cita</button>
                <button type="button" id="btnEdit" class="btn btn-success" >Modificar</button>
                <button type="button" id="btnDelete" class="btn btn-danger" >Borrar</button>
                <button type="button" class="btn btn-default">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<script>
var NuevoEvento;


    $('#btnAdd').click(function(){

        RecolectarDatosGUI();
        EnviarInformacion('agregar',NuevoEvento);
    });

    $('#btnDelete').click(function(){

    RecolectarDatosGUI();
    EnviarInformacion('eliminar',NuevoEvento);


});

    $('#btnEdit').click(function(){

    RecolectarDatosGUI();
    EnviarInformacion('modificar',NuevoEvento);


    });


    function RecolectarDatosGUI(){
        NuevoEvento= {
            id: $('#txtID').val(),
            title: $('#txtTitle').val(),
            start: $('#txtDate').val()+" "+$('txtHour').val(),
            color: $('#txtColor').val(),
            description: $('#txtDescription').val(),
            textColor:"#FFFFFF"
            end: $('#txtDate').val()+" "+$('txtHour').val(),
        };
    }

    function EnviarInformacion(accion,objEvento,modal){
        $.ajax({
            type:'POST',
            url:'eventos.php?accion='+accion,
            data:objEvento,
            success:function(msg){
                if(msg){
                    $('#CalendarioWeb').fullCalendar('refetchEvents');

                    if(!modal){
                        $("#EventsModal").modal('toggle');
                    }
                
                }
            },
            error:function(){
                alert("Se ha producido un error.")

            }
        });
    }


$('.clockpicker').clockpicker();

function limpiarFormulario(){
                $('#txtID').val('');
                $('#txtTitle').val('');
                $('#txtColor').val('');
                $('#txtDescription').val('');
}

</script>



        </body>
        </html>