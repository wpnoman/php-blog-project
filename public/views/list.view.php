<?php include 'partials/header.php'?>

<?php 
    $db_config = require '../config.php';
    $db = new Database( $db_config );
    
    // sql
    $query = 'SELECT * FROM posts';
    $posts = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Search and Filter Form -->
<section class="bg-white py-10">
    <div class="container mx-auto">
        <form class="flex flex-col md:flex-row items-center gap-6">
            <!-- Search -->
            <div class="flex-1 relative">
                <input type="text" name="search" placeholder="Search blogs..." class="w-full px-4 py-3 border border-slate-300 rounded-full shadow-md focus:outline-none focus:ring focus:ring-slate-400" />
            </div>
            <!-- Filter by Category -->
            <div class="flex-1">
                <select name="category" class="w-full px-4 py-3 border border-slate-300 rounded-full shadow-md focus:outline-none focus:ring focus:ring-slate-400">
                    <option value="">Filter by category</option>
                    <option value="vuejs">Vue.js</option>
                    <option value="javascript">JavaScript</option>
                    <option value="frontend">Frontend</option>
                    <option value="backend">Backend</option>
                </select>
            </div>
            <!-- Submit Button -->
            <div>
                <button type="submit" class="px-6 py-3 bg-slate-800 text-white rounded-full hover:bg-slate-700 transition">
                    Apply
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Blogs Section -->
<section class="py-16 bg-slate-50">
    <div class="container mx-auto">
        <h1 class="text-4xl font-extrabold text-slate-900 text-center mb-10">Explore Our Blogs</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php foreach( $posts as $post ):?>
            
            <?php if( $post['post_status'] != 'active') return; ?>
            <!-- Blog Card -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl overflow-hidden transition duration-300">
                <img src="https://via.placeholder.com/400x200" alt="Blog Post" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-slate-800 mb-2"><?= $post['name'];  ?></h3>
                    <p class="text-gray-600 mb-4"><?= $post['content'];  ?></p>
                    <a href="/details?slug=<?= $post['slug'];  ?>" class="text-slate-800 font-medium hover:underline">Read More</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav aria-label="Pagination" class="flex space-x-2">
                <!-- Previous Button -->
                <a href="#" class="px-4 py-2 bg-slate-200 text-slate-600 rounded-full hover:bg-slate-300 transition">
                    Previous
                </a>
                <!-- Page Numbers -->
                <a href="#" class="px-4 py-2 bg-slate-800 text-white rounded-full font-bold">1</a>
                <a href="#" class="px-4 py-2 bg-slate-200 text-slate-600 rounded-full hover:bg-slate-300 transition">2</a>
                <a href="#" class="px-4 py-2 bg-slate-200 text-slate-600 rounded-full hover:bg-slate-300 transition">3</a>
                <span class="px-4 py-2 text-slate-400">...</span>
                <a href="#" class="px-4 py-2 bg-slate-200 text-slate-600 rounded-full hover:bg-slate-300 transition">10</a>
                <!-- Next Button -->
                <a href="#" class="px-4 py-2 bg-slate-200 text-slate-600 rounded-full hover:bg-slate-300 transition">
                    Next
                </a>
            </nav>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'?>