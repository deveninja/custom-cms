<?php 
  $route = Core::getRoute(); 
  if(isset($route[0])){
    $controller = ucfirst($route[0]);
  }
  if(isset($route[1])){
    $method = 
  }
?>


<div class="container">
  <div class="ui segment">
    <?php echo "Your <span class='ui segment card'>" . $controller  . "</span> controller doesn't have a $method method"; ?>
  </div>
</div>
