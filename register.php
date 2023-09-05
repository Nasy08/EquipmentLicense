<?php
include_once "db/config.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <div class="h-screen w-screen bg-gray-200 pt-10">
    <div class="max-w-xl mx-auto bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <h1 class="text-4xl font-semibold">Register</h1>
      <br>
      <form class="flex-col space-y-4" action="function/register-function.php" method="POST">
        <label class="block font-medium text-gray-700" for="name">NAME</label>
        <input
          class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 disabled:bg-gray-200 sm:text-sm border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:outline-none  "
          type="text" name="name" placeholder="Name">
        <label class="block font-medium text-gray-700" for="id">STAFF ID/NO.NDP</label>
        <input
          class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 disabled:bg-gray-200 sm:text-sm border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:outline-none  "
          type="text" name="id" placeholder="ID Staff or Student">
        <label class="block font-medium text-gray-700" for="nohp">NO. HP</label>
        <input
          class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 disabled:bg-gray-200 sm:text-sm border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:outline-none  "
          type="text" name="nohp" placeholder="No.HP">
        <label class="block font-medium text-gray-700" for="email">EMAIL</label>
        <input
          class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 disabled:bg-gray-200 sm:text-sm border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:outline-none  "
          type="email" name="email" placeholder="Email">
        <label class="block font-medium text-gray-700" for="password">PASSWORD</label>
        <input
          class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 disabled:bg-gray-200 sm:text-sm border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:outline-none  "
          type="password" name="password" placeholder="Password">
        <label class="block font-medium text-gray-700" for="confirm_password">CONFIRM PASSWORD</label>
        <input
          class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 disabled:bg-gray-200 sm:text-sm border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:outline-none  "
          type="password" name="confirm_password" placeholder="Confirm Password">

        <label class="block font-medium text-gray-700" for="type">TYPE</label>

        <select name="type"
          class="w-full shadow-sm block py-2 sm:text-sm rounded-md text-gray-800 disabled:bg-gray-200 sm:text-sm border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400 focus:outline-none  ">
          <option value="" hidden>Select an Option: </option>
          <option value="admin">Admin</option>
          <option value="student">Student</option>
        </select>

        <div class="flex justify-end">
          <button
            class="inline-flex items-center justify-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-md shadow-sm focus:outline-none ring-2 ring-offset-2 ring-transparent ring-offset-transparent disabled:bg-gray-400 dark:disabled:bg-slate-700 appearance-none text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-white w-full"
            type="submit" name="_action" value="create">
            <div class="relative">
              <div class="">Register</div>
              <div class="hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"><svg
                  class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                  </path>
                </svg></div>
            </div>
          </button>
        </div>
      </form>
    </div>
  </div>
  </select>
</body>

</html>