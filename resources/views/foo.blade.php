<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/form-submit">
<input type="hidden" name="_token" value="<?= csrf_token() ?>">
<input placeholder="name" type="text" name="name">
<input placeholder="family" type="text" name="family">
<button>send</button>
</form>
</body>
</html>
