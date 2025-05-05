
<div class="modal" id="askQuestionModal">
    <div class="modal-content relative bg-white shadow-lg rounded-lg max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-semibold mb-4 text-center text-blue-600">Ask a Question</h2>
        <form id="questionForm" action="#" method="post">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                <input type="text" id="questionTitle" class="w-full p-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 placeholder-gray-500" placeholder="Enter your question title" name="title" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea id="questionDescription" class="w-full p-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 placeholder-gray-500" rows="3" placeholder="Describe your question..." name="description" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Code (optional)</label>
                <textarea id="questionCode" class="w-full p-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 placeholder-gray-500" rows="3" placeholder="Paste your code here..." name="code"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Type of Question</label>
                <div class="relative">
                    <input type="text" id="questionType" class="w-full p-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 placeholder-gray-500" placeholder="e.g., Python, JavaScript, HTML, Web Development" name="typeQuestion" required>
                    <div class="absolute bottom-0 left-0 w-full border-t-2 border-gray-300 mt-1"></div>
                </div>
                <p class="text-sm text-gray-600 mt-1">
                    Please specify the programming language (e.g., Python, JavaScript) or the type of question (e.g., Web Development, General Programming).
                </p>
                <p class="text-xs text-gray-500 mt-2">
                    This helps others quickly identify the context of your question and provide relevant answers or solutions.
                </p>
            </div>
            <div class="flex justify-end mt-4">
                <button type="submit" class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                    Submit
                </button>
            </div>
        </form>
        <span class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 cursor-pointer" id="closeAskQuestionModal">✖</span>
    </div>
</div>
<?php

include('./components/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$title=$_POST['title'];
$description=$_POST['description'];
$code=$_POST['code'];
$typeQuestion=$_POST['typeQuestion'];
$userId= $_SESSION['sno'];
$username= $_SESSION['username'];

$insert="INSERT INTO `questions`(`title`, `description`, `code`, `type of question`, `userId`, `username`)
 VALUES ('$title','$description','$code','$typeQuestion','$userId','$username')";

$querry3 = mysqli_query($myconnect, $insert);



}
    

?>
