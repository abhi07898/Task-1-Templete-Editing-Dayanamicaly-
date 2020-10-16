<?php
include('data.php');

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
    <div id='signup-form-design'>
        <form action="" method='POST'>
            <table>
            <tr>
                <td class = 'td-design'> <label for="username">User Name : </label>   </td>
                <td class = 'td-design'>  <input type="text" value="" name = "username"></td> 
                <td><span><?php echo $name_err ; ?></span></td>
            </tr>
            <tr>
                <td class = 'td-design'> <label for="password">Password : </label>   </td>
                <td class = 'td-design'>  <input type="password" value="" name = "password"></td> 
                <td><span><?php echo $password_err ; ?></span></td>
            </tr>
            <tr ><td><input type="submit" value="SUBMIT" name = "login" class = 'input-btn-design-login' ></td></tr>
            </table>
            <br><br>
        </form>
</div>
    </body>
</html>