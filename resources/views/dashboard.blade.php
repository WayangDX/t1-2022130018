@extends('layouts.template')
@section('title', 'Dashboard')

@section('body')
<div class="container mt-4">
    <h1 class="mb-4 animate__animated animate__fadeInDown">
        <span class="text-primary">Dashboard</span>
        <span class="text-secondary">Product</span>
    </h1>

    @php
        $totalQuantity = \App\Models\product::sum('quantity');
        $totalRetailPrice = \App\Models\product::sum('retail_price');
        $topProduct = \App\Models\product::orderBy('quantity', 'desc')->first();
    @endphp

    <div class="row mb-4 animate__animated animate__fadeInUp">
        <div class="col-md-4 animate__animated animate__fadeInLeft">
            <div class="hexagon bg-gradient-primary text-white p-5 text-center animate__animated animate__zoomIn cursor-pointer">
                <h5 class="card-title animate__animated animate__fadeInDown">Total Product</h5>
                <p class="card-text animate__animated animate__fadeInUp">{{ $totalQuantity }} produk</p>
            </div>
        </div>

        <div class="col-md-4 animate__animated animate__fadeInUp">
            <div class="hexagon bg-gradient-success text-white p-5 text-center animate__animated animate__zoomIn cursor-pointer">
                <h5 class="card-title animate__animated animate__fadeInDown">Total Retail Price</h5>
                <p class="card-text animate__animated animate__fadeInUp">Rp {{ number_format($totalRetailPrice, 2) }}</p>
            </div>
        </div>

        <div class="col-md-4 animate__animated animate__fadeInRight">
            <div class="hexagon bg-gradient-warning text-white p-5 text-center animate__animated animate__zoomIn cursor-pointer">
                <h5 class="card-title animate__animated animate__fadeInDown">Produk Teratas</h5>
                @if($topProduct)
                    <p class="card-text animate__animated animate__fadeInUp">{{ $topProduct->product_name }} ({{ $topProduct->quantity }})</p>
                @else
                    <p class="card-text animate__animated animate__fadeInUp">Belum ada produk.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="mb-4 animate__animated animate__fadeInUp">
        <a href="{{ route('products.index') }}" class="btn bg-gradient-primary text-white btn-lg btn-block animate__animated animate__pulse animate__infinite cursor-pointer">Lihat Data Produk</a>
    </div>
</div>
@endsection

<style>
.bg-gradient-primary {
    background-image: linear-gradient(to bottom, #000, #4567b7, #6495ed);
}

.bg-gradient-success {
    background-image: linear-gradient(to bottom, #000, #8bc34a, #c6efce);
}

.bg-gradient-warning {
    background-image: linear-gradient(to bottom, #000, #ffc107, #ff9800);
}

.text-primary {
    font-size: 36px;
    font-weight: bold;
    color: #4567b7;
}

.text-secondary {
    font-size: 24px;
    font-weight: bold;
    color: #8bc34a;
}

.animate__animated {
    animation-duration: 1s;
}

.animate__fadeInDown {
    animation-name: fadeInDown;
}

.animate__fadeInUp {
    animation-name: fadeInUp;
}

.animate__fadeInLeft {
    animation-name: fadeInLeft;
}

.animate__fadeInRight {
    animation-name: fadeInRight;
}

.animate__zoomIn {
    animation-name: zoomIn;
}

.animate__pulse {
    animation-name: pulse;
}

.cursor-pointer {
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.cursor-pointer:hover {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-100px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(100px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

 @keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes zoomIn {
    from {
        opacity: 0;
        transform: scale(0.5);
    }
    to {
        opacity: 1;
        transform: scale( 1);
    }
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}
</style>
