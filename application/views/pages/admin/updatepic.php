<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Change</title>
    <link rel="icon" href="<?= base_url() ?>/favicon.svg" type="image/gif">
    <?php echo $style; ?>
</head>

<body>
    <div class="box" style="background-color: #EDF9FF;">
        <?php echo $navbar; ?>
        <div class="container content navmargin bg-light">
            <div class="row mt-5 h-100 rounded border m-5 bg-white">
                <div class="col-sm mr-0 pr-0">
                    <div class="container">
                        <img src="<?= base_url($detail['picture']); ?>" class="rounded mx-auto d-block mt-3" alt="...">
                        <h2 class="text-center"><?= str_replace('assets/images/', '', $detail['picture']); ?></h2>
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <?= form_open_multipart('admin/updateUserPicture'); ?>
                                <!-- csrv -->
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <!-- hidden input -->
                                <input type="hidden" name="user_id" value="<?=$detail['user_id']?>"></input>
                                <input type="hidden" name="name" value="<?=$detail['name']?>"></input>
                                <!-- file -->
                                <input class="form-control w-auto" type="file" name="userfile"></input>
                                <div class="row mx-auto mt-2 d-block">
                                    <!-- submit btn -->
                                    <input type="submit" class="btn btn-success font-weight-bold" value="Save Changes"></input>
                                    <!-- reset picture -->
                                    <a href="<?= base_url('admin/reset_user_picture/' . $detail['user_id']) ?>" class="btn btn-secondary font-weight-bold text-white mt-1">Reset Picture</a>
                                    <!-- cancel btn -->
                                    <a href="<?= base_url('admin') ?>" class="btn btn-danger font-weight-bold text-white mt-1">Cancel</a>
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $footer; ?>
    </div>
    <?php echo $script; ?>
</body>

</html>