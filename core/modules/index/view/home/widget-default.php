<?php
date_default_timezone_set("America/Mexico_City");
$events = ReservationData::getEvery();
foreach($events as $event){

	$thejson[] = array("title"=>$event->title,"url"=>"./?view=editreservation&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);

}
// print_r(json_encode($thejson));
?>
<script>


$(document).ready(function() {

    $('#calendar').fullCalendar({
        lang: 'es',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'	
        },			
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        events: <?php echo json_encode($thejson); ?>
    });
    
});

</script>
<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">Calendario</h2>
        <div id="calendar"></div>
        
    </div>
</div>