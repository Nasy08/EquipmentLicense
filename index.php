<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<main class="container mx-auto p-4 mt-12 bg-white flex flex-col items-center justify-center text-gray-700">
<div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-4">
        <h1 class="text-4xl font-semibold">Login</h1>
    </div>
    <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-6">
    <form action="function/login.php" method="POST">
        <input class="mb-4 p-2 appearance-none block w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500" type="text" name="id" placeholder="ID">
        <input class="mb-4 p-2 appearance-none block w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500" type="password" name="password" placeholder="Password">
        <button class="ml-auto w-1/2 bg-gray-800 text-white p-2 rounded font-semibold hover:bg-gray-900" type="submit">Login</button> 
        <a href="register.php">Register</a>
    </form>
</div>
    </main>
</body>

</html>
</body>

</html>