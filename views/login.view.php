
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blogify</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 font-sans min-h-screen flex items-center justify-center">
<div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
    <h1 class="text-2xl font-bold text-slate-800 mb-6 text-center">Login to Blogify</h1>
    <form action="#" method="POST">
        <div class="mb-4">
            <label for="email" class="block text-slate-700 font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter your email">
            <?php 
                if( isset($error['email'] ) ){
                    echo '<p class="text-red-500">'. $error['email'] .'</p>';
                } 
            ?>
        </div>
        <div class="mb-6">
            <label for="password" class="block text-slate-700 font-medium mb-2">Password</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter your password">
            <?php 
                if( isset($error['password'] ) ){
                    echo '<p class="text-red-500">'. $error['password'] .'</p>';
                } 
            ?>
        </div>
        <div class="flex items-center justify-between mb-6">
            <label class="inline-flex items-center text-slate-600">
                <input type="checkbox" class="form-checkbox text-slate-600 focus:ring focus:ring-slate-400 rounded">
                <span class="ml-2">Remember me</span>
            </label>
            <a href="#" class="text-slate-600 hover:underline text-sm">Forgot Password?</a>
        </div>
        <?php 
            if( isset($error['notfound'] ) ){
                echo '<p class="text-red-500 pb-2 text-center">'. $error['notfound'] .'</p>';
            }
        ?>
        <button type="submit" class="w-full px-4 py-2 bg-slate-800 text-white font-bold rounded-lg hover:bg-slate-700 transition">Login</button>
    </form>
    <p class="text-center text-slate-600 mt-4">Don't have an account? <a href="/registration" class="text-slate-800 font-bold hover:underline">Sign Up</a></p>
</div>
</body>

</html>
