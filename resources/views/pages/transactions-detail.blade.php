<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- GOOGLE ICONS --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('styles/detail-transactions.css') }}">
</head>

<body>
    <div class="full-container">
        <div class="container-header">
            <a href="/main">
                <span class="material-symbols-outlined">right_panel_open</span>
            </a>
            <h1>Total Transactions Today</h1>
        </div>
        <table class="transaction-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Payment</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="nomor">1</td>
                    <td class="name">Nama 1</td>
                    <td class="payment">Rp. 120.000</td>
                    <td class="button-detail"><a href="">detail</a></td>
                </tr>
                <tr>
                    <td class="nomor">2</td>
                    <td class="name">Nama 2</td>
                    <td class="payment">Rp. 90.000</td>
                    <td class="button-detail"><a href="">detail</a></td>
                </tr>
                <tr>
                    <td class="nomor">3</td>
                    <td class="name">Nama 3</td>
                    <td class="payment">Rp. -</td>
                    <td class="button-detail"><a href="">detail</a></td>
                </tr>
                <tr>
                    <td class="nomor">4</td>
                    <td class="name">Nama 4</td>
                    <td class="payment">Rp. -</td>
                    <td class="button-detail"><a href="">detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
