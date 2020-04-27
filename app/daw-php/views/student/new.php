<!DOCTYPE html>
<html>
    <?php include('../views/head.html');?>
    <body>
        <?php include(DOCUMENT_ROOT . '/views/header.html');?>
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="column">
                    <div class="form-item">
                        <div class="form-label">
                            <label for="firstname">First name</label>
                        </div>
                        <div class="form-widget">
                            <input type="text" name="firstname" id="firstname" value="<?php echo $student && $student['firstname'] ? $student['firstname'] : ''; ?>"/>
                        </div>
                        <?php if(isset($errors) && array_key_exists('firstname', $errors)) { ?>
                            <div class="error"><?php echo $errors['firstname']; ?></div>
                        <?php } ?>                            
                    </div>
                    <div class="form-item">
                        <div class="form-label">
                            <label for="lastname">Last name</label>
                        </div>
                        <div class="form-widget">
                            <input type="text" name="lastname" id="lastname" value="<?php echo $student && $student['lastname'] ? $student['lastname'] : ''; ?>"/>
                        </div>
                        <?php if(isset($errors) && array_key_exists('lastname', $errors)) { ?>
                            <div class="error"><?php echo $errors['lastname']; ?></div>
                        <?php } ?>
                    </div>
                    <div class="form-item">
                        <div class="form-label">
                            <label for="birthday">Birthday</label>
                        </div>
                        <div class="form-widget">
                            <input type="date" name="birthday" id="birthday" value="<?php echo $student && $student['birthday'] ? $student['birthday'] : ''; ?>"/>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="form-item">
                        <div class="form-label">
                            <label for="bio">Bio</label>
                        </div>
                        <div class="form-widget">
                            <textarea name="bio" id="bio" cols="30" rows="10"><?php echo $student && $student['bio'] ? $student['bio'] : ''; ?></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <div class="form-label">
                            <label for="image">Image</label>
                        </div>
                        <div class="form-widget">
                            <input type="file" name="image" id="image">
                        </div>
                        <?php if(isset($errors) && array_key_exists('image', $errors)) { ?>
                            <div class="error"><?php echo $errors['image']; ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-item">
                    <input type="submit" value="Save"/>
                </div>
            </form>
        </div>
    </body>
</html>