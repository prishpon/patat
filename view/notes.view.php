<?php require "partials/head.php" ?>
 
  <?php require "partials/nav.php" ?>

  <?php require "partials/banner.php" ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      Notes page 
       <ul>
        <?php foreach( $notes as $note) :  ?>
            <li>
              <a class="text-blue-500" href="/note?id=<?php echo $note['id']; ?>">
                 <?php echo htmlspecialchars($note['body']); ?>
              </a>
               <a href="notes?act=delete&id=<?php echo $note['id']; ?>" class="text-white-500 hover:underline py-2 px-2" style="background-color:red;"> Delete Note</a>
                <a href="notes?act=edit&id=<?php echo $note['id']; ?>" class="text-white-500 hover:underline py-2 px-2" style="background-color:yellow;"> Delete Note</a>
            </li>
         <?php endforeach; ?>  
     </ul>

     <a href="/notes/create" class="text-blue-500 hover:underline"> Add new Note</a>

     

    </div>
  
  </main>

  <?php require "partials/footer.php" ?>