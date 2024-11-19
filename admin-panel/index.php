<?php include 'partials/header.php' ?>

<!-- Main Content -->
    <main class="flex-grow">
        <!-- Header with Profile -->
        <header class="flex items-center justify-between p-6 bg-white shadow-lg">
            <h1 class="text-3xl font-bold text-slate-800">Dashboard</h1>
            <!-- Profile Dropdown -->
            <div class="relative">
                <button id="profile-menu-button" class="flex items-center space-x-3 focus:outline-none">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                    <span class="hidden md:block text-slate-800 font-medium">John Doe</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.853l3.71-3.664a.75.75 0 111.04 1.082l-4.25 4.197a.75.75 0 01-1.042 0l-4.25-4.197a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- Dropdown -->
                <div id="profile-menu" class="absolute right-0 mt-2 w-48 bg-white border border-slate-200 rounded-lg shadow-lg hidden">
                    <a href="#" class="block px-4 py-2 text-slate-700 hover:bg-slate-100">Profile</a>
                    <a href="#" class="block px-4 py-2 text-slate-700 hover:bg-slate-100">Settings</a>
                    <a href="#" class="block px-4 py-2 text-red-600 hover:bg-red-50">Logout</a>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <section id="dashboard-section" class="p-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-slate-800 mb-4">Welcome Back, John Doe!</h2>
                <p class="text-slate-600">This is your dashboard. From here, you can manage your blogs, users, and account settings.</p>
            </div>
        </section>

        <!-- Blog Management Section -->
        <section id="blogs-section" class="p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Manage Blogs</h2>
            <div class="mb-6">
                <a href="#" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-500 transition">Create New Blog</a>
            </div>
            <div class="overflow-x-auto bg-white rounded-lg shadow-lg p-4">
                <table class="w-full border-collapse border border-slate-300">
                    <thead class="bg-slate-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4">Title</th>
                        <th class="text-left py-3 px-4">Author</th>
                        <th class="text-left py-3 px-4">Published</th>
                        <th class="text-left py-3 px-4">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4">How to Build Vue.js Applications</td>
                        <td class="py-3 px-4">John Doe</td>
                        <td class="py-3 px-4">15 Nov 2024</td>
                        <td class="py-3 px-4 flex space-x-4">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <!-- Repeat similar rows -->
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Users Management Section -->
        <section id="users-section" class="p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Manage Users</h2>
            <p class="text-slate-600">User management functionality will go here.</p>
        </section>

        <!-- Settings Section -->
        <section id="settings-section" class="p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Settings</h2>
            <p class="text-slate-600">Settings functionality will go here.</p>
        </section>
    </main>

<?php include 'partials/footer.php' ?>