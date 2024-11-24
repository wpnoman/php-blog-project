<?php include 'partials/header.php'?>
<?php 

    // redirect if slug is empty or not set
    if( !isset($_GET['slug']) ){
        header('Location: '. '/404');
    }

    $db_config = require '../config.php';
    $db = new Database( $db_config );
    
    // get slug
    $slug = htmlspecialchars( $_GET['slug'] );
    
    // sql
    $query = "SELECT * FROM `posts` WHERE `slug` = '$slug'";
    // dd($query);
    // exit;
    $post = $db->query($query)->fetch(PDO::FETCH_ASSOC);
?>

<!-- Blog Details -->
<section class="bg-white">
    <div class="container mx-auto px-6 py-12">
        <!-- Blog Header -->
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4"><?= $post['name']; ?></h1>
            <p class="text-slate-500 text-lg">Published on <span class="font-medium"><?= date('F d Y',strtotime($post['created_at']) ) ?></span></p>
        </div>
        <!-- Blog Image -->
        <div class="mt-8 text-center">
            <img src="https://via.placeholder.com/800x400" alt="Blog Banner" class="w-full md:w-3/4 lg:w-2/3 mx-auto rounded-lg shadow-md">
        </div>

        <!-- Blog Content -->
        <!-- Blog Content -->
        <div class="mt-12 mx-auto md:w-3/4 lg:w-2/3">
            <?= $post['content'];  ?>
        </div>

    </div>
</section>

<!-- Related Blogs -->
<section class="bg-slate-50 py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-slate-800 mb-8">Related Blogs</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Blog Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Blog Thumbnail" class="w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Top Vue.js Libraries in 2024</h3>
                    <p class="text-slate-600 text-sm">A list of essential Vue.js libraries to speed up your development process.</p>
                    <a href="#" class="text-slate-700 font-medium hover:underline mt-4 inline-block">Read More</a>
                </div>
            </div>
            <!-- Repeat similar cards for other related blogs -->
        </div>
    </div>
</section>


<?php include 'partials/footer.php'?>