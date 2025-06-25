<section class="minicart">
    <div class="minicart_inner">
      <div class="minicart_wrapper">
        <div class="minicart_close_icon">
          <div class="minicart_cart_text">
            <strong>Cart</strong>
          </div>
          <button class="minicart_close_btn">
            <i class="fa fa-close"></i>
          </button>
        </div>
  
        <div class="minicart_single_wrapper">
          @forelse ($cartItems as $item)
          <div class="minicart_single">
            <div class="minicart_single_img">
              <a href="{{ route('product.show', $item->product->slug) }}">
                <img src="{{ Storage::url($item->product->image) }}" alt="{{ $item->product->name }}">
              </a>
            </div>
            <div class="minicart_single_close">
              <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button title="Remove"><i class="fa fa-close"></i></button>
              </form>
            </div>
            <div class="minicart_single_content">
              <h4><a href="#">{{ $item->product->name }}</a></h4>
              <span>{{ $item->qty }} x
                <span class="money">Rp {{ number_format($item->product->price, 0, ',', '.') }}</span>
              </span>
            </div>
          </div>
          @empty
          <p class="text-center p-3">Keranjang kosong</p>
          @endforelse
        </div>
  
        @php
          $total = $cartItems->sum(fn($item) => $item->qty * $item->product->price);
        @endphp
  
        <div class="minicart_footer">
          <div class="minicart_subtotal">
            <span class="subtotal_title">Subtotal:</span>
            <span class="subtotal_amount">Rp {{ number_format($total, 0, ',', '.') }}</span>
          </div>
          <div class="minicart_button">
            <a href="{{ route('cart.index') }}" class="default_button">View Cart</a>
            <a href="{{ route('cart.checkout') }}" class="default_button">Checkout</a>
          </div>
          <div class="cart_note_text">
            <p>Free Shipping on All Orders Over Rp 1.500.000!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  