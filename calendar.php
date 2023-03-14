<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jewish Calendar</title>
    <link href="hebcal-styles.css" rel="stylesheet">
</head>

<body>
    <div id="calendar"></div>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'title',
                    right: 'prev,next today',
                },
                events: {
                    // add &c=on&geonameid=[locationID] for candle-lighting times
                    url: "https://www.hebcal.com/hebcal?cfg=fc&v=1&i=off&maj=on&min=on&nx=on&mf=on&ss=on&mod=on&lg=s&s=on",
                    cache: true
                }
            });
            calendar.render();
            // optional: bind keyboard left/right arrow keys
            // to move calendar forward/backward by a month
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft' && !e.metaKey) {
                    calendar.prev();
                } else if (e.key === 'ArrowRight' && !e.metaKey) {
                    calendar.next();
                }
            });
        });
    </script>
</body>

</html>