<div class="x_panel">
    <div class="x_title">
    <h2>Edit Record Furniture <small></small></h2>
    <ul class="nav navbar-right panel_toolbox">
        <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li> -->
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">

    <!-- start form for validation -->
        <form action="<?=url()?>models/furniture/update.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Foto Barang * :</label><br>
                        <input type="hidden" name="id" value="<?=$data['id'];?>">
                        <img src="<?= url()."public/uploads/".$data['images']?>" class="mb-2" style="backgroud-position: center" alt="Foto" width="300px" height="300px">
                        <input type="file" name="images" id="img-multiple" class="form-control" value="<?= $data['images']?>" />
                        <input type="text" name="old-images" value="<?=$data['images']?>">
                        <small>Upload barang bisa melebihi dari 1 foto.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Barang * :</label>
                        <textarea name="descriptions" id="" cols="30" rows="10" class="form-control"><?= $data['descriptions']; ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Furniture * :</label>
                        <input type="text" id="" class="form-control" name="name" value="<?=$data['name']?>" required />
                    </div>
                    <div class="form-group">
                        <label for="">Kategori Furniture</label>
                        <select name="id_category_furniture" id="" class="form-control">
                            <option disabled readonly >Pilih Option</option>
                            <?php
                                $result = mysqli_query($conn,"SELECT * FROM categories_furniture");

                                $category = mysqli_query($conn, "SELECT * FROM furnitures");
                                $fetch = mysqli_fetch_array($category);
                            

                                while ($data = mysqli_fetch_array($result)) {?>
                             
                                    <option value="<?=$data['id']?>" <?= $data['id'] == $fetch['id_category_furniture'] ? 'selected' : ''; ?> ><?= $data['nama']; ?></option>
                                <?php
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Harga Barang * :</label>
                        <input type="text" id="price" class="form-control" name="price" value="<?=$fetch['price']?>" required />
                    </div>
                </div>
            </div>
          

            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6">
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" name="updated" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    <!-- end form for validations -->

    </div>
</div>