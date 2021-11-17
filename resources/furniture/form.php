<div class="x_panel">
    <div class="x_title">
    <h2>Create Record Furniture <small></small></h2>
    <ul class="nav navbar-right panel_toolbox">
        <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li> -->
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">

    <!-- start form for validation -->
        <form action="" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="fullname">Nama Furniture * :</label>
                <input type="text" id="fullname" class="form-control" name="name" required />
            </div>
            <div class="form-group">
                <label for="fullname">Foto Barang * :</label>
                <input type="file" id="fullname" class="form-control" name="fullname" required />
                <small>Upload barang bisa melebihi dari 1 foto.</small>
            </div>
            <div class="form-group">
                <label for="">Kategori Furniture</label>
                <select name="" id="" class="form-control">
                    <option disabled readonly >Pilih Option</option>
                    <?php
                        $result = mysqli_query($conn,"SELECT * FROM categories_furniture");

                        while ($data = mysqli_fetch_array($result)) {?>
                            <option><?= $data['nama']; ?></option>
                        <?php
                            }
                        ?>
                </select>
            </div>
            <div class="form-group">
                <label for="fullname">Harga Barang * :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required />
            </div>
            <div class="form-group">
                <label for="">Deskripsi Barang * :</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 ">
                    <button class="btn btn-primary" type="button">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    <!-- end form for validations -->

    </div>
</div>