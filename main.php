<?php include 'dbconnect.php'; ?>

<main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
<div class="bg-white">
  <div class="mx-auto max-w-2xl text-center px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Register</h2>

    <div class="h-30 px-4 mt-6">
    <form class="flex flex-wrap" action="create.php" method="POST">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <label class="block" for="firstname">First Name:</label>
            <input class="w-full my-2 p-2 border border-gray-300 rounded-md" type="text" name="firstname">
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
            <label class="block" for="lastname">Last Name:</label>
            <input class="w-full my-2 p-2 border border-gray-300 rounded-md" type="text" name="lastname">
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
            <label class="block" for="email">Email:</label>
            <input class="w-full my-2 p-2 border border-gray-300 rounded-md" type="email" name="email">
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
            <label class="block" for="password">Password:</label>
            <input class="w-full my-2 p-2 border border-gray-300 rounded-md" type="password" name="password">
        </div>
        <div class="w-full">
            <button class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600" type="submit" name="submit">Add</button>
        </div>
    </form>
</div>


    


<div class="mt-10 relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                    ID
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Password
                </th>
            </tr>
        </thead>
        <tbody>

        <?php

        // Fetch records from database
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        if($result){
          $row = mysqli_fetch_assoc($result);
          echo $row['firstname'];
        }

        ?>


            <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
            </tr> -->
        </tbody>
    </table>
</div>

  
    

      
    </div>
  </div>
</div>
</main>