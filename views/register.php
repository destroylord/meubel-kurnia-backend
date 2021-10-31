
<h1>Register</h1>

<form action="" method="post">

    <div class="form-group">
        <label>Firstname</label>
        <input type="text" 
                class="form-control<?php echo $model->hasError('firstname') ? ' is-invalid' : ''?>" 
                name="firstname">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('firstname')?>
        </div>
    </div>
    <div class="form-group">
        <label>lastname</label>
        <input type="text" 
                class="form-control<?php echo $model->hasError('lastname') ? ' is-invalid' : ''?>" 
                name="lastname">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('lastname')?>
        </div>
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="email" 
                class="form-control<?php echo $model->hasError('email') ? ' is-invalid' : ''?>" 
                name="email">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('email')?>
        </div>
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="password" 
                class="form-control<?php echo $model->hasError('password') ? ' is-invalid' : ''?>" 
                name="password">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('password')?>
        </div>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" 
                class="form-control<?php echo $model->hasError('confirmPassword') ? ' is-invalid' : ''?>" 
                name="confirmPassword">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('confirmPassword')?>
        </div>
    </div>
    <button type="submit" class="btn mt-2 btn-primary">Submit</button>

</form>

