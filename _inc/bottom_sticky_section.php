<?php

?>

<head>
    <style>
    .bonus-section {
        background-color: #ffffff;
        padding: 2px 10px;
        border-top: 2px solid #e0e0e0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 1000;
    }

    .bonus-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    .logo img {
        max-height: 40px;
        background-color: #000;
        border-radius: 8px;
    }

    .rating {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .stars {
        color: #FFD700;
        font-size: 1.2em;
    }

    .score {
        margin-top: 5px;
        font-size: 1em;
    }

    .offer .bonus-text {
        font-size: 1.1em;
        font-weight: bold;
    }

    .offer-activated .activated-btn {
        padding: 8px 16px;
        color: #28a745;
        border: 2px solid #28a745;
        border-radius: 5px;
        font-size: 1em;
        font-weight: bold;
        background-color: #f1f8f4;
    }

    .activated-btn a {
        text-decoration: none;
    }

    .bonus-button .get-bonus-btn {
        background-color: #28a745;
        color: #fff;
        padding: 8px 16px;
        text-decoration: none;
        font-size: 1em;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .bonus-button .get-bonus-btn:hover {
        background-color: #218838;
    }

    @media (max-width: 768px) {
        .bonus-container {
            flex-wrap: wrap;
            /* Allow elements to wrap to avoid overflow */
            justify-content: space-evenly;
            /* Distribute elements evenly */
        }

        .logo img {
            width: 80px;
            /* Smaller logo size */
        }

        .rating {
            font-size: 0.9rem;
            /* Smaller text size */
            margin-left: 5px;
        }

        .offer {
            font-size: 1rem;
            /* Smaller offer text */
            margin-left: 5px;
        }

        .offer-activated {
            font-size: 0.9rem;
            /* Smaller 'activated' text */
            margin-left: 5px;
        }

        .bonus-button a {
            padding: 5px 10px;
            /* Smaller button */
            font-size: 0.9rem;
            margin-left: 5px;
        }

        .rating,
        .offer-activated {
            display: none;
        }

        .offer,
        .bonus-button {
            justify-content: center;
        }
    }
    </style>
</head>


<body>
    <div class="bonus-section"
        style="display: none; position: fixed; bottom: 0; width: 100%; background-color: #fff; z-index: 9999;">
        <div class="bonus-container"
            style="display: flex; justify-content: space-between; align-items: center; padding: 20px;">
            <div class="logo">
                <img src="" alt="Logo" style="max-height: 50px;">
            </div>
            <div class="rating">
                <span class="score">0/5</span>
                <span class="stars">★★★★★</span>
            </div>
            <div class="offer">
                <span class="bonus-text">Bet £10 Get £40</span>
            </div>
            <div class="offer-activated">
                <span class="activated-btn">
                    <a href="#">* * * * * *</a>
                </span>
            </div>
            <div class="bonus-button">
                <a href="#" class="get-bonus-btn"
                    style="background-color: #28a745; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Get
                    Bonus</a>
            </div>
        </div>
    </div>
</body>