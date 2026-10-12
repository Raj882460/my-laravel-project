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
        /* --- PDF MATCH: Card Design & Layout Fixes --- */
        .featured-card,
        .product-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            position: relative;
            box-sizing: border-box;
        }

        /* Card Button Container Alignment */
        .card-actions {
            display: flex !important;
            gap: 6px !important;
            align-items: center !important;
            margin-top: 10px !important;
            width: 100% !important;
        }

        .btn--cart {
            flex: 1 !important;
            background: #000 !important;
            color: #fff !important;
            border: none !important;
            padding: 8px 10px !important;
            font-size: 12px !important;
            font-weight: 600 !important;
            border-radius: 2px !important;
            cursor: pointer !important;
            text-transform: none !important;
            white-space: nowrap !important;
            height: 36px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .btn--wa {
            width: 36px !important;
            height: 36px !important;
            background: #000 !important;
            color: #fff !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 2px !important;
            flex-shrink: 0 !important;
        }

        .btn--wa svg {
            width: 18px !important;
            height: 18px !important;
            fill: #fff !important;
        }

        /* --- MOBILE VIEW: Cart Header & Popup Styling --- */
        .cart-icon-wrapper {
            position: relative;
            display: inline-block;
        }

        .cart-badge {
            position: absolute;
            top: -6px;
            right: -8px;
            background: #e53e3e;
            color: #ffffff;
            font-size: 11px;
            font-weight: bold;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Shopping Cart Popup Fix (Mobile) */
        .cart-popup {
            position: fixed !important;
            top: 60px !important;
            right: 15px !important;
            width: 320px !important;
            max-width: 90vw !important;
            max-height: 80vh !important;
            background: #ffffff !important;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2) !important;
            border-radius: 12px !important;
            z-index: 9999 !important;
            overflow-y: auto !important;
            padding: 16px !important;
            border: 1px solid #eee !important;
        }

        /* Toast Message Notification */
        .toast-msg {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #22c55e;
            color: #fff;
            padding: 12px 20px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            z-index: 10000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
