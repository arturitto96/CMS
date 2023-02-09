<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

$paginator = new Paginator($_GET['page'] ?? 1, 6, Article::getTotal($conn));

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset);

?>
<?php require '../includes/header.php'; ?>

<h2>Administration</h2>



<div class="my-container">
    <a class="btn btn-success new-article-btn" href="new-article.php">+ New article</a>
    <?php if (empty($articles)) : ?>
        <p>No articles found.</p>
    <?php else : ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th class="admin-index-content">Status</th>
                    <th class="admin-index-content">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($articles as $article) : ?>
                    <tr>
                        <td>
                            <a class="admin-index-link" href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a>
                        </td>
                        <?php if ($article['published_at']) : ?>
                            <td class="admin-index-content">
                                <time><?= $article['published_at'] ?></time>
                            </td>
                            <td class="admin-index-content">
                                <button class="btn btn-outline-danger admin-index-action-btn">None</button>
                            </td>
                        <?php else : ?>
                            <td class="admin-index-content">
                                Unpublished
                            </td>
                            <td class="admin-index-content">
                                <button class="publish btn btn-outline-success admin-index-action-btn" data-id="<?= $article['id'] ?>">Publish</button>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php require '../includes/pagination.php'; ?>
    </div>

<?php endif; ?>

<?php require '../includes/footer.php'; ?>
