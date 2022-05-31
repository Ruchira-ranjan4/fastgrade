<?php include ('header.php') ?>
<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      background-color: #f1f1f1;
      padding: 20px;
      font-family: Arial;
    }
    
    /* Center website */
    .main {
      max-width: 1000px;
      margin: auto;
    }
    
    h1,h2 {
      font-size: 30px;
      word-break: break-all;
      color: #fcb12b;
    }
    
    .row {
      margin: 10px -16px;
    }
    
    /* Add padding BETWEEN each column */
    .row,
    .row > .column {
      padding: 8px;
    }
    
    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 100%;
      display: none; /* Hide all elements by default */
    }
    
    /* Clear floats after rows */ 
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Content */
    .content {
      background-color: white;
      padding: 10px;
    }
    
    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }
    
    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: white;
      cursor: pointer;
    }
    
    .btn:hover {
      background-color: #ddd;
    }
    
    .btn.active {
      background-color: #666;
      color: white;
    }
    * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}
h4,h3,p {
    color:white;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow:  10px 10px #fcb12b;
  padding: 10px;
  text-align: left;
  background-color: #f1f1f1;
  margin-top:20px;
  height: 300px;
  width:800px;
  background-color: #042d59;
  border-radius: 26px;
  
}
    </style>
<div class="main">
    <h1>Participant Details</h1>
    <!-- Portfolio Gallery Grid -->
    <div class="row">
        <div class="col-sm-12">
          <div class="card">
           
          </div>
        </div>
      
        <div class="col-sm-12">
          <div class="card">
           
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="card">
            <h2> </h2>
            
             <h4>  </h4>
             <h4>  </h4>
           
              <p></p> 
              <p></p> 
               <p></p>
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="card">
           
          </div>
        </div>
      </div>
      
    
    <!-- END MAIN -->
    </div>
    