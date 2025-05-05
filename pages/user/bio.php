<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>General Settings</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Container -->
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <nav class="w-64 bg-gradient-to-b from-gray-800 to-gray-900 text-white px-6 py-8 hidden md:block shadow-lg rounded-r-lg">
      <h1 class="text-3xl font-bold mb-6">Settings</h1>
      <ul class="space-y-4">
        <li><a href="usersetting.php" class="block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Account</a></li>
        <li><a href="updatepassword.php" class="block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Password</a></li>
        <li><a href="updateimage.php" class="block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Profile Image</a></li>
        <li><a href="generalsettings.php" class="block px-4 py-2 rounded-md  hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">General Settings</a></li>
      </ul>
    </nav>


    <!-- Main Content -->
    <main class="flex-1 px-6 py-8">
      <div class="bg-white rounded-lg shadow p-6">
        <div id="general-settings" class="space-y-6">
          <h2 class="text-xl font-semibold mb-4">General Settings</h2>

          <!-- Custom Bio and Social Links -->
          <form action="update_settings.php" method="post" class="space-y-6">
            <div class="mb-4">
              <label for="bio" class="block text-sm font-semibold">Custom Bio</label>
              <textarea id="bio" name="bio" rows="4" placeholder="Write a short bio about yourself..." class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div class="mb-4">
              <label for="github" class="block text-sm font-semibold">GitHub Link</label>
              <input type="url" id="github" name="github" placeholder="https://github.com/your-username" class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
              <label for="linkedin" class="block text-sm font-semibold">LinkedIn Link</label>
              <input type="url" id="linkedin" name="linkedin" placeholder="https://linkedin.com/in/your-profile" class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
              <label for="twitter" class="block text-sm font-semibold">Twitter Link</label>
              <input type="url" id="twitter" name="twitter" placeholder="https://twitter.com/your-username" class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-36 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Save Changes</button>
          </form>
        </div>
      </div>
    </main>

  </div>

</body>
</html>
