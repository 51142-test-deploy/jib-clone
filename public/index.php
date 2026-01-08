<?php
require __DIR__ . '/../app/config/index.php';
?>

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
                <img src="https://www.jib.co.th/web//images/logo/logo-w.png?v=001" alt="jib-logo">
                <img class="add" src="https://www.jib.co.th/web//images/logo/bow.png?v=010" alt="ไว้อาลัย">
            </div>
            <div class="input-group">
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
                    <h2><a href="./Cart.php">ตระกร้าสินค้า</a></h2>
                </div>
                <div class="acc">
                    <h2><a href="./acc.php">บัญชีของฉัน</a></h2>
                </div>
                <div class="switch-lang">
                    <div class="th">🇹🇭</div>
                    <div class="en">🇬🇧</div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <section class="item">
            <header>
                <h2>สินค้าแนะนำ</h2>
            </header>
            <div class="item-list">
                <?php $itemController->ShowRecommendedItems() ?>
                <!-- <div class="item1">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/20260107165203_82786_447_1.jpg?v=827861767779524"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item1">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/20251230154746_82623_447_1.jpg?v=826231767596261"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item1">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/20240301154109_65732_287_1.jpg?v=657321762854628"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item1">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2025122913265482709_1.jpg?v=827091767603326"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item1">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2026010609524682773_1.jpg?v=827731767686594"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item1">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/20251229154451_82675_287_1.jpg?v=826751766998854"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item1">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2026010709274482776_1.jpg?v=827761767754588"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item1">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2025122909201582695_1.jpg?v=826951766975992"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="ad">
            <div class="advice-1">
                <a target="_blank"
                    href="https://www.jib.co.th/web/product/product_list/1/58/0?price=&brand=&monitor_sp_size=&monitor_sp_panel_type=&monitor_sp_max_solution=&monitor_sp_refresh_rate=4,15,43,64,30,36,38,32,66,62,58,27,65,5,50,42,33&monitor_io_vga=&monitor_io_dvi=&monitor_io_hdmi=&"><img
                        src="https://www.jib.co.th/img_master/banner/original/20251206143955_1.jpg?v=52711767075424"
                        alt=""></a>
            </div>
            <div class="advice-2">
                <a target="_blank" href="https://www.jib.co.th/web/product/product_list/1/1392/0?price=&brand="><img
                        src="https://www.jib.co.th/img_master/banner/original/20250913174206_1.jpg?v=50451767075527"
                        alt=""></a>
            </div>
            <div class="advice-3">
                <a target="_blank" href="https://www.jib.co.th/web/pcsetspec/main"><img
                        src="https://www.jib.co.th/img_master/banner/original/20250729155726_1.jpg?v=50461767075558https://www.jib.co.th/web/pcsetspec/main"
                        alt=""></a>
            </div>
        </section>
        <section class="item-slide-section">
            <header>
                <h2>สินค้าใหม่</h2>
            </header>
            <div class="item-slide">
                <?php $itemController->ShowNewItems() ?>
                <!-- <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2025122909201582695_1.jpg?v=826951766975992"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2025122909201582695_1.jpg?v=826951766975992"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2025122909201582695_1.jpg?v=826951766975992"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2025122909201582695_1.jpg?v=826951766975992"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2025122909201582695_1.jpg?v=826951766975992"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="ad">
            <div class="advice-1">
                <a target="_blank"
                    href="https://www.jib.co.th/web/product/product_list/1/58/0?price=&brand=&monitor_sp_size=&monitor_sp_panel_type=&monitor_sp_max_solution=&monitor_sp_refresh_rate=4,15,43,64,30,36,38,32,66,62,58,27,65,5,50,42,33&monitor_io_vga=&monitor_io_dvi=&monitor_io_hdmi=&"><img
                        src="https://www.jib.co.th/img_master/banner/original/20251206143955_1.jpg?v=52711767075424"
                        alt=""></a>
            </div>
            <div class="advice-2">
                <a target="_blank" href="https://www.jib.co.th/web/product/product_list/1/1392/0?price=&brand="><img
                        src="https://www.jib.co.th/img_master/banner/original/20250913174206_1.jpg?v=50451767075527"
                        alt=""></a>
            </div>
            <div class="advice-3">
                <a target="_blank" href="https://www.jib.co.th/web/pcsetspec/main"><img
                        src="https://www.jib.co.th/img_master/banner/original/20250729155726_1.jpg?v=50461767075558https://www.jib.co.th/web/pcsetspec/main"
                        alt=""></a>
            </div>
        </section>
        <section class="item-slide-section">
            <header>
                <h2>สินค้าขายดี</h2>
            </header>
            <div class="item-slide">
                <?php $itemController->ShowHotItems() ?>
                <!-- <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2026010609524682773_1.jpg?v=827731767686594"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2026010609524682773_1.jpg?v=827731767686594"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2026010609524682773_1.jpg?v=827731767686594"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2026010609524682773_1.jpg?v=827731767686594"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div class="item2">
                    <div class="photo">
                        <img src="https://www.jib.co.th/img_master/product/medium/2026010609524682773_1.jpg?v=827731767686594"
                            alt="">
                    </div>
                    <div class="detail">
                        <h3>Item 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>$100.00</span>
                    </div>
                    <div class="add-to-Cart" onclick="addToCart()">
                        <button>Add to Cart</button>
                    </div>
                </div> -->
            </div>
        </section>
    </main>
    <script src="./script.js"></script>
</body>

</html>