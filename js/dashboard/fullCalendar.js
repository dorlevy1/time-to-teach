document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        editable: true,
        titleFormat: {
            month: 'long',
            year: 'numeric'
        },
        headerToolbar: {
            start: 'prev,next today',
            center: 'title',
            end: 'dayGridMonth'
        },
        selectable: true,
        selectHelper: true,
        timeZone: 'UTC',
        locale: 'en',
        allDaySlot: false,
        dayMaxEvents: true,
        eventBackgroundColor: getRandomColor(),
        events: '../../handler/fetchHandler.php',
        dateClick: function(arg) {
            $('form>h1').html(arg.dateStr + ' ');
        },
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
            $('.duration_pick').on('click', function() {
                $('.duration_pick').attr('style', 'background:transperent !important');
                $(this).children('h5').removeClass('activate');
                $(this).children('h5').addClass('activate');
                $(this).attr('style', 'background:white !important;box-shadow:0px 2px 4px -2px grey !important');
                // $(this).children('h5').attr('name', 'activate');
            })


            $('#submit').on('click', (e) => {
                e.preventDefault();
                insertEvent();
                window.location.replace('my_calendar');
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
                    alert('Event Update');
                }

            })

        }
    })
    calendar.render();


    function insertEvent() {

        //  var start = $.fullCalendar.formatDate(start, "Y-MM-DD ");
        var title = "Lesson";
        var time = $('.time_pick>.activate').text();
        var timeAfter = parseInt($('.time_pick>.activate').text()) + 1;
        if ($('.duration_pick>h5.activate').text() == '1') {
            var timeAfter = parseInt($('.time_pick>.activate').text()) + 1;
        } else if ($('.duration_pick>h5.activate').text() == '2') {
            var timeAfter = parseInt($('.time_pick>.activate').text()) + 2;
        }
        var newEnd = $('form>h1').text() + '' + timeAfter + ':00:00';
        time = time.split(':');
        var start = $('form>h1').text() + '' + time + ':00';
        if ($('.duration_pick>h5.activate').text() == '1/2') {
            var newEnd = $('form>h1').text() + '' + time[0] + ':30:00';
        } else if ($('.duration_pick>h5.activate').text() == '3/4') {
            var newEnd = $('form>h1').text() + '' + time[0] + ':45:00';
        } else if ($('.duration_pick>h5.activate').text() == '1') {
            var newEnd = $('form>h1').text() + '' + timeAfter + ':00:00';
        } else if ($('.duration_pick>h5.activate').text() == '1 1/2') {
            var newEnd = $('form>h1').text() + '' + timeAfter + ':30:00';
        } else if ($('.duration_pick>h5.activate').text() == '2') {
            var newEnd = $('form>h1').text() + '' + timeAfter + ':00:00';

        }
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
                calendar.refetchEvents();
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