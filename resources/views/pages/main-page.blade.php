<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- FONT AWESOME
    <script src="https://kit.fontawesome.com/00bd906045.js" crossorigin="anonymous"></script> --}}

    {{-- GOOGLE FONT --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
                    <li><a href="/">Logout</a></li>
                </ul>
            </div>
            <div class="cashier-profile" tabindex="0">
                <div class="icon">
                    <span class="material-symbols-outlined image-profil">
                        person
                    </span>
                </div>
                <div class="name-jobdesk">
                    <h3>{{ session('username') }}</h3>
                    <p>{{ session('status') }}</p>
                </div>
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
                <li><a id="mie">Mie</a></li>
                <li><a id="cake">Cake</a></li>
                <li><a id="fruits">Fruits</a></li>
            </ul>

            {{-- All Menu --}}
            <div class="menu-product all-menu">
                @if(empty($products))
                    <p>Tidak ada data produk.</p>
                @endif
                @foreach ($products as $product)
                    <div class="product">
                        <img src="{{ asset('img/' . $product->url_gambar) }}" alt="{{ $product->name_product }}">
                        <div class="container-product-price">
                            <p class="name-product">{{ $product->name_product }}</p>
                            <p class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Foods --}}
            <div class="menu-product foods hidden">
                @if(empty($foodProducts))
                    <p>Tidak ada data produk.</p>
                @endif
                @foreach ($foodProducts as $foodProduct)
                    <div class="product">
                        <img src="{{ asset('img/' . $foodProduct->url_gambar) }}" alt="{{ $foodProduct->name_product }}">
                        <div class="container-product-price">
                            <p class="name-product">{{ $foodProduct->name_product }}</p>
                            <p class="price">Rp {{ number_format($foodProduct->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Drinks --}}
            <div class="menu-product drinks hidden">
                @if(empty($drinkProducts))
                    <p>Tidak ada data produk.</p>
                @endif
                @foreach ($drinkProducts as $drinkProduct)
                    <div class="product">
                        <img src="{{ asset('img/' . $drinkProduct->url_gambar) }}" alt="{{ $drinkProduct->name_product }}">
                        <div class="container-product-price">
                            <p class="name-product">{{ $drinkProduct->name_product }}</p>
                            <p class="price">Rp {{ number_format($drinkProduct->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Vegetables --}}
            <div class="menu-product vegetables hidden">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="product">VEGETABLES {{ $i }}</div>
                @endfor
            </div>

            {{-- Meat --}}
            <div class="menu-product mie hidden">
                @if(empty($mieProducts))
                    <p>Tidak ada data produk.</p>
                @endif
                @foreach ($mieProducts as $mieProduct)
                    <div class="product">
                        <img src="{{ asset('img/' . $mieProduct->url_gambar) }}" alt="{{ $mieProduct->name_product }}">
                        <div class="container-product-price">
                            <p class="name-product">{{ $mieProduct->name_product }}</p>
                            <p class="price">Rp {{ number_format($mieProduct->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            
            {{-- Cake --}}
            <div class="menu-product cake hidden">
                @if(empty($cakeProducts))
                    <p>Tidak ada data produk.</p>
                @endif
                @foreach ($cakeProducts as $cakeProduct)
                    <div class="product">
                        <img src="{{ asset('img/' . $cakeProduct->url_gambar) }}" alt="{{ $cakeProduct->name_product }}">
                        <div class="container-product-price">
                            <p class="name-product">{{ $cakeProduct->name_product }}</p>
                            <p class="price">Rp{{ number_format($cakeProduct->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
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
