<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full border-l-4 border-green-500">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Submission Received</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect value of input field
        $name = htmlspecialchars($_POST['fullName']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $course = htmlspecialchars($_POST['course']);
        
        echo "<div class='space-y-3'>";
        echo "<p class='text-gray-700'><strong>Name:</strong> $name</p>";
        echo "<p class='text-gray-700'><strong>Email:</strong> $email</p>";
        echo "<p class='text-gray-700'><strong>Phone:</strong> $phone</p>";
        echo "<p class='text-gray-700'><strong>Course:</strong> <span class='text-blue-600'>$course</span></p>";
        echo "</div>";
    } else {
        echo "<p class='text-red-500'>Error: No data submitted.</p>";
    }
    ?>
    
    <a href="index.html" class="block mt-6 text-center text-indigo-600 hover:underline">Go Back</a>
</div>

</body>
</html>

