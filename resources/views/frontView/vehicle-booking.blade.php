@extends('layouts.front')
@section('style')

    <style>
        .booking .banner{
            padding: 4rem !important;
        }

        .fc-day-grid-event .fc-content {
            color: #4c5d76;
            font-size: 15px;
            font-weight: 400;
        }
        .fc-event, .fc-event-dot {
            background-color: transparent !important;
            padding: 10px !important;
        }.fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
             float: unset;
         }
        .fc-day-top{
            font-size: 22px;
            font-weight: 600;
            text-align: center !important;
        }

        .schedule-title{
            font-size: 14px !important;
        }
        .schedule-offer{
            font-size: 13px;
        }
        p.schedule-offer{
            margin: 0px !important;
        }
        .fc-day-grid-event .fc-content {
             white-space: normal !important;
             overflow: hidden;
         }

    </style>
    <link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.min.css">
@endsection
@section('content')
  <div class="rental__hero">

      <div class="container">
          @include('frontView.partials.vehicle-booking')

          </div>
      </div>




@endsection
@section('script')

    <script src="/assets/plugins/fullcalendar/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->

    <script>
        $('#calendar').fullCalendar({

            timeZone: 'UTC',
            header: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            defaultDate: "{{date("Y-m-d")}}",

            eventClick: function(arg) {

            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            select: function(arg) {
                //alert(arg);

                //window.location='/vehicle-checkout'
            },
            editable: false,
            droppable: false, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            eventLimit: false, // allow "more" link when too many events
            dayMaxEvents: true,
            events: [
                @foreach($dates??array() as $date)
                    @foreach($schedules??array() as $schedule)
                        {
                            title: '<span style="color: #0a6ece;" class="schedule-time">{{date("h:i a",strtotime($schedule->start_time))}}</span>\n' +
                                '  <span class="schedule-title">{{$schedule->vehicle->name??null}} - ({{$schedule->color}}) -  ({{$schedule->register_number}})</span>\n' +
                                '    @if($schedule->four_hour=="yes")<p style="color: #5a6672;"  class="schedule-offer"> 4 Hrs Rental  </p> @endif ' +
                                '    @if($schedule->eight_hour=="yes")<p style="color: #5a6672;"  class="schedule-offer"> 8 Hrs Rental  </p> @endif ' +
                                '    @if($schedule->full_day=="yes")<p style="color: #5a6672;"  class="schedule-offer"> 24 Hrs Rental  </p> @endif ',
                            start: "{{$date}}",
                            className: 'b-l b-2x b-greensea',
                            url: "{{url('/vehicle-checkout',array(
                                'vehicle'=>base64_encode($vehicle->id),
                                'schedule'=>base64_encode($schedule->id),
                                'date'=>base64_encode($date),
                            ))}}",
                        },
                    @endforeach
                @endforeach
            ],

            eventRender: function (event, element) {
                element.find('.fc-title').html(event.title);
            }
        });
    </script>
@endsection
