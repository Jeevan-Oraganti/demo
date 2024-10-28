<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main class="bg-gray-100 py-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-600 hover:bg-blue-100 py-2 px-4 rounded shadow-md">Back to notes</a>
        </p>

        <div class="bg-white p-8 rounded-lg shadow-md border border-gray-300">
            <p class="text-gray-800 text-base leading-relaxed"><?= htmlspecialchars($note['body']) ?></p>
        </div>

        <div class="mt-6 flex justify-end">
            <form method="POST" action="/note" class="flex items-center">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <a href="/notes/edit?id=<?= $note['id'] ?>" class="mr-4 px-3 py-2 rounded bg-gray-200 font-semibold text-gray-900 hover:bg-gray-300">Edit</a>
                <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/foot.php'); ?>