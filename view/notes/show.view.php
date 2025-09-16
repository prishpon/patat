<?php require base_path("view/partials/head.php"); ?>
<?php require base_path("view/partials/nav.php"); ?>
<?php require base_path("view/partials/banner.php"); ?>

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
       <form method="POST" action="">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
          <button class="text-red-500 mt-20">
              Delete note
          </button>
       </form>
    </div>
  </main>

  <?php require base_path("view/partials/footer.php") ?>