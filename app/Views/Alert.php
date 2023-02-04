<?php
// Header
require __DIR__ . '/Commons/Header.php';
//  End Header
?>
<div class="container mt-5">
    <div class="alert alert-info">
        <?php echo $message; ?>
        <a href="http://localhost/Space/public/" class="btn btn-primary ml-5">Click Here To Return the Home Page</a>
        <div class="col-lg-5 align-items-center order-1 order-lg-2 img">
    <img src="<?php echo base_url('/assets/img/alert.svg') ?>">
</div>
    </div>

<?php
      // Files
      require __DIR__ . '/Commons/Files.php';
      // End Files
?>