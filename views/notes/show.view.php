<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>


    <main class="bg-gray-100 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 underline">go back..</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>

            <a href="">Delete</a>
        </div>
    </main>


<?php require base_path('views/partials/foot.php'); ?>