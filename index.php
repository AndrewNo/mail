<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="ckeditor/ckeditor.js"></script>
    <title>Send E-mail</title>
</head>
<body>

    <h1 style="text-align: center;">Send E-mail</h1>
    <form action="mail.php" method="post" enctype="multipart/form-data">
        <label for="to">To</label><br>
        <input type="text" name="email_to" id="to" style="width: 50%"><br><br>
        <label for="copy">Copy</label><br>
        <input type="text" name="copy" id="copy" style="width: 50%"><br><br>

        <label for="subj">Subject</label><br>
        <input type="text" name="subject" id="subj" style="width: 50%"><br><br>

        <label for="editor">Your message</label><br>
        <textarea name="message" id="editor"></textarea><br><br>
        <label for="Attachments">Attachments:</label><br>
        <input type="file" name="files[]" multiple='true'><br><br>
        <input type="submit" value="Send Message" name="send" style="background-color: #2e9ad0; color: #2e383c; height: 50px; margin-left: 50%;">
    </form>

    <script>
        CKEDITOR.replace( 'editor' );
    </script>
</body>
</html>