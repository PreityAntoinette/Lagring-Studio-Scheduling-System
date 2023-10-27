<?php
   include('session.php');
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css ">
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="../assets/css/styles.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.1/index.global.min.js "></script>
  <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js "></script>
  <script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js "></script>
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
    

    <title>Lagring Studio</title>
    <link href="../assets/images/logo.png" rel="icon">
</head>
<style>
  /* for calendar tooltip starrrt*/
  .popper,
.tooltip {
  position: absolute;
  z-index: 9999;
  background: #305f82;
  color: white;
  width: 150px;
  border-radius: 3px;
  box-shadow: 0 0 2px rgba(0,0,0,0.5);
  padding: 10px;
  text-align: center;
  opacity: 1;
}
.fc-daygrid-dot-event .fc-event-title {
  cursor: pointer;
}
.tooltip-inner{
  background-color: transparent;
  color:white;
  white-space: pre-wrap;
  font-weight:bold;
}
.style5 .tooltip {
  background: #1E252B;
  color: #FFFFFF;
  max-width: 200px;
  width: auto;
  font-size: .8rem;
  padding: .5em 1em;
}
.popper .popper__arrow,
.tooltip .tooltip-arrow {
  width: 0;
  height: 0;
  border-style: solid;
  position: absolute;
  margin: 5px;
}

.tooltip .tooltip-arrow,
.popper .popper__arrow {
  border-color: #FFC107;
}
.style5 .tooltip .tooltip-arrow {
  border-color: #1E252B;
}
.popper[x-placement^="top"],
.tooltip[x-placement^="top"] {
  margin-bottom: 5px;
}
.popper[x-placement^="top"] .popper__arrow,
.tooltip[x-placement^="top"] .tooltip-arrow {
  border-width: 5px 5px 0 5px;
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  bottom: -5px;
  left: calc(50% - 5px);
  margin-top: 0;
  margin-bottom: 0;
}
.popper[x-placement^="bottom"],
.tooltip[x-placement^="bottom"] {
  margin-top: 5px;
}
.tooltip[x-placement^="bottom"] .tooltip-arrow,
.popper[x-placement^="bottom"] .popper__arrow {
  border-width: 0 5px 5px 5px;
  border-left-color: transparent;
  border-right-color: transparent;
  border-top-color: transparent;
  top: -5px;
  left: calc(50% - 5px);
  margin-top: 0;
  margin-bottom: 0;
}
.tooltip[x-placement^="right"],
.popper[x-placement^="right"] {
  margin-left: 5px;
}
.popper[x-placement^="right"] .popper__arrow,
.tooltip[x-placement^="right"] .tooltip-arrow {
  border-width: 5px 5px 5px 0;
  border-left-color: transparent;
  border-top-color: transparent;
  border-bottom-color: transparent;
  left: -5px;
  top: calc(50% - 5px);
  margin-left: 0;
  margin-right: 0;
}
.popper[x-placement^="left"],
.tooltip[x-placement^="left"] {
  margin-right: 5px;
}
.popper[x-placement^="left"] .popper__arrow,
.tooltip[x-placement^="left"] .tooltip-arrow {
  border-width: 5px 0 5px 5px;
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  right: -5px;
  top: calc(50% - 5px);
  margin-left: 0;
  margin-right: 0;
}

.fc .fc-col-header-cell-cushion {
  display: inline-block;
  padding: 2px 4px;
  color: black;
}

.fc .fc-daygrid-day-number {
  color: grey;
}
.fc .fc-toolbar-title {
    font-size: 1.5em;
    padding: 5px 3px 0px 4px;
}
a.fc-event{
    background-image: linear-gradient(to right, rgba(47, 128, 255,1), rgba(60, 203, 255,1));
    color: darkblue;
}
a.fc-event:hover{
    background-image: linear-gradient(to right, rgba(47, 128, 255,.6), rgba(60, 203, 255,.6));
    color: darkblue;
}
.fc .fc-event .fc-daygrid-event-dot{
  border-color:darkblue;
    
}

  /* for calendar tooltip eeendd */
  
    .icons{
        font-size:3.5em !important;
        opacity:40%;
    }
    .lbl{
        opacity: 70%;
        font-style: italic;
    }
    .cardstat{
        opacity: 90%;
    }
   
    </style>



<body>
<div class="grid-container">

<!-- Header -->
<header class="header">
  <div class="menu-icon" onclick="openSidebar()">
    <span class="material-icons-outlined">menu</span>
  </div>
  <div class="header-left">
    
    Lagring Studio Admin Page
    
  </div>
  <div class="header-right">
    <span class="material-icons-outlined">notifications</span>
    <span class="material-icons-outlined">email</span>
    <span class="material-icons-outlined">account_circle</span>
  </div>
</header>
<!-- End Header -->



<aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined"></span> Admin
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="calendar.php" target="_blank">
              <span class="material-icons-outlined">inventory_2</span> Calendar
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">fact_check</span> Scheduled Tasks
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">add_shopping_cart</span> Services
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">shopping_cart</span> User lists
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">poll</span> Accounts
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">settings</span> Settings
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="logout.php" target="_blank">
              <span class="material-icons-outlined">settings</span> Log out
            </a>
          </li>
        </ul>
      </aside>


<!-- MAIN BODY start of code -->
        <div class="d-flex justify-content-start text-nowrap"style="color:gray"><p><?php date_default_timezone_set('Asia/Manila');echo "Today is: &nbsp;". date('F j, Y - h:i A');?></p>
       </div>
 
 
<style>.yawa:hover{
        transform: scale(1.04);
        box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);
      }
      .yawa{
        border: none;
        box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.2);
        border-radius: 10px;
        transition: .3s;
  }
  .cardstat1:hover{
        transform: scale(1.04);
        box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.2);
      }
      .cardstat1{
        border-radius: 10px;
        transition: .3s;
  }
  </style>

    </div>
   </div>
   <div class='card-body'>
  <div id="calendar"></div>
  </div>
							
                </div>
        </div>
    </div>

</div>

<!-- MAIN BODY end of code -->



<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/dataTables.responsive.min.js"></script>
<script src="assets/js/jquery-3.5.1.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/responsive.bootstrap5.min.js"></script>    
<script src="https://code.jquery.com/jquery-3.5.1.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>


</body>
</html>