<?php include_once '../layouts/utilities/header.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php'; ?>


<?php
  if (!isset($_SESSION['username'])) {
    header("location:".url()."index.php");
}

?>

<?php
      $sql = "SELECT * FROM users WHERE id = '$_SESSION[id]' ";
      $ex = mysqli_query($conn, $sql);

      $ass = mysqli_fetch_assoc($ex);
  ?>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="javascript:void(0)" class="site_title"><i class="fa fa-paw"></i> <span>Hello! Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://avatars.dicebear.com/api/initials/:<?=$ass['username']?>.svg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?= $ass['username']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
              <?php include_once '../layouts/utilities/sidebar.php' ;?>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include_once '../layouts/utilities/top_nav.php'; ?>
        <!-- /top navigation -->
