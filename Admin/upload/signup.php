<?php
include('config.php');
include('insert.php');
?>
<html>
    <head>
        <title>login-page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div id="eror-output">
            <?php
            if (sizeof($error) > 0) {
                foreach ($error as $values) {
                        echo $values['msg'];
                }
            }
            ?> 
        </div>
        <div id='signup-form-design'>
        

        <form action="" method = "POST">
            <table>
            <tr>
                <td class = 'td-design'>  <label for="username"> User Name :</label>  </td>
                <td class = 'td-design'>   <input type="text" value="<?php echo $name ;?>" name = "username"> </td>
                <td><span> <?php echo $name_err ;?> </span></td>
            </tr>
            <tr>
                <td class = 'td-design'>  <label for="password"> Password :</label>  </td>
                <td class = 'td-design'>   <input type="password" value="<?php echo $password ;?>" name = "password"> </td>
                <td><span> <?php echo $password_err ;?> </span></td>
            </tr>
            <tr>
                <td class = 'td-design'>  <label for="repassword"> Re-Password :</label>  </td>
                <td class = 'td-design'>   <input type="password" value="" name = "repassword"> </td>
                <td><span> <?php echo $repassword_err ;?></span></td>
            </tr>
            <tr>
                <td class = 'td-design'>  <label for="email"> Email :</label>  </td>
                <td class = 'td-design'>   <input type="text" value="<?php echo $email ;?>" name = "email"> </td>
                <td><span><?php echo $email_err ;?> </span></td>
            </tr>
            <tr>
                <td class = 'td-design'>  <input type="submit" value="SIGNUP" name="signup" class = 'input-btn-design'>  </td>
                <td class = 'td-design'>   <a href="login.php" class = 'input-btn-design'>LOGIN</a> </td>
            </tr>
            </table>
            
        </form>
        </div>
    </body>
</html>