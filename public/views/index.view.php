<?php include 'partials/header.php'?>

<?php 
    $db_config = require '../config.php';
    $db = new Database( $db_config );
    
    // sql
    $query = 'SELECT * FROM posts';
    $posts = $db->query($query)->get();
?>

<!-- Hero Section -->
<section class="bg-slate-800 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-4">Welcome to Blogify</h1>
        <p class="text-lg font-medium mb-6">Discover the latest in tech, programming, and design inspired by Vue.js.</p>
        <a href="#posts" class="px-6 py-3 bg-slate-700 text-white font-bold rounded-lg shadow-md hover:bg-slate-600 transition duration-300">
            Browse Posts
        </a>
    </div>
</section>

<!-- Blog Posts -->
<main id="posts" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-slate-900 text-center mb-10">Latest Blog Posts</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    <?php foreach( $posts as $post ):?>
        
        <?php if( $post['post_status'] != 'active') return; ?>

        <!-- Blog Card 1 -->
        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <img src="https://via.placeholder.com/400x200" alt="Blog Post" class="rounded-t-lg">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-slate-800 mb-2"><?= $post['name'];  ?></h3>
                <p class="text-gray-600 mb-4"><?= $post['content'];  ?></p>
                <a href="/details?slug=<?= $post['slug']; ?>" class="text-slate-600 font-medium hover:underline">Read More</a>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</main>

<?php include 'partials/footer.php'?>