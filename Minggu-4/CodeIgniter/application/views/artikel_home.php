<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Minggu 1 - Praktikum Pemrograman Web - 118140062 - Leonard Rizta Anugerah Perdana</title>
    <style>
        * {
            box-sizing: border-box;
            overflow: auto;
        }
        nav li {
            display: inline;
            margin-right: 20px;
        }
        nav {
            background-color: #00a2c6;
            padding: 5px;
        }
        nav a {
            font-size: 18px;
            font-weight: 400;
            text-decoration: none;
            color: white;
        }
        .jumbotron {
            font-size: 20px;
            padding: 20px;
            background-color: #00c8eb;
            text-align: center;
            color: white;
        }
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
        }
        .content {
            padding: 20px;
        }
        footer {    
            padding: 10px 20px 0px 20px;
            color: white;
            background-color: #00a2c6;
            font-weight: bold;
        }
        section {
            border: 1px solid #EEEEEE;
            padding: 20px;
            margin-bottom: 10px;
            box-shadow: 2px 3px 9px rgba(165, 165, 165, 0.22), 5px 1px 13px rgba(175, 175, 175, 0.12);
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <div class="jumbotron" id="jumbotron">
            <h2>Blog</h2>
            <p>Welcome to Leonard Rizta's Mini Blog</p>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo base_url('artikel') ?>">Home</a></li>
                <li><a href="<?php echo base_url('artikel/add') ?>">Tambah Article</a></li>
            </ul>
        </nav>
    </header>
    <?php foreach($articles as $article){ ?>
        <div class="content">
        <section id="profil">
            <h2><?=$article->title?></h2>
            <p><?=$article->content?></p>
            <h5>By: <?=$article->username?></h5>
            <a href="<?php echo base_url().'index.php/artikel/update/'.$article->id; ?>">Edit</a>
            <a href="<?php echo base_url().'index.php/artikel/hapus/'.$article->id; ?>">Hapus</a>
        </section>
    </div>
    <?php }?>
    
    <footer>
        <p>Copyright © 2020 - Leonard Rizta Anugerah Perdana</p>
        <ul>
            <li><a href="https://www.instagram.com/leonardrizta/" target="_blank">Instagram</a></li>
            <li><a href="https://www.linkedin.com/in/leonardrizta" target="_blank">LinkedIn</a></li>
            <li><a href="https://github.com/leonardrizta/" target="_blank">Github</a></li>
            <li><a href="#jumbotron">Kembali Ke Atas</a></li>
        </ul>
    </footer>
</body>
</html>