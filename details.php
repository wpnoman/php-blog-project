<?php include 'partials/header.php'?>


<!-- Blog Details -->
<section class="bg-white">
    <div class="container mx-auto px-6 py-12">
        <!-- Blog Header -->
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4">How to Build Vue.js Applications</h1>
            <p class="text-slate-500 text-lg">Published on <span class="font-medium">November 15, 2024</span></p>
        </div>
        <!-- Blog Image -->
        <div class="mt-8 text-center">
            <img src="https://via.placeholder.com/800x400" alt="Blog Banner" class="w-full md:w-3/4 lg:w-2/3 mx-auto rounded-lg shadow-md">
        </div>
        <!-- Blog Content -->
        <!-- Blog Content -->
        <div class="mt-12 mx-auto md:w-3/4 lg:w-2/3">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Introduction to Vue.js</h2>
                <p class="text-slate-700 text-lg leading-relaxed mb-6">
                    Vue.js is a progressive JavaScript framework used for building user interfaces. Unlike monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable.
                </p>
                <h3 class="text-2xl font-semibold text-slate-800 mb-4">Why Choose Vue.js?</h3>
                <ul class="list-disc list-inside text-slate-700 text-lg mb-6 space-y-2">
                    <li>Simple and approachable.</li>
                    <li>Component-based architecture.</li>
                    <li>Great tooling ecosystem.</li>
                </ul>
                <p class="text-slate-700 text-lg leading-relaxed mb-6">
                    Below is an example of a Vue.js component:
                </p>
                <div class="bg-slate-900 text-white text-sm rounded-md p-4 overflow-auto">
<pre>
<code>
&lt;template&gt;
  &lt;div&gt;Hello, {{ name }}!&lt;/div&gt;
&lt;/template&gt;

&lt;script&gt;
export default {
  data() {
    return {
      name: 'Vue.js',
    };
  },
};
&lt;/script&gt;
</code>
</pre>
                </div>
                <h3 class="text-2xl font-semibold text-slate-800 mt-8 mb-4">Conclusion</h3>
                <p class="text-slate-700 text-lg leading-relaxed">
                    Start using Vue.js today to build modern web applications with ease. Its simplicity and flexibility make it a great choice for developers of all experience levels.
                </p>
            </div>
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