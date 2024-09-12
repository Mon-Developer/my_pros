
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>U&Jin - Search</title>
</head>

<body>

    <header>
        <div class="back-button">
            <a href="index10.html" onclick="history.go(-1);">Back</a>
        </div>
        <h1>U&Jin</h1>
        <h2>Tens Diary In Mirrors</h2>
    </header>

    <div class="container">
        <section class="search-section">
            <h2>Search</h2>
            <form action="#" method="GET" class="search-form">
                <input type="text" name="query" placeholder="Enter your search term...">
                <button type="submit" onclick="search()">Search</button>
            </form>
        </section>

        <section class="search-results">
            <div class="result-item">
                <h3>Genres</h3>
                <ul>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Action</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Adventure</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Fantasy</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Games</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">History</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Magic</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Sci-Fi</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Sports</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">School-Life</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Realistic</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">War</a>
                    </li>
                </ul>
            </div>
            <div class="result-item">
                <h3>Fan</h3>
                <ul>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Video Games</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Movies</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">Anime & Comics</a>
                    </li>
                    <li>
                        <div class="circle-image" style="background-image: url('https://via.placeholder.com/100');"></div>
                        <a href="#">TV</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 U&Jin. All rights reserved.</p>
    </footer>
    <script src="search.js"></script>
</body>

</html>