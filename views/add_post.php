<form method="post">
    <input type="hidden" name="object" value="news">
    <input type="hidden" name="insert" value="<?= $_SESSION['username'] ?>">
    <table>
        <tr>
            <td>
                <label for="name">Name</label>
            </td>
            <td><textarea cols="100" name="name" id="name"></textarea></td>
        </tr>
        <tr>
            <td>
                <label for="short text">Short text</label>
            </td>
            <td>

                    <textarea cols="100" rows="5" name="short_text" id="short text"></textarea>

            </td>
        </tr>
        <tr>
            <td>
                <label for="editor">Main text</label>
            </td>

            <td>

                    <textarea id="editor" cols="100" rows="30" name="main_text">

                    </textarea>

            </td>


        </tr>
    </table>
    <input class="w-30 btn btn-lg btn-primary" type="submit">
</form>



<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
