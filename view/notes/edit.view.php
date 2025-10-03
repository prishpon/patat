<?php require base_path("view/partials/head.php"); ?>
<?php require base_path("view/partials/nav.php"); ?>
<?php require base_path("view/partials/banner.php"); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form method="POST" action="/note" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md space-y-6" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?php echo $note['id']; ?>">
            <h2 class="text-2xl font-bold text-gray-800 text-center">Notitie maken</h2>

            <!-- note -->
            <div>
                <label for="body" class="block text-gray-700 font-medium mb-1">Body</label>

                <textarea id="body" name="body" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <?php
            if (isset($note['body'])) {
                echo htmlspecialchars($note['body']);
            }
            ?>
</textarea>
                <?php
                if (isset($errors['body'])) {
                    echo $errors['body'];
                }
                ?>
            </div>
            <!-- Cancel Button -->
            <div>
                <a href="/notes"
                    class="w-full bg-blue-600 text-white bg-gray-500 font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                    Cancel
                </a>

                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold bg-indigo-600 py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                    Update
                </button>
            </div>
        </form>

        <a href="/notes" class="bg-blue-600 text-white font-semibold py-4 px-4 rounded-md hover:bg-blue-700 transition-colors">
            go back
        </a>
    </div>
</main>

<?php require base_path("view/partials/footer.php"); ?>