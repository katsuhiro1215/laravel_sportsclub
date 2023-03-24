// Full Calendar

document.addEventListener('DOMContentLoaded', function() {
  let calendarEl = document.getElementById('calendar');
  let calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      'start': 'prev next today',
      'center': 'title',
      'end': 'dayGridMonth timeGridWeek timeGridDay'
    },
    initialView: 'dayGridMonth'
  });
  calendar.render();
});

$( function() {
  $( "#external-events" ).draggable();
} );