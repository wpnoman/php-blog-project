<?php
    use Core\Helpers;

    include Helpers::base_path('views/partials/admin/header.php');
    include Helpers::base_path('views/partials/admin/aside.php');
 ?>

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Header -->
        <header class="p-6 bg-white shadow-lg">
            <h1 class="text-3xl font-bold text-slate-800">Edit Posts</h1>
        </header>

        <!-- Blog Creation Form -->
        <section class="p-6">
            <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-6">
                    <label for="title" class="block text-slate-700 font-medium mb-2">Blog Title</label>
                    <input type="text" id="title" name="post_title" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter the blog title" value="<?= $post['name'] ?>">
                    <?php 
                        if( isset($error['title'] ) ){
                            echo '<p class="text-red-500">'. $error['title'] .'</p>';
                        } 
                    ?>
                </div>

                <?php 
                    // set up date
                    $date = $post['created_at'];
                    $date = Date( 'Y-m-d', strtotime($date) );
                    // Helpers::dd($date);
                ?>
                <div class="mb-6">
                    <label for="publish_date" class="block text-slate-700 font-medium mb-2">Publish Date</label>
                    <input type="date" id="publish_date" name="post_publish_date" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" value="<?=$date?>">
                </div>

                <div class="mb-6">
                    <label for="content" class="block text-slate-700 font-medium mb-2">Content</label>
                    <textarea id="content" name="post_content" class="w-full h-64 px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Write your blog content here..."><?=$post['content']?></textarea>
                    <?php 
                        if( isset($error['content'] ) ){
                            echo '<p class="text-red-500">'. $error['content'] .'</p>';
                        } 
                    ?>
                </div>

                <div class="mb-6">
                    <label for="category" class="block text-slate-700 font-medium mb-2">Category</label>
                    
                    <select id="category" name="post_category" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400">
                        <option value="">Select Category</option>
                        <?php foreach ( $category as $key => $cat ): ?>
                        <option value="<?php echo $cat['id']; ?>" <?=$post['post_category'] == $cat['id'] ? ' selected="selected"' : '';?>><?php echo $cat['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-500 transition">Update Post</button>
                </div>

                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
            </form>
        </section>
    </main>

    <?php include Helpers::base_path('views/partials/admin/footer.php')?>