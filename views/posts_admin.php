<div class="container">
        <a href="/admin.php?show=addPost" class="btn btn-primary">Add New Post</a>

</div>
<div class=" container">
    <div class="row">
        <div class="col-12">
            <table class="table m-10">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>author</th>
                    <th>creation date</th>
                </tr>
                <?php if (count($this->news) > 0): ?>
                    <?php foreach ($this->news as $post): ?>
                        <tr>
                            <form method="post">
                                <input type="hidden" name="edit" value="<?= $post['id'] ?>">
                                <input type="hidden" name="object" value="news">
                                <td><?= $post['id'] ?></td>
                                <td><?= $post['name'] ?></td>
                                <td><?= $post['login'] ?></td>
                                <td><?= $post['creation_date'] ?></td>
                                <td><input type="submit" class="w-30 btn btn-md btn-info" value="edit"></td>
                            </form>
                            <?php if ($_SESSION['username'] === $post['login']): ?>
                                <form method="post">
                                    <input type="hidden" name="delete" value="<?= $post['id'] ?>">
                                    <input type="hidden" name="object" value="news">
                                    <td><input type="submit" class="w-30 btn btn-md btn-danger" value="delete"></td>
                                </form>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
            <div class="pages">
                <?php
                echo "<p>Страницы:</p>";
                for ($i = 0; $i < $this->pages; $i++){
                    echo "<a href='/admin.php?page=".($i+1)."&show=news'>".($i+1)." "."</a>";
                }
                ?>
            </div>
        </div>
    </div>
</div>


