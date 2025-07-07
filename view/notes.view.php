<?php require "partials/head.php" ?>
 
  <?php require "partials/nav.php" ?>

  <?php require "partials/banner.php" ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      Notes page 
        <?php foreach( $notes as $note) :  ?>
        <ul>
          <li>
            <a class="text-blue-500" href="/note?id=<?php echo $note['id']; ?>">
            <?php echo $note['body']; ?>
            </a>
          </li>
        </ul>
    <?php endforeach; ?>  
    </div>
  
  </main>

  <?php require "partials/footer.php" ?>