<!DOCTYPE html>

<html>
    <head>
        <title>
            Create directory with HTML button and PHP 
        </title>
    </head>
      
    <body>
        <form id="form1" method="post" action="direct.php"  enctype="multipart/form-data">
                <label>Cover</label>
                <input id="image-file" type="file" name="cover_img">
                <br>
                <label>Create Directory/Folder</label>
                <input type="text" name="folder">
                <br>
                <label>Title</label>
                <input type="text" name="title">
                <br>
                <label>Author</label>
                <input type="text" name="author">
                <br>
                <label>Artist</label>
                <input type="text" name="artist">
                <br>
                <label>Synopsis</label>
                <input type="text" name="synopsis">
                <br>
                <label>Status</label>
                <input type="text" name="status">
                <br>
                <input class="tambah" id="btn-submit" type="submit" name='submit' value="ADD">
          </form>

    </body>
    <script>
    $(document).ready(function() {
 
        initImageUpload();
 
        function initImageUpload() {
            $("#btn-submit").click(function(e) {
                e.preventDefault();
 
                var everlive = new Everlive({
                    appId: "",
                    scheme: "https"
                });
 
                // construct the form data and apply new file name
                var file = $('#image-file').get(0).files[0];
 
                var newFileName = file.filename + "new";
                var formData = new FormData();
                formData.append('file', file, newFileName);
 
 
                $.ajax({
                    url: everlive.files.getUploadUrl(), // get the upload URL for the server
                    success: function(fileData) {
                        alert('Created file with Id: ' + fileData.Result[0].Id); // access the result of the file upload for the created file
                        alert('The created file Uri is available at URL: ' + fileData.Result[0].Uri);
                    },
                    error: function(e) {
                        alert('error ' + e.message);
                    },
                    // Form data
                    data: formData,
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false
                });
                return false;
            });
        }
    });
</script>
</html>