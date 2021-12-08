<?php include_once '../layouts/app_header.php'; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/models/dashboard/report.php"; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                </div>
                <div class="count"><?=$ex_orders['count'];?></div>

                <h3>Total Order</h3>
                <p>Orderan .</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                </div>
                <div class="count"><?=$ex_furnitures['count'];?></div>

                <h3>Total Furniture</h3>
                <p>semua total furniture.</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                </div>
                <div class="count"><?=$ex_categories['count'];?></div>

                <h3>Total Category</h3>
                <p>banyaknya semua category.</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                </div>
                <div class="count"><?=$ex_users['count'];?></div>

                <h3>Total Users</h3>
                <p>Jumlah user yang telah mendaftar aplikasi ini.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="x_panel">
                  <div class="x_title">
                    <h2>Line Graph <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="x_panel ui-ribbon-container ">
                <div class="ui-ribbon-wrapper">
                </div>
                <div class="x_title">
                  <h2>Pendapatan</h2>
                  <div class="clearfix"></div>
                </div>
                <h5 class="name_title">Total Penghasilan Hari ini</h5>
                <div class="x_content">

                  <div style="text-align: center; margin-bottom: 17px">
                    <h3>Rp.5000.000,-</h3> 
                  </div>
                  <!-- <p>Short Description</p> -->
                  <div class="divider"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php include_once '../layouts/app_footer.php'; ?>