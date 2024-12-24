 
 <?php
  include 'session_check.php';
  include 'header.php' ;
 ?>
     <div class="dashboard-main-body">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Dashboard</h6>
    <ul class="d-flex align-items-center gap-2">
      <li class="fw-medium">
        <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
          <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
          Dashboard
        </a>
      </li>
      <li>-</li>
      <li class="fw-medium">AI</li>
    </ul>
  </div>

 <div class="my-5">
  <?php
  if(isset($_SESSION['login_done'])){
     echo $_SESSION['login_done'];
  }
  ?>

  </div>

  <?php include 'footer.php' ?>
