
  <br><br>
  <?php
    if(!empty($_SESSION['alert'])){
        foreach($_SESSION['alert'] as $alert){
?>
<div class="alert alert-<?php echo $alert['type']; ?>" role="alert">
    <?php echo $alert['message'];  ?>
</div>
<?php } unset($_SESSION['alert']); }  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>