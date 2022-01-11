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
                                              <th>Status</th>
                                            </tr>
                                          </thead>
                                        <tbody>
                                          <?php

                                            $no = 1;
                                            $sql = mysqli_query($conn, 
                                            "SELECT orders.id_order, orders.kode,users.username, orders.price, orders.location,orders.created_at FROM orders 
                                            INNER JOIN checkouts ON orders.id_checkout = checkouts.id_checkout 
                                            INNER JOIN users ON checkouts.id_user = users.id");
                                            
                                              while ($data = mysqli_fetch_assoc($sql)) {?>

                                                 <td><?= $no++; ?></td>
                                                 <td><?= $data['kode']; ?></td>
                                                 <td><?= $data['username']; ?></td>
                                                 <td><?= $data['location']; ?></td>
                                                 <td><?= $data['price']; ?></td>
                                                 <td>
                                                   
                                                 </td>
                                               </tr>
                                               
                                            <?php
                                              }
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