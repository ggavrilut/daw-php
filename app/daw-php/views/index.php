<!DOCTYPE html>
<html>
    <?php include('head.html');?>
    <body>
       <!-- <h1><?php echo $a . $b . $c; ?></h1> 
       <h2><?php print(13 % 5)?></h2>
       <h3><?php 
       
        $v = [4, 3, 2, 6, 7, 8];
        for($i = 0; $i < count($v); $i++) {
            if($i < count($v) - 1) {
                echo $v[$i] . ', ';
            }
            else {
                echo $v[$i];
            }   
        }
        ?></h3> -->
        <h1>Contact</h1>
        <div>
            <form action="" method="POST">
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        <?php for($i = 0; $i < count($availableGenders); $i++) { ?>
                            <option value="<?php echo $availableGenders[$i]['value'];?>"><?php echo $availableGenders[$i]['name'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="position">Position</label>
                    <select name="position" id="position">
                        <?php foreach($positions as $key => $value) { ?>
                            <option value="<?php echo $key;?>"><?php echo $value;?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div>
                    <label for="lastname">Last name</label>
                    <input type="text" name="lastname" id="lastname">
                </div>
                <div>
                    <input type="submit" value="<?php echo $buttonText;?>">
                </div>
            </form>
        </div>
    </body>
</html>