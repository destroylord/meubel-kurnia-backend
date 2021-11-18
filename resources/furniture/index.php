<?php include_once '../layouts/app_header.php'; ?>

<div class="right_col" role="main">
    <div class="">
        
        <div class="clearfix"></div>

        <div class="row">
            <div class="x_content">
              <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                        <div class="x_title">
                          <h2>Data Furniture<small>Users</small></h2>
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
                                          <a href="http://localhost:8080/resources/furniture/create.php" class="btn btn-success btn-sm">
                                            Tambah
                                          </a>
                                      </p>
                            
                                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                          <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama</th>
                                              <th>Price</th>
                                              <th>Deskripsi</th>
                                              <th>Created_at</th>
                                              <th rowspan="">Action</th>
                                            </tr>
                                          </thead>
                                        <tbody>
                                          <?php

                                            $no = 1;
                                            $sql = mysqli_query($conn, "SELECT * FROM furnitures ORDER BY created_at desc");

                                            while ($data = mysqli_fetch_array($sql)) {?>

                                              <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['name']; ?></td>
                                                <td><?= $data['price']; ?></td>
                                                <td><?= $data['descriptions']; ?></td>
                                                <td><?= $data['created_at']; ?></td>
                                                <td class="d-flex justfy-content-start">
                                                  <a href="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <form action="<?=url()?>models/furniture/delete.php" method="POST">
                                                    <input type="hidden" name="delete_id" value="<?= $data['id']?>">
                                                    <input type="hidden" name="delete_images" value="<?= $data['images']?>">
                                                    <button type="submit" name="delete_images_furniture" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
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