$(document).ready(function() {

    $('#calendar').fullCalendar({

      header: {
        left: 'prevYear, nextYear',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,prev,next'
      },

      displayEventTime: false, // don't show the time column in list view

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
      googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

      // US Holidays
      events: [
    {
      title  : 'event1',
      start  : '2018-07-07'
    },
    {
      title  : 'event2',
      start  : '2018-07-10',
      end    : '2010-07-17'
    },
    {
      title  : 'event3',
      start  : '2018-07-09T12:30:00',
      allDay : false // will make the time show
    }
  ],
      




      eventClick: function(event) {
        // opens events in a popup window
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },

      loading: function(bool) {
        $('#loading').toggle(bool);
      }

    });

  });