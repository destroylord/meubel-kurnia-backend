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
                                          <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                                          Tambah
                                          </a>
                                          <?php include_once 'component/modal.php'; ?>
                                      </p>
                            
                                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                          <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama</th>
                                              <th>created at</th>
                                              <th rowspan="">Action</th>
                                            </tr>
                                          </thead>
                                        <tbody>
                                      <?php
                                      
                                        $no = 1;
                                        $sql = "SELECT * FROM categories_furniture";
                                        $result = mysqli_query($conn, $sql);
    
                                        while ($data = mysqli_fetch_array($result)) {?>
                                          <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['created_at']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                              </td>
                                          </tr>
                                      <?php
                                        }
                                      ?>
                                            <!-- <tr>
                                              <td>1</td>
                                              <td>Mas Apin</td>
                                              <td>
                                                <a href="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                              </td>
                                            </tr> -->
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