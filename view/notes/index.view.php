<?php require base_path("view/partials/head.php"); ?>
<?php require base_path("view/partials/nav.php"); ?>
<?php require base_path("view/partials/banner.php"); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      Notes page 
       <ul>
        <?php foreach( $notes as $note) :  ?>
            <li>
              <a class="text-blue-500" href="/note?id=<?php echo $note['id']; ?>">
                 <?php echo htmlspecialchars($note['body']); ?>
              </a>
               <a href="notes?act=delete&id=<?php echo $note['id']; ?>" class="text-white-500 hover:underline py-2 px-2 mx-10" style="background-color:red;"> Delete Note</a>

            </li>
         <?php endforeach; ?>  
     </ul>

     <a href="/notes/create" class="text-blue-500 hover:underline"> Add new Note</a>

    </div>
  
  </main>

  <?php require base_path("view/partials/footer.php") ?>