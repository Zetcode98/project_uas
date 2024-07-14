<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['name']) && !isset($_SESSION['role'])) {
    header( "Location: login.php");
    exit();
};

if(isset($_SESSION['name'])) {
  echo $_SESSION['name'];
}

require_once 'crud/user/delete.php';
require_once 'crud/user/edit.php';
include_once 'header.php';
include_once 'sidebar.php';
         
$title = 'admin';
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= ucfirst ($_SESSION['role']) ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= ucfirst ($_SESSION['role']) ?></li>
            </ol>
          </div>
        </div> 
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-4">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <h3 class="profile-username text-center"><?= $_SESSION['name'] ?></h3>

                <p class="text-muted text-center"><?= $_SESSION['username'] ?></p>

                <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#Edit">
                  Edit
                </button>
                <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#Delete">
                  Delete Account
                </button>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>

          <div class="modal fade" id="Edit">
            <form action="" method="post">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <h4 class="modal-title">Changes Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Usename Anda">
                      <span class="text-red"><?= $usernameErr ?></span>
                    </div>

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Name Anda">
                      <span class="text-red"><?= $nameErr ?></span>
                    </div>

                  <?php if ($_SESSION['role'] == 'admin') { ?>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control select2" style="width: 100%;" name="role">
                          <option selected="selected">admin</option>
                          <option>user</option>
                        </select>
                    </div>
                  <?php } ?>               

                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning" name="Edit" value="<?= $_SESSION['username'] ?>">Changes</button>
                  </div>

                </div>
              </div>
            </form>  
          </div>

          <div class="modal fade" id="Delete">
            <form action="" method="post">
              <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Delete Account</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <p>Apakah anda yakin ingin menghapus akun anda?&hellip;</p>
                    </div>

                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-danger" name="Delete" value="<?= $_SESSION['username'] ?>">Delete</button>
                    </div>

                </div>
              </div>
            </form> 
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>