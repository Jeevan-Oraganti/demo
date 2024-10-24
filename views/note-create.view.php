<?php require('partials/head.php'); ?>

<?php require('partials/nav.php'); ?>

<?php require('partials/banner.php'); ?>


    <main class="bg-gray-100 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 bg-white shadow-md rounded-lg p-6">
            <form method="POST">
                <div class="space-y-6">
                    <div class="border-b border-gray-900/10 pb-6">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                        <div class="mt-2">
                        <textarea id="body" name="body" rows="3"
                                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                  required
                        ><?= isset($_POST['body']) ? $_POST['body'] : '' ?> </textarea>

                            <?php if (isset($errors['body'])) : ?>
                                <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end">
                    <button type="button" class="mr-6 text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </main>


<?php require('partials/foot.php'); ?>