<?php include_once '../layouts/app_header.php'; ?>
        <!-- page content -->
        <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="https://avatars.dicebear.com/api/initials/:<?=$_SESSION['username']?>.svg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>

                    </div>
                    <div class="col-md-9 col-sm-9 ">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>User Activity Report</h2>
                        </div>
                      </div>
                        

                        <div class="mt-4">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" value="<?= $_SESSION['username']?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">No Hanphone</label>
                                <input type="text" value="<?= $_SESSION['handphone']?>" class="form-control">
                            </div>

                            <hr>
                            
                            <h5>Change Password</h5>

                            <label for="">New Password</label>
                            <input type="password" class="form-control w-50">

                            <hr>

                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i>  Perbarui</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php include_once '../layouts/app_footer.php'; ?>