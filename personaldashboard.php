  <!--popup for getting app starts-->    
  <div class="modal fade" id="getapp" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="border:none;">
<!--          <button type="button" class="close" data-dismiss="modal">&times;</button>  -->
          <h4 class="modal-title "><b>No Limits GYM<b></h4>
        </div>
        <div class="modal-body" style="border:none;">
        <?php
$querry = "Select * from datas where username = '$user_check' ";
                  $result = mysqli_query($db,$querry);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          ?>
<div class="col-12 text-left">
<h5 > Hi, <span class="text-success"><?php echo $row["username"] ?></span></h5>
<h5><span>Level</span> : <span class="text-success"><?php echo $row["level"] ?></span></h5>
<h5><span>Current Plan</span> : <span class="text-success"><?php echo $row["plan"] ?></span> &nbsp;&nbsp;<button class="btn-success w-30">Download now</button></h5>

<h5><span>Supplements</span> : <span class="text-success"><?php echo $row["suppinfo"] ?></span></h5>
<button class="btn-success w-30"><a href="supp.php" style="color:white; text-decoration:none;" target="_blank">Shop now</a></button>
<h5 class="mt-2"><span>Timing</span> : <span class="text-success"><?php echo $row["timing"] ?></span></h5>
</div>
<?php }
                  }
                  ?>
        </div>
<!--        <div class="modal-footer" style="border:none;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>
  <!--popup for getting app ends-->

 