<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>悩み解決の本 - データ登録</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">

<style>
        body {
            background-image: url('./img/background.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>

    
    <style>
        /* body {
            font-family: 'Noto Sans JP', sans-serif;
            background-color: #f8f9fa;
        } */
        .navbar {
            background-color: #ff9800;
        }
        
        .navbar-brand {
            color: #ffffff !important;
            font-weight: 350;
        }
        .navbar-brand:hover {
            text-decoration: underline;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #4a5568;
            color: #ffffff;
            border-radius: 15px 15px 0 0 !important;
        }
        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #4a5568;
            border-color: #4a5568;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background-color: #2c3340;
            border-color: #2c3340;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="selectb.php">登録データ一覧</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0">悩み解決のヒントとなった本の登録</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="insertb.php">
                            <div class="form-group">
                                <label for="worry">あなたの悩み</label>
                                <textarea class="form-control" id="worry" name="worry" rows="4" placeholder="ここに悩みを入力してください"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="book">書籍名</label>
                                <input type="text" class="form-control" id="book" name="book">
                            </div>
                            <div class="form-group">
                                <label for="url">書籍URL</label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                            <div class="form-group">
                                <label for="coment">ヒントとなった点</label>
                                <textarea class="form-control" id="coment" name="coment" rows="4" placeholder="どのような点がヒントとなったのか入力してください"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">送信</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>