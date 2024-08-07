<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf Of Worries</title>
    <style>
        body {
            background-color: #1a1a1a;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .title-container {
            text-align: center;
            padding: 20px;
        }
        .title {
            font-size: 3rem;
            font-weight: bold;
            color: #f8f8f8;
            letter-spacing: 0.2em;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
            position: relative;
            padding: 20px;
            border: 4px solid #f8f8f8;
            box-shadow: 0 0 20px rgba(255,255,255,0.3);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        .title:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(255,255,255,0.5);
        }
        .title::after {
            top: auto;
            bottom: -15px;
        }
        .image-container {
            margin-top: 20px;
        }
        .bookshelf-image {
            max-width: 350px; /* ロゴの最大幅を300pxに制限 */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255,255,255,0.3);
        }
        
        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
                padding: 15px;
            }
            .bookshelf-image {
                max-width: 250px; /* タブレットサイズでさらに小さく */
            }
        }
        
        @media (max-width: 480px) {
            .title {
                font-size: 1.5rem;
                padding: 10px;
                letter-spacing: 0.1em;
            }
            .bookshelf-image {
                max-width: 200px; /* スマートフォンサイズでより小さく */
            }
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="./img/logo.jpg" alt="Bookshelf of Worries" class="bookshelf-image">
    </div>    

    <div class="title-container">
        <a href="index2.php"><h1 class="title">Bookshelf Of Worries</h1></a>
    </div>
    
</body>
</html>