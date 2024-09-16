<?php

?>

<head>
    <style>
    .bonus-section {
        background-color: #ffffff;
        padding: 10px;
        border-top: 2px solid #e0e0e0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 1000;
    }

    .bonus-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: nowrap;
        max-width: 1200px;
        margin: 0 auto;
    }

    .logo {
        border-radius: 8px;
    }

    .logo img {
        max-height: 40px;
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
        font-size: 1.2em;
        /* Bold rating */
        font-weight: bold;
    }

    .offer .bonus-text {
        font-size: 1.1em;
        font-weight: bold;
    }

    .offer-activated .activated-btn {
        padding: 14px 28px;
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
        padding: 16px 32px;
        /* Larger padding for the bonus button */
        text-decoration: none;
        font-size: 1.2em;
        /* Larger font size */
        border-radius: 8px;
        /* Larger border radius */
        transition: background-color 0.3s;
    }

    .bonus-button .get-bonus-btn:hover {
        background-color: #218838;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .bonus-container {
            flex-wrap: nowrap;
            justify-content: space-between;
            text-align: left;
            padding: 5px;
        }

        .logo img {
            max-height: 30px;
        }

        .rating,
        .offer-activated {
            display: none;
        }

        .offer {
            flex-grow: 1;
            padding: 0 10px;
        }

        .offer .bonus-text {
            font-size: 0.9rem;
        }

        .bonus-button {
            flex-shrink: 0;
        }

        .bonus-button .get-bonus-btn {
            padding: 5px 10px;
            font-size: 0.8em;
            white-space: nowrap;
        }
    }

    @media (max-width: 380px) {
        .logo img {
            max-height: 30px;
        }

        .offer .bonus-text {
            font-size: 0.8rem;
        }

        .bonus-button .get-bonus-btn {
            padding: 12px 14px;
            font-size: 0.9em;
        }
    }
    </style>
</head>


<body>
    <div class="bonus-section" style="display: none;">
        <div class="bonus-container">
            <div class="logo">
                <img src="" alt="Logo">
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
                <a href="#" class="get-bonus-btn">Get Bonus</a>
            </div>
        </div>
    </div>
</body>