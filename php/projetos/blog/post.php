<?php
include_once("templates/header.php");
include_once("data/post.php");

$posts = isset($posts) ? $posts : [];
$categories = isset($categories) ? $categories : [];
$BASE_URL = isset($BASE_URL) ? $BASE_URL : '';

$currentPost = null;

if (isset($_GET['id'])) {

    $postId = $_GET['id'];

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
            break;
        }
    }
}

?>
<main id="post-container">
    <div class="content-container">
        <?php if ($currentPost): ?>
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <?php if (isset($currentPost['content'])): ?>
                <?php foreach ($currentPost['content'] as $paragraph): ?>
                    <p class="post-content"><?= $paragraph ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php if ($currentPost && isset($currentPost['tags'])): ?>
                <?php foreach ($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php")
?>