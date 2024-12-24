<?php
include 'db.php';
include 'session_check.php';
include 'header.php';

$decrypted_data = $_SESSION['decrypted_data'] ?? [];
$error_message = $_SESSION['error_message'] ?? null;

unset($_SESSION['decrypted_data']);
unset($_SESSION['error_message']);
?>
<div class="dashboard-main-body">
  <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Books List</h6>
    <ul class="d-flex align-items-center gap-2">
      <li class="fw-medium">
        <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
          <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
          Dashboard
        </a>
      </li>
      <li>-</li>
      <li class="fw-medium">Books List</li>
    </ul>
  </div>

  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h6 class="card-title">Enter Private Key to See decrypted data:</h6>
        <form action="decrypt.php" method="post">
          <div class="col-6">
            <input type="text" name="private_key" class="form-control">
          </div>
          <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary-600">Submit</button>
          </div>
        </form>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table striped-table mb-0">
            <thead>
                <?php if(isset($_SESSION['name'])){?>
                <tr>
                    <th scope="col" colspan="9" class="text-center">Added by: <?=$_SESSION['name']?> </td>
                </tr>
                <?php } unset($_SESSION['name']);?>
              <tr>
                <th scope="col">Book Title</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
                <th scope="col">Publication Year</th>
                <th scope="col">ISBN</th>
                <th scope="col">Language</th>
                <th scope="col" class="text-center">Total Copies</th>
                <th scope="col" class="text-center">Available Copies</th>
                <th scope="col" class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($error_message){?>
                <tr>
                  <td colspan="8" class="text-center text-danger"><?=$error_message?></td>
                </tr>
              <?php }elseif (!empty($decrypted_data)){ ?>
                <?php foreach ($decrypted_data as $book){ ?>
                  <tr>
                    <td><?=$book['title']?></td>
                    <td><?=$book['author']?></td>
                    <td><?=$book['genre']?></td>
                    <td><?=$book['publication_year']?></td>
                    <td><?=$book['isbn']?></td>
                    <td><?=$book['language']?></td>
                    <td class="text-center"><?=$book['total_copies']?></td>
                    <td class="text-center"><?=$book['available_copies']?></td>
                    <td class="text-center"><a href="delete.php?id=<?=$book['book_id']?>" class="btn btn-danger">Delete</a></td>
                  </tr>
                <?php } ?>
              <?php }else{ ?>
                <tr>
                  <td colspan="9" class="text-center">No data to display.</td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
