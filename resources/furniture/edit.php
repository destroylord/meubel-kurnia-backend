<?php include_once '../layouts/app_header.php'; ?>

<div class="right_col" role="main">
    <div class="">
        <div class="title_left">
            <h3>Form Elements</h3>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="x_content">
              <div class="col-md-12 col-sm-12 ">

              <?php
                  $id = $_GET['id'];
                  
                  $sql    = mysqli_query($conn, "SELECT * FROM furnitures WHERE id = '$id' ");

                  $data   = mysqli_fetch_array($sql);

              ?>
                <?php include_once 'form-edit.php'; ?>
              </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../layouts/app_footer.php'; ?>