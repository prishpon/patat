<?php require "view/partials/head.php" ?>
<?php require "view/partials/nav.php" ?>
<?php require "view/partials/banner.php" ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>
            <a href="/notes" class="text-blue-500 underline">
                go back
            </a>
        </p>
       <p>
            <?php echo htmlspecialchars($note['body']); ?>
       </p>
    </div>
  </main>

  <?php require "view/partials/footer.php" ?>