<?php include_once '../layouts/app_header.php'; ?>

<div class="right_col" role="main">
    <div class="">
        
        <div class="clearfix"></div>

        <div class="row">
            <div class="x_content">
              <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                        <div class="x_title">
                          <h2>Data Customer<small></small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <div class="row">
                              <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                            
                                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                          <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Kode</th>
                                              <th>Nama</th>
                                              <th>Alamat</th>
                                              <th>Total Harga</th>
                                              <th rowspan="">Action</th>
                                            </tr>
                                          </thead>
                                        <tbody>
                                          <?php

                                            $no = 1;
                                            $sql = mysqli_query($conn, "SELECT * FROM orders ORDER BY created_at desc");
                                            $ex = mysqli_fetch_row($sql);

                                            ?>
                                        </tbody>
                                      </table>
                                    </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../layouts/app_footer.php'; ?>