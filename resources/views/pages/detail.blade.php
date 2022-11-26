@extends('layouts.main')
@section('title', 'Home')

@push('css')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/evo-calendar@1.1.3/evo-calendar/css/evo-calendar.min.css'>
    <link rel='stylesheet'
          href='https://cdn.jsdelivr.net/npm/evo-calendar@1.1.3/evo-calendar/css/evo-calendar.midnight-blue.min.css'>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .hero {
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #83B8D7, #BAA6FD);
            display: grid;
        }

        #calendar {
            width: 90%;
            margin: 40px auto;
        }

        .event-container.blocked p.event-title {
            color: white;
        }

        .event-container.blocked {
            opacity: .5;
            background: #adadad;
            cursor: default;
            pointer-events: none;
        }

        .success_form {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 5;
            background: #c3e5b5;
            width: 100%;
            height: 100%;
            display: none;
        }

        td.calendar-day.before {
            opacity: .5;
            cursor: default;
            pointer-events: none;
        }
    </style>
@endpush


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="" style="width: 90%;margin: 40px auto;">
                <div class="card" style="width: 18rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px"
                         height="64px" viewBox="0 0 64 64" id="Layer_1_1_" style="width: 100%;height: auto;"
                         version="1.1"
                         xml:space="preserve"><g>
                            <g>
                                <path
                                    d="M47.868,6c-3.652,0-7.219-1.022-10.314-2.959C35.416,1.706,32.94,1,30.396,1h-0.163    c-3.548,0-6.881,1.384-9.387,3.896c-2.505,2.511-3.88,5.846-3.871,9.392L17,24.003L18,24c0-2.209,1.791-4,4-4v-5l1,0.281    l8.823,2.205C33.186,17.827,34.588,18,35.993,18c6.554,0,12.445-3.642,15.377-9.503L52.617,6H47.868z"
                                    style="fill:#00F4CB;"/>
                            </g>
                            <g>
                                <path
                                    d="M49.354,40.637L40,37.295v-3.768c1.205-1.28,2.105-2.845,2.589-4.586C45.066,28.645,47,26.555,47,24v-9.97    c-0.632,0.528-1.3,1.009-2,1.439v4.556c-0.584-0.442-1.257-0.773-2-0.924V18h-1h-1h-3.586c-1.18,0-2.288,0.459-3.122,1.293    C33.837,19.749,33.231,20,32.586,20h-1.172c-0.645,0-1.251-0.251-1.707-0.707C28.874,18.459,27.766,18,26.586,18H23v-4h-2v5.101    c-2.279,0.465-4,2.484-4,4.899c0,2.555,1.934,4.645,4.411,4.94c0.484,1.741,1.384,3.306,2.589,4.586v3.768l-9.354,3.342    C11.867,41.629,10,44.277,10,47.229V63h44V47.229C54,44.277,52.133,41.629,49.354,40.637z M38,37.42l-6,3.429l-6-3.429v-2.212    C27.727,36.337,29.786,37,32,37s4.273-0.663,6-1.792V37.42z M45,24c0,1.317-0.859,2.427-2.042,2.829C42.979,26.554,43,26.28,43,26    v-4.816C44.161,21.598,45,22.698,45,24z M37.414,20H41v4h-5c-0.551,0-1-0.448-1-1v-1.721c0.252-0.165,0.49-0.354,0.708-0.572    C36.163,20.251,36.769,20,37.414,20z M26.586,20c0.645,0,1.251,0.251,1.707,0.707c0.218,0.218,0.456,0.407,0.708,0.572V23    c0,0.552-0.449,1-1,1h-5v-4H26.586z M19,24c0-1.302,0.839-2.402,2-2.816V26c0,0.28,0.021,0.554,0.042,0.829    C19.859,26.427,19,25.317,19,24z M28,26c1.654,0,3-1.346,3-3v-1.04c0.138,0.013,0.273,0.04,0.414,0.04h1.172    c0.141,0,0.276-0.027,0.414-0.04V23c0,1.654,1.346,3,3,3h5c0,4.963-4.038,9-9,9s-9-4.037-9-9H28z M15.318,42.52l9.585-3.423    L32,43.151l7.096-4.055l9.585,3.423C50.667,43.229,52,45.121,52,47.229V53h-6v-6h-2v14H20V47h-2v6h-6v-5.771    C12,45.121,13.333,43.229,15.318,42.52z M12,55h6v6h-6V55z M46,61v-6h6v6H46z"/>
                                <path
                                    d="M32,32c2.206,0,4-1.794,4-4h-2c0,1.103-0.897,2-2,2s-2-0.897-2-2h-2C28,30.206,29.794,32,32,32z"/>
                                <rect height="3" width="2" x="5" y="30"/>
                                <rect height="2" width="3" x="1" y="34"/>
                                <rect height="3" width="2" x="5" y="37"/>
                                <rect height="2" width="3" x="8" y="34"/>
                                <rect height="3" width="2" x="57" y="16"/>
                                <rect height="2" width="3" x="53" y="20"/>
                                <rect height="3" width="2" x="57" y="23"/>
                                <rect height="2" width="3" x="60" y="20"/>
                            </g>
                        </g></svg>
                    <div class="card-body">
                        <h5 class="card-title"><b>Specialization:</b> {{$specialty->name}}</h5>
                        <p class="card-text"><b>Name:</b> {{$doctor->name}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div id="calendar"></div>
        </div>
    </div>

    @include('layouts.components.modal')
@endsection

@push('js')
    <script src='/assets/js/evo-calendar.js'></script>
    <script>
        $(document).ready(function () {
            // settings
            $('#calendar').evoCalendar({
                "theme": 'Orange Coral',

                'firstDayOfWeek': 1 // Sun
            });

            // add multiple events
            $('#calendar').evoCalendar('addCalendarEvent', [
                {
                    id: 'asDf87L',
                    name: '09:00',
                    date: 'November 26, 2005',
                    type: 'event',
                    status: 'blocked',
                }
            ]);

            // selectDate
            $('#calendar').on('selectDate', function (event, newDate, oldDate) {


                $('.event-list').hide(500);


                $.ajax({
                    url: window.location.pathname + '/schedules',
                    type: 'post',
                    data: {
                        date: newDate
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'json',
                    success: function (data) {
                        console.info(data[0][2]);

                        $('#calendar').evoCalendar('removeCalendarEvent', [data[0][0].id, data[0][1].id, data[0][2].id, data[0][3].id, data[0][4].id, data[0][5].id, data[0][6].id]);

                        $('.event-list').show(700);
                        $('#calendar').evoCalendar('addCalendarEvent', [data[0][0], data[0][1], data[0][2], data[0][3], data[0][4], data[0][5], data[0][6]]);
                    }
                });

            });

            // selectEvent
            $('#calendar').on('selectEvent', function (event, activeEvent) {
                console.log(activeEvent);
                console.log(event);
                $('#time_modal').text(activeEvent.name);
                $('#date_modal').text(activeEvent.date);
                $('#date_modal_input').val(activeEvent.date);
                $('#time_modal_input').val(activeEvent.name);
                $('#id_event').val(activeEvent.id);
                $('.success_form').hide();
                $('#exampleModal').modal('show');

            });

            //add clost
            $('#bookingForm').submit(function (event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: window.location.pathname + '/booking',
                    method: "POST",
                    data: formData,
                    success: function (data) {
                        if (data.id_event) {
                            $('#phone_modal').val('');
                            $('#name_modal').val('');

                            $('#calendar').evoCalendar('removeCalendarEvent', [data.id_event],);

                            $('#calendar').evoCalendar('addCalendarEvent', [
                                {
                                    id: data.id_event,
                                    name: data.time,
                                    date: data.date,
                                    type: 'event',
                                    status: 'blocked',
                                }
                            ]);

                            $('.success_form').show();

                            $('#info-booking').text(data.date + ' ' + data.time);

                            //$('#exampleModal').modal('hide');


                        }
                    }
                });
            });
        });
    </script>
@endpush
