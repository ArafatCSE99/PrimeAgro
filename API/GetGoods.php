<?php

include "Connection.php";

// Array of Bootstrap button classes
$buttonClasses = array('btn-primary', 'btn-success', 'btn-info', 'btn-warning', 'btn-danger');

$sql = "SELECT * FROM goods";
$result = $conn->query($sql);
$i=0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name=$row["name"];
    $randomClass = $buttonClasses[$i];
echo "<div class='card btn $randomClass'>
    <i class='fa fa-leaf'></i>
    <p>$name</p>
</div>";
$i++;
if($i>4)
{
    $i=0; 
}
  }
} 
$conn->close();
?>

<div type="button" class="card btn btn-success"  data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-add"></i>
                <p>পণ্য যোগ করুন </p>
</div>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:left !important;">পণ্য যোগ করুন</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form style="text-align:left;">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="পণ্যের নাম ">
  </div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary modal-close" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="AddGoods()">Save changes</button>
      </div>
    </div>
  </div>
</div>