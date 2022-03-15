<?php include_once("templates/header.php"); ?>
<?php
if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']; ?></h1>
        <p id="post-description"><?= $currentPost['description']; ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL; ?>/img/<?= $currentPost['img']; ?>" alt="<?= $currentPost['title']; ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, delectus tenetur animi odit necessitatibus consectetur vitae itaque odio inventore consequuntur molestiae incidunt illo quod blanditiis error dolor accusantium, suscipit rem?
            Quos, quasi reiciendis eum recusandae ullam molestiae modi corrupti aperiam at quibusdam aliquid soluta odit illum maxime tenetur perferendis iusto cumque? Officiis commodi, iure quae sunt dolores dolor labore quam!
            Vitae veritatis aliquid tempora nam eum voluptatum sint dicta sit officiis quam amet, obcaecati nisi officia natus. Qui dignissimos, illo dolores nulla sapiente quisquam aliquid numquam id, est possimus assumenda?
            Optio suscipit quas dolorem architecto vitae pariatur corrupti voluptatibus veritatis odio nemo iure quaerat recusandae doloremque esse quidem, cum maxime aliquam. Sequi facilis corrupti quos illum repudiandae. Eveniet, quo at!
            Necessitatibus deleniti beatae velit fugiat quo ea placeat nemo id optio eveniet asperiores blanditiis officia accusamus rem fugit ad facilis nostrum esse, at mollitia molestiae dolore eligendi vel consequatur? Quia.
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, delectus tenetur animi odit necessitatibus consectetur vitae itaque odio inventore consequuntur molestiae incidunt illo quod blanditiis error dolor accusantium, suscipit rem?
            Quos, quasi reiciendis eum recusandae ullam molestiae modi corrupti aperiam at quibusdam aliquid soluta odit illum maxime tenetur perferendis iusto cumque? Officiis commodi, iure quae sunt dolores dolor labore quam!
            Vitae veritatis aliquid tempora nam eum voluptatum sint dicta sit officiis quam amet, obcaecati nisi officia natus. Qui dignissimos, illo dolores nulla sapiente quisquam aliquid numquam id, est possimus assumenda?
            Optio suscipit quas dolorem architecto vitae pariatur corrupti voluptatibus veritatis odio nemo iure quaerat recusandae doloremque esse quidem, cum maxime aliquam. Sequi facilis corrupti quos illum repudiandae. Eveniet, quo at!
            Necessitatibus deleniti beatae velit fugiat quo ea placeat nemo id optio eveniet asperiores blanditiis officia accusamus rem fugit ad facilis nostrum esse, at mollitia molestiae dolore eligendi vel consequatur? Quia.
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, delectus tenetur animi odit necessitatibus consectetur vitae itaque odio inventore consequuntur molestiae incidunt illo quod blanditiis error dolor accusantium, suscipit rem?
            Quos, quasi reiciendis eum recusandae ullam molestiae modi corrupti aperiam at quibusdam aliquid soluta odit illum maxime tenetur perferendis iusto cumque? Officiis commodi, iure quae sunt dolores dolor labore quam!
            Vitae veritatis aliquid tempora nam eum voluptatum sint dicta sit officiis quam amet, obcaecati nisi officia natus. Qui dignissimos, illo dolores nulla sapiente quisquam aliquid numquam id, est possimus assumenda?
            Optio suscipit quas dolorem architecto vitae pariatur corrupti voluptatibus veritatis odio nemo iure quaerat recusandae doloremque esse quidem, cum maxime aliquam. Sequi facilis corrupti quos illum repudiandae. Eveniet, quo at!
            Necessitatibus deleniti beatae velit fugiat quo ea placeat nemo id optio eveniet asperiores blanditiis officia accusamus rem fugit ad facilis nostrum esse, at mollitia molestiae dolore eligendi vel consequatur? Quia.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php include_once("templates/footer.php"); ?>