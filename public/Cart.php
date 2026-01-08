<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylesheet/style.css">
</head>

<body>
    <nav>
        <div class="content">
            <div class="logo">
                <a href="index.html"><img src="https://www.jib.co.th/web//images/logo/logo-w.png?v=001"
                        alt="jib-logo"></a>
                <img class="add" src="https://www.jib.co.th/web//images/logo/bow.png?v=010" alt="ไว้อาลัย">
            </div>
            <div class="input-group hide">
                <div class="search-bar">
                    <input type="search" placeholder="Search...">
                </div>
                <div class="find">
                    <div class="search-icon">
                        <button>Search</button>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="cart">
                    <h2><a href="Cart.html">ตระกร้าสินค้า</a></h2>
                </div>
                <div class="acc">
                    <h2><a href="acc.html">บัญชีของฉัน</a></h2>
                </div>
                <div class="switch-lang">
                    <div class="th">🇹🇭</div>
                    <div class="en">🇬🇧</div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="main-content">
            <section class="left">
                <div class="item-list">
                    <div class="item3">
                        <div class="photo">
                            <img src="https://www.jib.co.th/img_master/product/medium/2026010609524682773_1.jpg?v=827731767686594"
                                alt="">
                        </div>
                        <div class="detail">
                            <h3>ASUS DUAL GEFORCE RTX 4060 Ti</h3>
                            <p>8GB GDDR6 - white edition</p>
                            <span>฿ 15,900</span>
                        </div>
                        <div class="add-to-Cart" onclick="removeItem()">
                            <button>ลบสินค้า</button>
                        </div>
                    </div>
                    <div class="item3">
                        <div class="photo">
                            <img src="https://www.jib.co.th/img_master/product/medium/20251229154451_82675_287_1.jpg?v=826751766998854"
                                alt="">
                        </div>
                        <div class="detail">
                            <h3>MSI MPG GUNGNIR 110R</h3>
                            <p>Mid-Tower Gaming Case - Black</p>
                            <span>฿ 3,290</span>
                        </div>
                        <div class="add-to-Cart" onclick="removeItem()">
                            <button>ลบสินค้า</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="right">
                <div class="info">
                    <p>สรุปคำสั่งซื้อ</p>
                    <div class="price">
                        <div class="total">฿ 19,190</div>
                    </div>
                </div>
                <div class="checkout">
                    <button>ชำระเงิน</button>
                </div>
            </section>
        </div>
    </main>
    <script src="script.js"></script>
</body>

</html>