<?php require('partials/head.php'); ?>

<?php require('partials/nav.php'); ?>

<?php require('partials/banner.php'); ?>


    <main class="bg-gray-100 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 underline">go back..</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>
        </div>
    </main>


<?php require('partials/foot.php'); ?>