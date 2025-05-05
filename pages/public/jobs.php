<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="./styles/jobs.style.css">
</head>
<body class="bg-gray-100">

    <!-- Hero Section -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-500 text-white py-16 text-center">
        <h1 class="text-4xl font-extrabold">Find Your Dream Job</h1>
        <p class="mt-2 text-lg">Explore top job opportunities around the world.</p>
        <form id="job-search-form" class="mt-6 flex justify-center gap-4">
            <input type="text" id="job-role" class="p-3 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Job Role (e.g., Software Developer)" />
            <input type="text" id="job-location" class="p-3 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Location (e.g., India)" />
            <button type="submit" class="bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Search</button>
        </form>
    </header>

    <!-- Job Listings Section -->
    <div class="container mx-auto py-12">
        <div id="job-listings" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Dynamic job cards will appear here -->
        </div>
    </div>

    <script src="./script/jobs.script.js">
     
    </script>

</body>
</html>
