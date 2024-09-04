<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">GitHub</div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="" class="active">Home</a></li>
                <li><a href="">Download</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">About</a></li>
            </ul>
        </nav>
        </div>
    </header>

    <main>
               /* ang lala */

    </main>

    <script>
        hamburger = document.querySelector(".hamburger");

        hamburger.onclick = function () {
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }

        hamburger.classList.toggle("active");
    </script>

    <footer>
        <div class="footerContainer">
            <div class="footerBottom">
                <p>Copyright &copy;2023, Mithun Wijayasiri</p>
            </div>
        </div>
    </footer>

</body>