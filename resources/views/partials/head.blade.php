<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>More Than Giftz | Corporate Gifts &amp; Promotional Gifts Supplier in Dubai, UAE</title>
    <meta name="description" content="Premium corporate gifts and custom merchandise supplier in Dubai, UAE.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        /* Cards ko proper height aur alignment dene ke liye */
        .featured-card,
        .product-card {
            display: flex !important;
            flex-direction: column !important;
            justify-content: space-between !important;
            height: 100% !important;
            min-height: 380px !important;
            /* Fixed height block */
            box-sizing: border-box !important;
        }

        /* Add to cart button container ko card ke andar lock karne ke liye */
        .card-actions {
            margin-top: auto !important;
            display: flex !important;
            gap: 5px !important;
            width: 100% !important;
        }

        .btn--cart {
            white-space: nowrap !important;
            font-size: 11px !important;
            padding: 6px 8px !important;
            line-height: 1 !important;
            height: 32px !important;
        }
    </style>
</head>
