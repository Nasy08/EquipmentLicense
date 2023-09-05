<?php
include_once "db/config.php";

session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "<script>alert('You must log in first.'); window.location.href = 'index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />
    <style>
        @media (min-width: 768px) {

            /* Apply styles for screens with a width of 768px or more */
            .text-5xl {
                font-size: 4rem;
                /* Adjust the font size as needed */
            }
        }

        @media (min-width: 425px) {

            /* Apply styles for screens with a width of 768px or more */
            .text-5xl {
                font-size: 3rem;
                /* Adjust the font size as needed */
            }
        }

        @media (min-width: 375px) {

            /* Apply styles for screens with a width of 768px or more */
            .text-5xl {
                font-size: 2rem;
                /* Adjust the font size as needed */
            }
        }

        @media (min-width: 320px) {

            /* Apply styles for screens with a width of 768px or more */
            .text-5xl {
                font-size: 1rem;
                /* Adjust the font size as needed */
            }
        }
    </style>
</head>

<body>
    <!-- component -->
    <!-- source https://gist.github.com/dsursulino/369a0998c0fc8c25e19962bce729674f -->
    <div class=" min-h-screen">
        <div class="fixed bg-white text-blue-800 px-10 py-1 z-10 w-full shadow-md">
            <div class="flex items-center justify-between py-2 text-5x1">
                <div class="font-bold text-blue-900 text-xl">Admin<span class="text-orange-600">Panel</span></div>
                <div class="flex items-center text-gray-500">
                    <span class="material-icons-outlined p-2" style="font-size: 30px">notifications</span>
                    <div class="bg-center bg-cover bg-no-repeat rounded-full inline-block">
                        <img src="img/user-icon.png" alt="User Icon" style="width: 40px; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row pt-24 px-10 md:px-10 pb-4">
            <div class="w-2/12 mr-6">
                <div class="bg-white rounded-xl shadow-lg mb-6 px-6 py-4">
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">dashboard</span>
                        Home
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="admin-inbox.php" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">email</span>
                        Inbox
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="function/logout.php" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">power_settings_new</span>
                        Log out
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                </div>
            </div>

            <div class="w-10/12">
                <div class="flex flex-row">
                    <div class="bg-no-repeat bg-red-200 border border-red-300 rounded-xl w-7/12 mr-2 p-6"
                        style="background-image: url(https://previews.dropbox.com/p/thumb/AAvyFru8elv-S19NMGkQcztLLpDd6Y6VVVMqKhwISfNEpqV59iR5sJaPD4VTrz8ExV7WU9ryYPIUW8Gk2JmEm03OLBE2zAeQ3i7sjFx80O-7skVlsmlm0qRT0n7z9t07jU_E9KafA9l4rz68MsaZPazbDKBdcvEEEQPPc3TmZDsIhes1U-Z0YsH0uc2RSqEb0b83A1GNRo86e-8TbEoNqyX0gxBG-14Tawn0sZWLo5Iv96X-x10kVauME-Mc9HGS5G4h_26P2oHhiZ3SEgj6jW0KlEnsh2H_yTego0grbhdcN1Yjd_rLpyHUt5XhXHJwoqyJ_ylwvZD9-dRLgi_fM_7j/p.png?fv_content=true&size_mode=5); background-position: 90% center;">
                        <p class="text-5xl text-indigo-900">Welcome,
                            <br><strong><?php echo strtoupper($_SESSION['name']); ?></strong>!</p>
                        <span class="bg-red-300 text-xl text-white inline-block rounded-full mt-12 px-8 py-2"><strong><?php
                            date_default_timezone_set("Asia/Singapore");
                            echo "". date("h:i a");?></strong></span>
                    </div>

                    <!-- Card Inbox -->
                    <div class="bg-no-repeat bg-orange-200 border border-orange-300 rounded-xl w-5/12 ml-2 p-6"
                        style="background-image: url(https://previews.dropbox.com/p/thumb/AAuwpqWfUgs9aC5lRoM_f-yi7OPV4txbpW1makBEj5l21sDbEGYsrC9sb6bwUFXTSsekeka5xb7_IHCdyM4p9XCUaoUjpaTSlKK99S_k4L5PIspjqKkiWoaUYiAeQIdnaUvZJlgAGVUEJoy-1PA9i6Jj0GHQTrF_h9MVEnCyPQ-kg4_p7kZ8Yk0TMTL7XDx4jGJFkz75geOdOklKT3GqY9U9JtxxvRRyo1Un8hOObbWQBS1eYE-MowAI5rNqHCE_e-44yXKY6AKJocLPXz_U4xp87K4mVGehFKC6dgk_i5Ur7gspuD7gRBDvd0sanJ9Ybr_6s2hZhrpad-2WFwWqSNkh/p.png?fv_content=true&size_mode=5); background-position: 100% 40%;">
                        <p class="text-5xl text-indigo-900">Inbox <br>
                        <?php
                                    $dash_totallcid_query = "SELECT * FROM equipment ";
                                    $dash_totallcid_query_run = mysqli_query($conn, $dash_totallcid_query);

                                    if($category_total = mysqli_num_rows($dash_totallcid_query_run))
                                    {
                                        echo '<p class="mb-0 text-5xl font-bold text-indigo-900">  '.$category_total.'</p>';
                                    }else{
                                        echo '<p class="mb-0">No Data...</p>';
                                    }
                                
                                ?>
                        </p>
                        <a href="admin-inbox.php"
                            class="bg-orange-300 text-xl text-white underline hover:no-underline inline-block rounded-full mt-12 px-8 py-2"><strong>See
                                messages</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>