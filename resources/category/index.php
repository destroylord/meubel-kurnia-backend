<?php include_once '../layouts/app_header.php'; ?>

<div class="right_col" role="main">
        <div class="">
        
        <div class="clearfix"></div>

        <div class="row">
                <div class="x_content">
                <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Responsive example<small>Users</small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                        Tambah
                        </button>

                        <?php include_once 'component/modal.php'; ?>
                    </p>
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th rowspan="">Action</th>
                        </tr>
                      </thead>
                     <tbody>
                        
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