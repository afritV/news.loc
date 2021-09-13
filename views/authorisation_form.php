<div class="container text-center">
    <div class="row">
        <div class="col-12">

            <form class="text-center" method="post">

                <input type="hidden" name="action" value="login">
                <table style="margin:50px auto;  " class="text-center">
                    <tr>
                        <td>
                            <label for="login">Login</label>
                        </td>
                        <td>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="login" id="login"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </td>
                    </tr>
                </table>
                <input class="w-30 btn btn-lg btn-primary" type="submit">
            </form>


        </div>
    </div>
</div>
<?php
if (isset($_SESSION['error']))
    $error = $_SESSION['error'];
unset($_SESSION['error']);
?>
<?php if (isset($error)): ?>

    <p><br></p>


    <div class="alert text-center alert-success m-10" role="alert">
        <p><?= $error ?></p>
        <p>Please make sure the entered data is correct</p>
    </div>

<?php endif; ?>
