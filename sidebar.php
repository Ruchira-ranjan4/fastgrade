<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <button class="dropdown-btn">MY PROFILE 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">MY PROFILE</a>
    <a href="#">CHANGE PASSWORD</a>
    
  </div>
  <button class="dropdown-btn">TUTORING REQUESTS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">TUTORING REQUESTS</a>
    <a href="#">POST NEW PRIVATE REQUEST</a>
    <a href="#">POST NEW PUBLIC REQUEST</a>
    
  </div>
  <button class="dropdown-btn">BOOKINGS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">TUTORING SESSION TIMETABLE</a>
    <a href="#">SESSION HISTORY</a>
    
  </div>
  <button class="dropdown-btn">NOTIFICATIONS
   
  </button>
  <button class="dropdown-btn">LOG OUT
   
  </button>
  
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
 
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</body>
</html> 
