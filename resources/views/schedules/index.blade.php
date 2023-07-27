<x-app-layout>
    <style>
        :root {
            --fc-small-font-size: .85em;
            --fc-page-bg-color: #fff;
            --fc-neutral-bg-color: rgba(208, 208, 208, 0.3);
            --fc-neutral-text-color: #808080;
            --fc-border-color: #ddd;

            --fc-button-text-color: #fff;
            --fc-button-bg-color: black;
            --fc-button-border-color: #2C3E50;
            --fc-button-hover-bg-color: #1e2b37;
            --fc-button-hover-border-color: #1a252f;
            --fc-button-active-bg-color: #1a252f;
            --fc-button-active-border-color: #151e27;

            --fc-event-bg-color: #3788d8;
            --fc-event-border-color: #3788d8;
            --fc-event-text-color: #fff;
            --fc-event-selected-overlay-color: rgba(0, 0, 0, 0.25);

            --fc-more-link-bg-color: #d0d0d0;
            --fc-more-link-text-color: inherit;

            --fc-event-resizer-thickness: 8px;
            --fc-event-resizer-dot-total-width: 8px;
            --fc-event-resizer-dot-border-width: 1px;

            --fc-non-business-color: rgba(215, 215, 215, 0.3);
            --fc-bg-event-color: rgb(143, 223, 130);
            --fc-bg-event-opacity: 0.3;
            --fc-highlight-color: rgba(188, 232, 241, 0.3);
            --fc-today-bg-color: rgba(255, 220, 40, 0.15);
            --fc-now-indicator-color: red;
        }
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
                initialView: 'listWeek',
                aspectRatio: 1,
                // height: 'auto',
            });
            calendar.render();
        });

    </script>
    <div class="bg-white h-full">
        <div class="w-full h-full overflow-auto">
            <div class="" id='calendar'></div>
        </div>
    </div>


</x-app-layout>
