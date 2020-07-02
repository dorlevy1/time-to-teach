 $(document).ready(() => {
     var calendar = $('#calendar').fullCalendar({
         editable: true,
         header: {
             left: 'prev,next today',
             center: 'title',
             right: 'month'
         },
         selectable: true,
         selectHelper: true,
         allDaySlot: false,
         eventBackgroundColor: getRandomColor(),
         eventDidMount: function(info) {
             var tooltip = new Tooltip(info.el, {
                 title: info.event.extendedProps.description,
                 placement: 'top',
                 trigger: 'hover',
                 container: 'body'
             });
         },
         events: '../../handler/fetchHandler.php',

         select: function(start, end) {

             $('.fc-day-top').on('click', () => {
                 $(this).removeClass('on');
                 $(this).addClass('on');
             })
             $('.create_class').toggleClass('disabled');
             $('.time_pick').on('click', function() {
                 $('.time_pick').attr('style', 'background:transperent !important');
                 $('h5').removeClass('activate');
                 $(this).children('h5').addClass('activate');
                 $(this).attr('style', 'background:white !important;box-shadow:0px 2px 4px -2px grey !important');
                 $(this).children('h5').attr('name', 'activate');
             })
             $('form>h1').html($.fullCalendar.formatDate(start, "Y-MM-DD "));


             $('#submit').on('click', (e) => {
                 e.preventDefault();
                 insertEvent();
                 header('Location: ./');
             })

         },

         editable: true,
         eventResize: function(e) {
             var start = $.fullCalendar.formatDate(e.start, "Y-MM-DD HH:mm:ss");
             var end = $.fullCalendar.formatDate(e.end, "Y-MM-DD HH:mm:ss");
             var title = e.title;
             var id = e.id;
             $.ajax({
                 url: 'update.php',
                 type: 'POST',
                 data: {
                     title: title,
                     start: start,
                     end: end,
                     id: id
                 },
                 success: function() {
                     calendar.fullCalendar('refetchEvents');
                     alert('Event Update');
                 }

             })

         }
     });

     function insertEvent() {

         //  var start = $.fullCalendar.formatDate(start, "Y-MM-DD ");
         var title = "Lesson";
         var time = $('.time_pick>.activate').text();
         var timeAfter = parseInt($('.time_pick>.activate').text()) + 1;
         var start = $('form>h1').text() + '' + time + ':00';
         var newEnd = $('form>h1').text() + '' + timeAfter + ':00:00';
         console.log(
             timeAfter
         );
         $.ajax({
             url: '../../handler/insertClassHandler.php',
             type: "POST",
             data: {
                 title: title,
                 start: start,
                 end: newEnd,
                 color: getRandomColor()
             },
             success: () => {
                 console.log(title, start, newEnd);
                 $('.create_class').toggleClass('disabled');
                 calendar.fullCalendar('refetchEvents');
                 alert('Successfully');
             }
         })
     }

     function getRandomColor() {
         var letters = '0123456789ABCDEF';
         var color = '#';
         for (var i = 0; i < 6; i++) {
             color += letters[Math.floor(Math.random() * 16)];
         }
         return color;
     }

 })