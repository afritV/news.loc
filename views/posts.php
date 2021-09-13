<div class="container">


    <?php if (count($this->news) > 0): ?>
    <?php foreach ($this->news as $post): ?>
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="post col p-4 d-flex flex-column position-static">
            <a href="/?show=post&id=<?= $post['id'] ?>">
                <div class="post_text">
                    <h3><?= $post['name'] ?></h3>
            </a>
            <p><?= $post['view_text'] ?></p>
        </div>
        <div class="mb-1 text-muted">
            <div class="author">
                Автор: <?= $post['login'] ?>; Дата публикации: <?= $post['creation_date'] ?>
            </div>
        </div>

        <col-4>
            <a class="btn p-40 btn-primary" href="/?show=post&id=<?= $post['id'] ?>">Continue reading</a>
        </col-4>
    </div>



</div>
<?php endforeach; ?>
<div class="pages">
    <?php
    echo "<p>Страницы:</p>";
    for ($i = 0; $i < $this->pages; $i++){
        echo "<a href='/?page=".($i+1)."'>".($i+1)." "."</a>";
    }
    ?>
</div>
<?php endif; ?>




