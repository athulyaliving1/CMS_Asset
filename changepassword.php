<?php 
ini_set('display_errors',FALSE);
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>

<head>
<title>Asset || ChangePassword</title>
    <link rel="icon" href="https://athulyahomecare.com/lp/images/fav.ico" />
    <!-- <link rel="stylesheet"  href="style.css"> -->
</head>

<body>
    <div>
        <div class="flex flex-col flex-auto flex-shrink-0 min-h-screen antialiased text-black bg-zinc-100 ">
            <?php
       include('./include/sidebar.php');
           
           ?>
            <div
                class="relative flex flex-col justify-center w-full h-full py-6 overflow-hidden antialiased text-gray-800 sm:py-12">
                <div class="relative py-3 mx-auto text-center sm:w-96">
                    <span class="text-2xl font-semibold "><h2>Change Password</h2></span>
                    <div class="mt-4 text-left bg-white rounded-lg shadow-xl">
                        <div class="h-2 bg-pink-400 rounded-t-md"></div>
                        <div class="px-8 py-6 ">
                            <form action="change_db.php" method="post">
                                
                                <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>

                                <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                                <?php } ?>

                                <label class="block font-semibold">Old Password</label>
                                <input type="password" name="op" placeholder="Old Password"
                                    class="w-full h-5 px-3 py-5 mt-2 mb-4 border rounded-md bg-zinc-100 hover:outline-none focus:outline-none focus:ring-sky-900 focus:ring-1">
                                <label class="block font-semibold">New Password</label>
                                <input type="password" name="np" placeholder="New Password"
                                    class="w-full h-5 px-3 py-5 mt-2 mb-4 border rounded-md bg-zinc-100 hover:outline-none focus:outline-none focus:ring-sky-900 focus:ring-1">
                                <label class="block font-semibold">Confirm New Password</label>
                                <input type="password" name="c_np" placeholder="Confirm New Password"
                                    class="w-full h-5 px-3 py-5 mt-2 mb-4 border rounded-md bg-zinc-100 hover:outline-none focus:outline-none focus:ring-sky-900 focus:ring-1">
                                    <div class="flex items-baseline justify-between">
                                    <a href="index1.php"
                                    class="px-6 py-2 mt-4 text-white bg-pink-500 rounded-md hover:bg-pink-600 ">HOME</a>
                                    <button type="submit" name="submit"
                                    class="px-6 py-2 mt-4 text-white bg-pink-500 rounded-md hover:bg-pink-600 ">CHANGE</button>
                                
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

</body>

</html>
<?php 
}else{
     header("Location: index1.php");
     exit();
}

 ?>