<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-600 to-purple-700 text-white">

    <div class="w-full max-w-md bg-white bg-opacity-10 backdrop-blur-md rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-center mb-6 text-white">Login</h2>
        <form action="#" method="post">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-white">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full mt-1 p-3 bg-white bg-opacity-20 border border-gray-300 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-white">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full mt-1 p-3 bg-white bg-opacity-20 border border-gray-300 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-3 rounded-lg transition duration-300">
                Login
            </button>
            <p class="mt-6 text-center text-sm">
                Don't have an account? <a href="#" class="text-yellow-400 font-semibold hover:underline">Sign up</a>
            </p>
        </form>
    </div>

</body>
</html>
