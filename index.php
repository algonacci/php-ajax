<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
    >
    <title>Search User - PHP Ajax</title>
    <script src="script.js"></script>
</head>
<body>
<div class="container">
    <h1>Search Users</h1>
    <form action="">
        <label>Search User:</label>
        <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>

    <p>Suggestion: <span id="output" style="font-weight: bold"></span></p>
</div>
</body>
</html>
