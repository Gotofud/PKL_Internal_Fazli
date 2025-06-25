@extends('layouts.app')
@section('content')
  <section class="py-3"
    style="background-image: url('user/images/background-pattern.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="banner-blocks">

        <div class="banner-ad large bg-info block-1">

        <div class="swiper main-swiper">
          <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row banner-content p-5">
            <div class="content-wrapper col-md-7">
              <div class="categories my-3">100% natural</div>
              <h3 class="display-4">Fresh Smoothie & Summer Juice</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
              elementum.</p>
              <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop
              Now</a>
            </div>
            <div class="img-wrapper col-md-5">
              <img src="{{ asset('user/images/product-thumb-1.png') }}" class="img-fluid">
            </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row banner-content p-5">
            <div class="content-wrapper col-md-7">
              <div class="categories mb-3 pb-3">100% natural</div>
              <h3 class="banner-title">Fresh Smoothie & Summer Juice</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
              elementum.</p>
              <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop
              Collection</a>
            </div>
            <div class="img-wrapper col-md-5">
              <img src="{{ asset('user/images/product-thumb-1.png') }}" class="img-fluid">
            </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row banner-content p-5">
            <div class="content-wrapper col-md-7">
              <div class="categories mb-3 pb-3">100% natural</div>
              <h3 class="banner-title">Heinz Tomato Ketchup</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
              elementum.</p>
              <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop
              Collection</a>
            </div>
            <div class="img-wrapper col-md-5">
              <img src="{{ asset('user/images/product-thumb-2.png') }}" class="img-fluid">
            </div>
            </div>
          </div>
          </div>

          <div class="swiper-pagination"></div>

        </div>
        </div>

        <div class="banner-ad bg-success-subtle block-2"
        style="background:url('user/images/ad-image-1.png') no-repeat;background-position: right bottom">
        <div class="row banner-content p-5">

          <div class="content-wrapper col-md-7">
          <div class="categories sale mb-3 pb-3">20% off</div>
          <h3 class="banner-title">Fruits & Vegetables</h3>
          <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24">
            <use xlink:href="#arrow-right"></use>
            </svg></a>
          </div>

        </div>
        </div>

        <div class="banner-ad bg-danger block-3"
        style="background:url('user/images/ad-image-2.png') no-repeat;background-position: right bottom">
        <div class="row banner-content p-5">

          <div class="content-wrapper col-md-7">
          <div class="categories sale mb-3 pb-3">15% off</div>
          <h3 class="item-title">Baked Products</h3>
          <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24">
            <use xlink:href="#arrow-right"></use>
            </svg></a>
          </div>

        </div>
        </div>

      </div>
      <!-- / Banner Blocks -->

      </div>
    </div>
    </div>
  </section>

  <section class="py-5 overflow-hidden">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="section-header d-flex flex-wrap justify-content-between mb-5">
        <h2 class="section-title">Category</h2>

        <div class="d-flex align-items-center">
        <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
        <div class="swiper-buttons">
          <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
          <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
        </div>
        </div>
      </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

      <div class="category-carousel swiper">
        <div class="swiper-wrapper">
        @foreach ($category as $dataCategory)
      <a href="index.html" class="nav-link category-item swiper-slide">
        <img src="{{ asset('user/images/icon-vegetables-broccoli.png') }}" alt="Category Thumbnail">
        <h3 class="category-title">{{$dataCategory->nama}}</h3>
      </a>
      @endforeach
        </div>
      </div>

      </div>
    </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">

      <div class="bootstrap-tabs product-tabs">
        <div class="tabs-header d-flex justify-content-between border-bottom my-5">
        <h3>Trending Products</h3>
        </div>
        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">

          <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

          @foreach ($product as $dataProduct)
        <div class="col">
        <div class="product-item">
        <a href="#" class="btn-wishlist"><svg width="24" height="24">
          <use xlink:href="#heart"></use>
          </svg></a>
        <figure>
          <a href="index.html" title="Product Title">
          <img src="{{ asset(path: 'storage/' . $dataProduct->gambar) }}" class="img-thumbnail">
          </a>
        </figure>
        <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
          {{$dataProduct->nama}}
        </h3>
        <span class="qty">Stok : {{ $dataProduct->stok }}</span> <span class="rating"
          style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
          {{ $dataProduct->category->nama }}</span>
        <span class="price">Rp{{ number_format($dataProduct->harga) }}</span>
        <div class="d-flex align-items-center justify-content-between">
          <div class="input-group product-qty">
          <span class="input-group-btn">
          <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
          <svg width="16" height="16">
            <use xlink:href="#minus"></use>
          </svg>
          </button>
          </span>
          <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
          <span class="input-group-btn">
          <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
          <svg width="16" height="16">
            <use xlink:href="#plus"></use>
          </svg>
          </button>
          </span>
          </div>
          <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
        </div>
        </div>
        </div>
      @endforeach


          </div>
          <!-- / product-grid -->

        </div>

        <div class="tab-pane fade" id="nav-fruits" role="tabpanel" aria-labelledby="nav-fruits-tab">

          <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

          <div class="col">
            <div class="product-item">
            <span class="badge bg-success position-absolute m-3">-30%</span>
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-cucumber.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <span class="badge bg-success position-absolute m-3">-30%</span>
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-milk.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <span class="badge bg-success position-absolute m-3">-30%</span>
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-orange-juice.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-raspberries.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-bananas.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-bananas.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          </div>
          <!-- / product-grid -->

        </div>
        <div class="tab-pane fade" id="nav-juices" role="tabpanel" aria-labelledby="nav-juices-tab">

          <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-cucumber.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-milk.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-tomatoes.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-tomatoketchup.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-bananas.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          <div class="col">
            <div class="product-item">
            <a href="#" class="btn-wishlist"><svg width="24" height="24">
              <use xlink:href="#heart"></use>
              </svg></a>
            <figure>
              <a href="index.html" title="Product Title">
              <img src="{{ asset('user/images/thumb-bananas.png') }}" class="tab-image">
              </a>
            </figure>
            <h3>Sunstar Fresh Melon Juice</h3>
            <span class="qty">1 Unit</span> <span class="rating"> Kategori</span>
            <span class="price">Rp18.000</span>
            <div class="d-flex align-items-center justify-content-between">
              <div class="input-group product-qty">
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                <svg width="16" height="16">
                  <use xlink:href="#minus"></use>
                </svg>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
              <span class="input-group-btn">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                <svg width="16" height="16">
                  <use xlink:href="#plus"></use>
                </svg>
                </button>
              </span>
              </div>
              <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
            </div>
            </div>
          </div>

          </div>
          <!-- / product-grid -->

        </div>

        </div>
      </div>

      </div>
    </div>
    </div>
  </section>

  <section class="py-5 my-5">
    <div class="container-fluid">

    <div class="bg-warning py-5 rounded-5" style="background-image: url('images/bg-pattern-2.png') no-repeat;">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
        <img src="{{ asset('user/images/phone.png') }}" alt="phone" class="image-float img-fluid">
        </div>
        <div class="col-md-8">
        <h2 class="my-5">Shop faster with foodmart App</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus nonet
          psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames semper erat ac in
          suspendisse iaculis. Amet blandit tortor praesent ante vitae. A, enim pretiummi senectus magna.
          Sagittis sed ptibus liberolectus non et psryroin.</p>
        <div class="d-flex gap-2 flex-wrap">
          <img src="{{ asset('user/images/app-store.jpg') }}" alt="app-store">
          <img src="{{ asset('user/images/google-play.jpg') }}" alt="google-play">
        </div>
        </div>
      </div>
      </div>
    </div>

    </div>
  </section>
@endsection