<?php require './../utility/helper.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Blogify</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Include CKEditor CDN -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script> -->
</head>

<body class="bg-slate-50 font-sans">
<!-- Sidebar and Main Content Container -->
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-slate-800 text-white flex flex-col">
        <div class="p-6 text-center font-bold text-2xl tracking-wide border-b border-slate-700">Admin Panel</div>
        <nav class="flex-grow">
            <ul class="space-y-2 p-4">
                <?php
                    //isUrl();
                    // $active = 'bg-slate-700' : 'hover:bg-slate-700';
                ?>
                <li><a href="./" class="block px-4 py-2 rounded-md">Dashboard</a></li>
                <li><a href="./create.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Create</a></li>
                <li><a href="./edit.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Edit</a></li>
                <li><a href="./profile.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Profile</a></li>
                <li><a href="./register.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Register</a></li>
                <li><a href="./settings.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Settings</a></li>
                <li><a href="./login.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Login</a></li>
            </ul>
        </nav>
        <div class="p-4">
            <a href="#" class="block px-4 py-2 text-center rounded-md bg-red-600 hover:bg-red-500">Logout</a>
        </div>
    </aside>