<?php include 'partials/admin/header.php'?>
    <?php include 'partials/admin/aside.php'?>

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Header -->
        <header class="p-6 bg-white shadow-lg">
            <h1 class="text-3xl font-bold text-slate-800">Manage Category</h1>
        </header>

        <!-- Blog Creation Form -->
        <section class="p-6">
            <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-6">
                    <label for="title" class="block text-slate-700 font-medium mb-2">Category name</label>
                    <input type="text" id="title" name="category_name" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter the blog title" required>
                </div>

                <div class="mb-6">
                    <label for="author" class="block text-slate-700 font-medium mb-2">Category slug</label>
                    <input type="text" id="author" name="category_slug" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter the author name" required>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-500 transition">Add New Category</button>
                </div>
            </form>
        </section>

        <div class="p-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-slate-800 mb-6">Category list</h2>

                <table class="w-full border-collapse border border-slate-300">
                    <thead class="bg-slate-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4">Name</th>
                        <th class="text-left py-3 px-4">Author</th>
                        <th class="text-left py-3 px-4">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4">Cat 1</td>
                        <td class="py-3 px-4">John Doe</td>
                        <td class="py-3 px-4 flex space-x-4">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <!-- Repeat similar rows -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include 'partials/admin/footer.php'?>