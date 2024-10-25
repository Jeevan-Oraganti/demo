<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>


    <main class="bg-gray-100 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <ul class="space-y-4">
                <?php foreach ($notes as $note) : ?>
                    <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 duration-300 cursor-pointer">
                        <a href="/note?id=<?= $note['id'] ?>" class="block text-blue-500 text-lg">
                            <?= htmlspecialchars($note['body']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <p class="mt-6">
                <a href="/notes/create"
                   class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md shadow hover:bg-indigo-500">
                    Create Note
                </a>
            </p>
        </div>
    </main>


<?php require base_path('views/partials/foot.php'); ?>