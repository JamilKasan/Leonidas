<x-app-layout>
    <style>
        #calendar
        {
            background-color: white;
        }
    </style>
    @php($schedules = \App\Models\Schedule::all())
    <!-- Include FullCalendar CSS and JS files -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // plugins: ['dayGrid'],
                events: [
                        @foreach($schedules as $schedule)
                    {
                        title: '{{ $schedule->name }}' ,
                        start: '{{ $schedule->start }}' ,
                        end: '{{ $schedule->end }}'
                    },
                        @endforeach

                ],
                initialView: 'listWeek'
            });
            calendar.render();
        });

    </script>
    <div class="bg-white h-full">
        <div class="w-full h-full overflow-auto">
            <div id='calendar'></div>
        </div>
    </div>


</x-app-layout>
