<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores voluptas ipsum enim expedita recusandae accusamus amet eaque a, libero adipisci cupiditate corrupti minus nostrum, tenetur doloremque velit porro consequuntur unde.
            Laborum a sapiente praesentium excepturi eius perferendis nisi doloremque deserunt suscipit quae molestiae quo enim nulla veniam eligendi magnam dignissimos, ab fugit error consequuntur tempora. Odio ipsam harum quidem reiciendis.
            Aliquid cupiditate officia sequi aperiam deserunt, ex architecto doloribus eaque velit, totam tenetur. Officiis fugit, debitis, facere, provident totam deleniti voluptate accusamus voluptates nostrum perferendis unde culpa. Cumque, itaque suscipit?
            Ipsa eos sequi ullam ipsam, corporis excepturi perferendis odit minima quaerat accusamus, hic saepe officiis! Facere impedit laboriosam omnis sunt illum aut ex enim quod reprehenderit blanditiis. Exercitationem, in. Tenetur?
            Deleniti laborum accusamus dolore assumenda neque nemo, quam architecto iusto nisi necessitatibus quidem velit earum explicabo, dignissimos ad quasi corrupti vel? Delectus accusantium eaque explicabo consequuntur expedita, aliquid dolorem iure.
            </p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </div>
    </aside>
    </main>
<?php
    include_once("templates/footer.php")
?>
