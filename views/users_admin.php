<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">

                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>login</th>
                        <th>email</th>
                    </tr>
                    <?php if (count($this->users) > 0): ?>
                        <?php foreach ($this->users as $user): ?>
                            <tr>
                                <form method="post">
                                    <input type="hidden" name="delete" value="<?= $user['id'] ?>">
                                    <input type="hidden" name="object" value="user">
                                    <td><?= $user['id'] ?></td>
                                    <td><?= $user['login'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <?php if ($_SESSION['username'] !== $user['login']): ?>

                                        <td><input class="btn btn-sm btn-danger" type="submit" value="delete"></td>
                                    <?php endif; ?>
                                </form>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="col-lg-6 col-md-12">
                <h2>Add user</h2>
                <div id="error"></div>
                <form name="myForm" id="form" onsubmit="return validate()" method="post">
                    <input type="hidden" name="object" value="user">
                    <input type="hidden" name="addUser" value="true">
                    <table class="table">
                        <tr>
                            <td>
                                <label for="login">Login</label>
                            </td>
                            <td>
                               <input class="form-control success" data-rule="number" type="text" name="login" id="login">
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td><input class="form-control form-custom" data-rule="email" type="email" name="email" id="email">

                        </tr>
                        <tr>
                            <td>
                                <label  for="password">Password</label>
                            </td>
                            <td><input class="form-control form-custom" data-rule="password" type="password" name="password" id="password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password_confirm">Password confirm</label>
                            </td>
                            <td><input  class="form-control form-custom" data-rule="password" type="password" name="password_confirm" id="password_confirm">
                        </tr>
                    </table>
                    <div class="btn-wrapper">
                        <input  class="w-20 btn btn-md btn-primary button" type="submit">
                    </div>

                </form>

                <?php
                if (isset($_SESSION['error']))
                    $errors = $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
                <?php if (isset($errors)): ?>
                    <div>
                        <?php foreach ($errors as $error): ?>
                            <p><?= $error ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>

    </div>


</div>



