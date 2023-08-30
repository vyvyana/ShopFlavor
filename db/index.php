<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-IN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,600;1,400&amp;display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/app.css">
</head>

<body>
    <header class="header">
        <div class="header-menu">
            <div class="menu-item"> <a class="text" href="../index.html">Shop</a>
                <box-icon type="solid" name="down-arrow" color="#f9423a"></box-icon>
            </div>
            <div class="menu-item"><a href="../about.html">About </a>
                <box-icon type="solid" name="down-arrow" color="#f9423a"></box-icon>
            </div>
        </div>
        <div class="header-logo"> <a class="header-a" href="../index.html"> <img src="../images/icon.svg"
                    alt="icon"></a>
        </div>
        <div class="header-right">
            <div class="menu-item"><a href="../slider.html">Collection </a>
                <box-icon name="images" color="#f9423a"></box-icon>
            </div><a class="header-sign" href="index.php">Sign-in</a><a class="header-pageCart"
                href="../yourCart.html"><img class="header-cart" src="../images/icon-cart.svg" alt="cart"></a>
        </div>
    </header>
    <main>
        <h1 class="header-name">SHOP FLAVOR</h1>
        <div class="sign-in">
            <h1 class="sign-in-title">SIGN IN</h1>
            <form class="list-input" action="./reg.php" method="post">
                <div class="input">
                    <label>Mã sinh viên</label>
                    <input class="sign-input" type="text" placeholder="Nhập mã số sinh viên" id="id-student"
                        name="id" />
                </div>
                <div class="input">
                    <label>Họ và tên</label>
                    <input class="sign-input" type="text" placeholder="Nhập mã họ tên" id="id-name" name="fullname" />
                </div>
                <div class="input">
                    <label>Email</label>
                    <input class="sign-input" type="text" placeholder="Nhập email" id="id-email" name="email" />
                </div>
                <div id="result"></div>
                <div class="input">
                    <label>Giới tính </label>
                    <div class="input-radio">
                        <input class="sign-radio" type="radio" name="gender" value="male">Nam
                        <input class="sign-radio" type="radio" name="gender" value="female">Nữ
                    </div>
                </div>
                <div class="input">
                    <label>Sở thích </label>
                    <div class="input-check">
                        <input class="sign-check" type="checkbox" name="hobby[]" value="Đọc sách">Đọc sách
                        <input class="sign-check" type="checkbox" name="hobby[]" value="Du lịch">Du lịch
                        <input class="sign-check" type="checkbox" name="hobby[]" value="Âm nhạc">Âm nhạc
                        <input class="sign-check" type="checkbox" name="hobby[]" value="Ẩm thực">Ẩm thực
                        <input class="sign-check" type="checkbox" name="hobby[]" value="Khác">Khác
                    </div>
                </div>
                <div class="input">
                    <label>Quốc tịch </label>
                    <select class="sign-select" name="national">
                        <option class="type" value="" disabled selected>Chọn quốc tịch</option>
                        <option class="type" name="national" value="Vietnamese">Vietnamese</option>
                        <option class="type" name="national" value="US">US</option>
                        <option class="type" name="national" value="Chinese">Chinese</option>
                        <option class="type" name="national" value="Japan">Japan </option>
                        <option class="type" name="national" value="Korea">Korea</option>
                    </select>
                </div>
                <div class="input">
                    <label>Ghi chú</label>
                    <textarea class="sign-text" name="note" cols="10" rows="5" maxlength="200"></textarea>
                </div>
                <div class="input">
                    <button class="sign-button" name="btn-reg" value="Sign in">Sign in </button>
                </div>
            </form>
        </div>
    </main>
    <script src="../js/sign.js"></script>
    <footer class="footer">
        <div class="footer-columns"> <img class="footer-logo" src="../images/icon.svg" alt="logo">
            <div class="footer-column">
                <ul class="footer-links">
                    <li class="footer-item"> <a class="footer-link" href="#">Subscribe</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">Find a store</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">FAQ</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">Careers</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <ul class="footer-links">
                    <li class="footer-item"> <a class="footer-link" href="#">Shop</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">Famila</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">History</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <ul class="footer-links">
                    <li class="footer-item"> <a class="footer-link" href="#">Term</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">Privacys</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">Return</a></li>
                    <li class="footer-item"> <a class="footer-link" href="#">Logging</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <form class="subcribe" action="" autocomplete>
                    <input class="subcribe-email" type="email" placeholder="Enter your email">
                    <button class="subcribe-button" type="submit">Submit</button>
                </form>
                <div class="subcribe-social"> <img src="../images/facebook.png" alt="facebook"><img
                        src="../images/ig.png" alt="ins"><img src="../images/tiktok.png" alt="tiktok"><img
                        src="../images/twitter.png" alt="tw">
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="./js/start.js"></script>

</html>