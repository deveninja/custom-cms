<?php 
  $route = Core::getRoute(); 
  isset($route[0]) ? $controller = ucfirst($route[0]) : $controller = '';
  isset($route[1]) ? $method = ucfirst($route[1]) : $method = '';
?>


<div class="ui container message">
  <div class="ui segment container">
    <?php 
      echo "Your <span class='error controller text'> \"$controller\"</span> controller doesn't have a <span class='error method text'>\"$method\"</span> method"; 
    ?>
    <p>Either create the method or check your URL for typo: </p>
    <p class="error paragraph">
      <?php echo URLROOT; ?>/<span class='error controller text'>:controller</span>/<span class='error method text'>:method</span>
    </p>
  </div>
</div>
