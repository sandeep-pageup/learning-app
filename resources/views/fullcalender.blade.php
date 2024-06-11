<!DOCTYPE html>
<html>
<head>
    <title>Laravel FullCalendar Tutorial - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

    <!-- Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    
    <!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
    <!-- Toastr CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .fc-event {
            background-color: #ff7f50 !important; /* Coral for events */
            border-color: #ff7f50 !important;
            color: #fff !important;
        }
        #calendar-container {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
        }
        .fc-toolbar {
            background-color: #1e90ff; /* DodgerBlue for toolbar */
            border-bottom: 1px solid #ddd;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            color: #fff;
        }
        .loading-spinner {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }
        .card-header {
            background-color: #1e90ff; /* DodgerBlue for card header */
            color: #fff;
        }
        .card {
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #ff7f50; /* Coral for custom button */
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .btn-custom:hover {
            background-color: #ff6347; /* Tomato for hover */
            color: #fff;
        }
        .fc-button {
            background-color: #ff7f50 !important; /* Coral for FullCalendar buttons */
            border: none !important;
            color: #fff !important;
            border-radius: 5px !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1) !important;
        }
        .fc-button:hover {
            background-color: #ff6347 !important; /* Tomato for hover */
        }
    </style>
</head>
<body>
    
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center">
            <h2 class="mb-0">FullCalendar Tutorial Example</h2>
        </div>
        <div class="card-body p-3">
            <div id="calendar-container" class="p-2 bg-light position-relative">
                <div id="calendar"></div>
                <div class="loading-spinner">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function () {
    
    var SITEURL = "{{ url('/') }}";
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function toggleSpinner(show) {
        if (show) {
            $('.loading-spinner').show();
        } else {
            $('.loading-spinner').hide();
        }
    }
    
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: SITEURL + "/fullcalender",
        displayEventTime: false,
        editable: true,
        customButtons: {
            myCustomButton: {
                text: 'Custom!',
                click: function() {
                    alert('clicked the custom button!');
                }
            }
        },
        header: {
            left: 'prev,next today myCustomButton',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        buttonText: {
            today: 'Today',
            month: 'Month',
            week: 'Week',
            day: 'Day'
        },
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                toggleSpinner(true);
                $.ajax({
                    url: SITEURL + "/fullcalenderAjax",
                    data: {
                        title: title,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    type: "POST",
                    success: function (data) {
                        displayMessage("Event Created Successfully");
  
                        calendar.fullCalendar('renderEvent', {
                            id: data.id,
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        }, true);
  
                        calendar.fullCalendar('unselect');
                    },
                    error: function() {
                        displayMessage("Error creating event", "error");
                    },
                    complete: function() {
                        toggleSpinner(false);
                    }
                });
            }
        },
        eventDrop: function (event, delta) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
            toggleSpinner(true);
            $.ajax({
                url: SITEURL + '/fullcalenderAjax',
                data: {
                    title: event.title,
                    start: start,
                    end: end,
                    id: event.id,
                    type: 'update'
                },
                type: "POST",
                success: function (response) {
                    displayMessage("Event Updated Successfully");
                },
                error: function() {
                    displayMessage("Error updating event", "error");
                },
                complete: function() {
                    toggleSpinner(false);
                }
            });
        },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                toggleSpinner(true);
                $.ajax({
                    type: "POST",
                    url: SITEURL + '/fullcalenderAjax',
                    data: {
                        id: event.id,
                        type: 'delete'
                    },
                    success: function (response) {
                        calendar.fullCalendar('removeEvents', event.id);
                        displayMessage("Event Deleted Successfully");
                    },
                    error: function() {
                        displayMessage("Error deleting event", "error");
                    },
                    complete: function() {
                        toggleSpinner(false);
                    }
                });
            }
        }
    });

    function displayMessage(message, type = 'success') {
        if (type === 'success') {
            toastr.success(message, 'Event');
        } else if (type === 'error') {
            toastr.error(message, 'Error');
        }
    }
  
});
</script>

</body>
</html>
