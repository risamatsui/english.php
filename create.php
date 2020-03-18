<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>英単語アプリ</title>
    <link rel="stylesheet" href="create.css">
</head>

<body>
    <div class="container-fulid">
        <div class="row">
            <div class="header">
                <nav class="navbar navbar-dark bg-dark">
                    <a href="index.html" class="navbar-brand">Home</a>
                </nav>
            </div>
        </div>

        <div class="row mt-4 px-4">
            <div class="col-12">
                <form action="store.php" method="post">
                    <div class="form-group">
                        <label for="title">Words</label><br>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="contents">Meaning</label><br>
                        <textarea class="form-control" name="contents" id="contents" cols="30" rows="10"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Next words</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>