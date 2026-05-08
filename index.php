<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demon Slayer Carousel Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-dark">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="carousel-wrapper">

            <div class="image-stack" id="imageStack">
                <div class="card-item active" style="background-image: url('tanjiro.jpg');"></div>

                <div class="card-item" style="background-image: url('nezuko.jpg');"></div>

                <div class="card-item" style="background-image: url('zenitsu.jpg');"></div>

                <div class="card-item" style="background-image: url('inosuke.jpg');"></div>
            </div>

            <div class="content-box">
                <div class="controls d-flex justify-content-end mb-4">
                    <button class="btn btn-outline-secondary rounded-circle me-2 shadow-sm" id="prevBtn">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                        </svg>
                    </button>
                    <button class="btn btn-danger rounded-circle shadow-sm" id="nextBtn">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M7.247 11.14L2.451 5.658C1.885 5.011 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </button>
                </div>

                <div id="textWrapper" class="animate-text">
                    <h2 class="display-6 fw-bold text-light mb-0" id="charName">Tanjiro Kamado</h2>
                    <p class="text-danger fw-semibold text-uppercase ls-2 small mb-4" id="charRole">Water Breathing User</p>
                    <div class="skeleton-lines">
                        <span style="width: 100%;"></span>
                        <span style="width: 80%;"></span>
                        <span style="width: 90%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>