<?php
include 'session_check.php';
include 'header.php';
?>
    <div class="dashboard-main-body">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Add Books</h6>
    <ul class="d-flex align-items-center gap-2">
      <li class="fw-medium">
        <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
          <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
          Dashboard
        </a>
      </li>
      <li>-</li>
      <li class="fw-medium">Add Books</li>
    </ul>
  </div>

 <div class="my-5">
 <?php 
  if (isset($_SESSION['message'])){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">'.$_SESSION['message'].'</div>';
  }
  unset($_SESSION['message'])?>

 <div class="row gy-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form action="book_post.php" method="post">
            <div class="row gy-3">
              <div class="col-12">
                <label class="form-label">Book Title</label>
                <input name="title" type="text" class="form-control" >
              </div>
              <div class="col-12">
                <label class="form-label">Author</label>
                <input name="author" type="text" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">Genre</label>
                <input name="genre" type="text" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">Publication Year</label>
                <input name="publication_year" type="text" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">ISBN</label>
                <input  type="text" name="isbn" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">Language</label>
                <input  type="text" name="language" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">Total Copies</label>
                <input  type="text" name="total_copies" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">Available Copies</label>
                <input  type="text" name="available_copies" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">Enter Public Key</label>
                <input  type="text" name="public_key" class="form-control">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary-600">Submit</button>
              </div>
            </div>

            </form>
            
          </div>
        </div>
      </div>

  </div>

<?php
include 'footer.php'
?>