<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>Admin | Calendar</title>
        <link href="../assets/images/logo.png" rel="icon" />
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/global/css/design.css" />
        <link rel="stylesheet" href="../assets/admin/css/dashboardcontainer.css" />
        <style>
            .calendarContainer{
                background-color: white;
                border-radius: 10px;
                padding: 1rem;
            }
        </style>
    </head>
    <body>
        <div class="grid-container">
            <!-- Header -->
            <?php require "header/header.php"?>
            <!-- End Header -->
            <?php require "navigation/sidebar.php"?>
            <!-- Main -->
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold">CALENDAR</p>
                </div>
                <!-- CURRENT TIME -->
                <!-- <div class="d-flex justify-content-start text-nowrap"style="color:gray">
                    <p><?php date_default_timezone_set('Asia/Manila');echo "Today is: &nbsp;". date('F j, Y - h:i A');?></p>
                </div> -->
                <!-- CALENDAR -->
                <div class="calendarContainer">
                    <div id="calendar"></div>
                </div>
                
            </main>
            <!-- End Main -->
        </div>
        <!-- Custom JS -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.1/index.global.min.js "></script>
        <script src="../assets/admin/js/sidebar_toggle.js"></script>
        <!-- edit custom scripts below this line -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            const date = new Date();
                let day = date.getDate();
                let month = date.getMonth() + 1;
                let year = date.getFullYear();
                let currentDate = `${year}-${month}-${day}`;

            var calendar = new FullCalendar.Calendar(calendarEl, {
                                initialView: 'dayGridMonth',
                                height: "auto",
                                displayEventTime: false,
                                defaultDate: currentDate,
                                eventDidMount: function(info) {
                var tooltip = new Tooltip(info.el, {
                    title: info.event.extendedProps.description,
                    placement: 'top',
                    trigger: 'hover',
                    container: 'body'
                });
                },
            
                events: 'event.php'
            });

            calendar.render();
            });
        </script>
    </body>
</html>