<div class="x_panel">
    <div class="x_title">
    <h2>Tambah Form <small>Click to validate</small></h2>
    <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Settings 1</a>
            <a class="dropdown-item" href="#">Settings 2</a>
            </div>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">

    <!-- start form for validation -->
    <form id="demo-form" data-parsley-validate="" novalidate="">
        <label for="fullname">Full Name * :</label>
        <input type="text" id="fullname" class="form-control" name="fullname" required="">

        <label for="email">Email * :</label>
        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required="">

        <label>Gender *:</label>
        <p>
        M:
        <div class="iradio_flat-green checked" style="position: relative;"><input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required="" data-parsley-multiple="gender" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> F:
        <div class="iradio_flat-green" style="position: relative;"><input type="radio" class="flat" name="gender" id="genderF" value="F" data-parsley-multiple="gender" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
        </p>

        <label>Hobbies (2 minimum):</label>
        <p style="padding: 5px;">
        <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required="" class="flat" data-parsley-multiple="hobbies" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Skiing
        <br>

        <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" data-parsley-multiple="hobbies" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Running
        <br>

        <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" data-parsley-multiple="hobbies" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Eating
        <br>

        <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" data-parsley-multiple="hobbies" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Sleeping
        <br>
        </p><p>

            <label for="heard">Heard us by *:</label>
            <select id="heard" class="form-control" required="">
            <option value="">Choose..</option>
            <option value="press">Press</option>
            <option value="net">Internet</option>
            <option value="mouth">Word of mouth</option>
            </select>

            <label for="message">Message (20 chars min, 100 max) :</label>
            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

            <br>
            <span class="btn btn-primary">Validate form</span>

    </p></form>
    <!-- end form for validations -->

    </div>
</div>