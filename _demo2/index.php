<?php include 'config.php'; ?>
 <!-- bootstrap extension -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<!--  container -->
<div class="container" >  
<div class="page-header"><h1>Comment system with jQuery, Ajax and PHP</h1></div>

 <!-- panel -->
 <div class="col-md-8 col-md-offset-1">
    <div class="panel">
    <div class="panel-heading"><h2>Post your comments</h2></div>
   <div class="panel-body span6 form-horizontal">
   <div class="row">
      <div class="form-group">  
   <div class="col-md-8">
             <input rows="6" class="form-control input-sm" id="name" name="name" placeholder=
                "Name" type="text" value="">
          </div> 
      </div>
    </div> 
    <div class="row">
      <div class="form-group">
        

          <div class="col-md-8"> 
          <textarea class="form-control input-sm" rows="6" name="COMMENT" id="COMMENT" > 

          </textarea> 
          </div>
        </div>
      </div>
      <div class="row">
           <div class="form-group">
        <div class="col-md-8">  
            <button class="btn btn-primary btn-sm" id ="submit" type="submit" >Post Comment</button> 
           </div>
        </div>
      </div>  
      </div>
   </div> 
<!-- end panel -->

<div id="display" class="col-md-8 col-md-offset-1">
  <?php 
  /* set a query for retrieving the data .*/ 
    $sqlQuery = "SELECT * FROM  `tblcomment` order by ID desc"; 
  /* execute the query */
  $result = mysql_query($sqlQuery) or die(mysql_error());
  /* loop the executed query */
  while ($row = mysql_fetch_array($result)) {

    echo '<div class="panel panel-primary">'; 
    echo '<div class="panel-heading"><span class="glyphicon glyphicon-user"> </span> Posted by : ' . $row['PERSON'].'</div>';
    echo '<div class="panel-body">';
    echo  $row['COMMENT'];
    echo '</div>';
    echo '<div class="panel-footer">';
    echo 'Date Posted:' . $row['DATEPOSTED'];
    echo '</div>';
    echo '</div>'; 
  }  
     ?>
</div>

 
 </div> 
</div> 
 
 
 <!-- jquery extension -->
<script type="text/javascript"  src="jquery/jquery.min.js"></script>   

<!-- method for saving and retrieving data without refreshing the page. -->
<script type="text/javascript" > 

$(document).on("click", "#submit", function () {

        jQuery("#display").fadeIn(900, 0);   
 /* load all variables */
   var name = document.getElementById('name').value
   var COMMENT = document.getElementById('COMMENT').value 
  
    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "process.php",    
        dataType: "text",   //expect html to be returned  
        data:{NAME:name,COMMENT:COMMENT},          
        success: function(data){                    
         $("#display").html(data); 
          
        }

    }); 

}); 
</script>
 