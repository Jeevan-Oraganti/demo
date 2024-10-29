<?php require('partials/head.php'); ?>

<?php require('partials/nav.php'); ?>

<?php require('partials/banner.php'); ?>

<?
$userEmail = $_SESSION['user']['email'] ?? 'Guest';
?>

<main class="bg-gray-100 py-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <p>Hello, <?= htmlspecialchars($userEmail); ?></p>
        </div>
    </div>
</main>


<?php require('partials/foot.php'); ?>