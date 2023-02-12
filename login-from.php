<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <?php
    // using get methode 


    // if (!empty($_GET['login_btn'])) {
    //    echo $_GET['u_email'].'<br>';
    //     echo $_GET['u_pass'];
    // }
    if (isset($_GET['login_btn'])) {
       echo $_GET['u_email'].'<br>';
        echo $_GET['u_pass'];
    }

    // using post method 
    // if (isset($_POST['login_btn'])) {
    //    echo $_POST['u_email'].'<br>';
    //     echo $_POST['u_pass'];
    // }
    // using condition and nevigate to diffrent page 
    if (isset($_POST['login_btn'])) {
       $userEmail= $_POST['u_email'];
        $userPass= $_POST['u_pass'];
        if ($userEmail=='rahim@gmail.com' && $userPass ==123456) {
            $success = 'logged in successfully';
             header('refresh:5; url=login-success.php');

        }

        $_POST = array();
    }
    ?>
    <main>
        <?php
        if (isset($success)) {
            echo '<div class="w-full h-screen">
            <h4 class="text-purple-400 p-6 text-5xl z-20 text-center">Loading Please Wait</h4>
        <img class="w-3/4 mx-auto" src="https://wpamelia.com/wp-content/uploads/2018/11/ezgif-2-6d0b072c3d3f.gif" alt="">
        </div>';
        }
        ?>
        
        <section class="w-4/12 mx-auto mt-12 bg-slate-600 p-8 rounded-md">
            <h2 class="text-3xl font-medium mt-6 text-center  text-white mb-8">Login Please</h2>
            <form action="" method="post">
                <input class="block w-full rounded-md px-3 py-2 text-2xl" type="text" placeholder="Your Email" name="u_email">
                <input class="block w-full rounded-md px-3 py-2 text-2xl my-4" type="password" name="u_pass" id="" placeholder="Your Password">
                <input name="login_btn" class="bg-violet-500 px-10 py-2 mx-auto block cursor-pointer rounded-md font-bold hover:text-violet-500 bg-white" type="submit" value="Login">
            </form>
        </section>
    </main>
</body>
</html>