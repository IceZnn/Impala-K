<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="carscel1.png" data-bs-slide-to="1" class="active"></button>
        <button type="button" data-bs-target="carscel2.png" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="carscel3.png" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="carscel4.png" data-bs-slide-to="4"></button>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('carscel1.png') }}" class="d-block w-100" alt="Slide 1" style=" object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('carscel2.png') }}" class="d-block w-100" alt="Slide 2" style=" object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('carscel3.png') }}" class="d-block w-100" alt="Slide 3" style=" object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('carscel4.png') }}" class="d-block w-100" alt="Slide 4" style=" object-fit: cover;">
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>