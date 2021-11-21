<?php include_once '../layouts/app_header.php'; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/models/dashboard/report.php"; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row" style="display: inline-block;">
              <div class=" top_tiles" style="margin: 10px 0;">
                <div class="col-md-3 col-sm-3  tile">
                  <span>Total Order</span>
                  <h2><?=$ex_orders['count'];?></h2>
                  <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
                </div>
                <div class="col-md-3 col-sm-3  tile">
                  <span>Total Furniture</span>
                  <h2><?=$ex_furnitures['count']?></h2>
                  <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
                </div>
                <div class="col-md-3 col-sm-3  tile">
                  <span>Total Category Furniture</span>
                  <h2><?=$ex_categories['count']?></h2>
                  <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span> 
                </div>
                <div class="col-md-3 col-sm-3  tile">
                  <span>Total Users</span>
                  <h2><?=$ex_users['count']?></h2>
                  <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->
<?php include_once '../layouts/app_footer.php'; ?>