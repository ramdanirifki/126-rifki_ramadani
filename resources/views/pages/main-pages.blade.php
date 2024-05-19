<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- FONT AWESOME --}}
    <script src="https://kit.fontawesome.com/00bd906045.js" crossorigin="anonymous"></script>

    {{-- GOOGLE FONT --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- JS --}}
    <script type="module" src="{{ asset('js/views/main.js') }}"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
</head>

<body>
    <header class="container">
        <div class="navbar">
            <div class="navbar-drawer">
                <span class="material-symbols-outlined button" id="menu">
                    menu
                </span>
            </div>
            <div class="container-drawer">
                <div>
                    <span class="material-symbols-outlined" id="drawer">
                        keyboard_double_arrow_left
                    </span>
                </div>
                <ul>
                    <li><a href="/detail-transactions">Transactions Detail</a></li>
                    <li><a href="/login">Logout</a></li>
                </ul>
            </div>
            <div class="cashier-profile" tabindex="0">
                <div class="icon">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="name-jobdesk">
                    <h3>Anonimous</h3>
                    <p>Cashier</p>
                </div>
            </div>
            <div class="input-search-product">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="search" id="search" placeholder="Search product">
            </div>
        </div>
        <p class="date"></p>
    </header>

    <main class="main-container">
        <div class="main-menu">
            <ul class="main-navbar-link">
                <li><a id="all-menu" class="active">All</a></li>
                <li><a id="foods">Foods</a></li>
                <li><a id="drinks">Drinks</a></li>
                <li><a id="vegetables">Vegetables</a></li>
                <li><a id="meat">Meat</a></li>
                <li><a id="cake">Cake</a></li>
                <li><a id="fruits">Fruits</a></li>
            </ul>

            {{-- All Menu --}}
            <div class="menu-product all-menu">
                @for ($i = 1; $i <= 40; $i++)
                    <div class="product">Produk {{ $i }}</div>
                @endfor
            </div>

            {{-- Foods --}}
            <div class="menu-product foods hidden">
                @for ($i = 1; $i <= 20; $i++)
                    <div class="product">FOODS {{ $i }}</div>
                @endfor
            </div>

            {{-- Drinks --}}
            <div class="menu-product drinks hidden">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="product">DRINKS {{ $i }}</div>
                @endfor
            </div>

            {{-- Vegetables --}}
            <div class="menu-product vegetables hidden">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="product">VEGETABLES {{ $i }}</div>
                @endfor
            </div>

            {{-- Meat --}}
            <div class="menu-product meat hidden">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="product">MEAT {{ $i }}</div>
                @endfor
            </div>

            {{-- Cake --}}
            <div class="menu-product cake hidden">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="product">CAKE {{ $i }}</div>
                @endfor
            </div>

            {{-- Fruits --}}
            <div class="menu-product fruits hidden">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="product">FRUITS {{ $i }}</div>
                @endfor
            </div>
        </div>

        <div class="calculation">
            <p class="label">Order List</p>
            <div class="list-order-product">
                {{-- Daftar Pesanan --}}
            </div>
        </div>
        <div class="payment">
            <div class="payment-cost">
                <p class="label">Total</p>
                <p class="cost">
                    Rp. -
                    {{-- Total Harga --}}
                </p>
            </div>
            <div class="button">
                <button class="button-detail">Detail Order</button>
                <button class="button-payment">Pay</button>
            </div>
    </main>
</body>
