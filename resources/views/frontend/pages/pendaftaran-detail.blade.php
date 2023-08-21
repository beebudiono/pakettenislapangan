@extends('frontend.layouts.main')

@section('content')
    <!-- Top Panel -->
    <div class="top_panel_title top_panel_style_3 breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_present_inner">
            <div class="content_wrap">
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="index.html">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <a class="breadcrumbs_item all" href="shop.html">Shop</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Detail</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top Panel -->
    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <!-- Content -->
            <div class="content">
                <div class="post_item post_item_single page">
                    <section class="post_content">
                        <div class="sc_content content_wrap">
                            <div class="woocommerce">
                                <form name="checkout" id="checkout" method="post" class="checkout woocommerce-checkout"
                                    enctype="multipart/form-data">

                                    <h3 id="order_review_heading">Detail Paket</h3>
                                    <!-- Review Order -->
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="product-name text-center">
                                                        {{ $paket->nama_paket }}
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">Rp.
                                                            {{ number_format($paket->harga) }}</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Fasilitas
                                                    </td>
                                                    <td class="product-total">
                                                        Jumlah Pelatih <strong class="product-quantity">&times;
                                                            {{ $paket->jml_pelatih }}</strong>,
                                                        Jumlah Asisten <strong class="product-quantity">&times;
                                                            {{ $paket->jml_asisten }}</strong>,
                                                        Jumlah Ballboy <strong class="product-quantity">&times;
                                                            {{ $paket->jml_ballboy }}</strong>,
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Tanggal Latihan
                                                    </td>
                                                    <td class="product-total">
                                                        Mulai Dari <strong
                                                            class="product-quantity">{{ date('d F Y', strtotime($paket->tgl_start)) }}</strong>
                                                        Sampai Dengan <strong
                                                            class="product-quantity">{{ date('d F Y', strtotime($paket->tgl_end)) }}</strong>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Waktu Latihan
                                                    </td>
                                                    <td class="product-total">
                                                        Mulai Dari <strong
                                                            class="product-quantity">{{ date('h:i:sa', strtotime($paket->time_start)) }}</strong>
                                                        Sampai Dengan <strong
                                                            class="product-quantity">{{ date('h:i:sa', strtotime($paket->time_end)) }}</strong>
                                                    </td>
                                                </tr>
                                                @foreach ($paket->detail as $item)
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            Nama Pelatih
                                                        </td>
                                                        <td class="product-total">
                                                            <strong class="product-quantity">{{ $item->nama_pelatih1 }} {{ $item->nama_pelatih2 == null ? '' : '&' }} {{ $item->nama_pelatih2 }} {{ $item->nama_pelatih3 == null ? '' : '&' }} {{ $item->nama_pelatih3 }} </strong>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            Nama Asisten
                                                        </td>
                                                        <td class="product-total">
                                                            <strong class="product-quantity">{{ $item->nama_asisten1 }} {{ $item->nama_asisten2 == null ? '' : '&' }} {{ $item->nama_asisten2 }} {{ $item->nama_asisten3 == null ? '' : '&' }} {{ $item->nama_asisten3 }} </strong>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            Nama Ballboy
                                                        </td>
                                                        <td class="product-total">
                                                            <strong class="product-quantity">{{ $item->nama_ballboy1 }} {{ $item->nama_ballboy2 == null ? '' : '&' }} {{ $item->nama_ballboy2 }} {{ $item->nama_ballboy3 == null ? '' : '&' }} {{ $item->nama_ballboy3 }} </strong>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            Materi Pembelajaran
                                                        </td>
                                                        <td class="product-total">
                                                            Topik : <strong class="product-quantity">{{ $item->materi }} </strong>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            Peralatan Latihan
                                                        </td>
                                                        <td class="product-total">
                                                            Peralatan : <strong class="product-quantity">{{ $item->peralatan }} </strong>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Syarat dan Ketentuan
                                                    </td>
                                                    <td class="product-total">
                                                        <ul>
                                                            <li>Wajib membawa raket tenis pribadi</li>
                                                            <li>Wajib mengganti bola apabila di hilangkan oleh pelanggan</li>
                                                            <li>Wajib membawa sepatu pribadi yang memiliki spesifikasi tenis</li>
                                                            <li>Tidak boleh ganti lapangan selama pemesanan sudah berhasil</li>
                                                            <li>Disarankan membawa air mineral</li>
                                                            <li>Disarankan membawa baju ganti</li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tfoot>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="amount">Rp.
                                                                {{ number_format($paket->harga) }}</span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="sc_price_block_link">
                                            <a href="{{ route("checkout", $paket->id) }}"
                                                class="sc_button sc_button_square sc_button_style_filled sc_button_size_large">
                                                <span class="cube flip-to-top">
                                                    <span class="default-state">
                                                        <span>Order Sekarang</span>
                                                    </span>
                                                    <span class="active-state">
                                                        <span>Order Sekarang</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                            style="display: none;" style="color: red">
                                        </div>
                                    </div>
                                    <!-- /Review Order -->
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- /Content -->
        </div>
    </div>
    <!-- /Page Content Wrap -->
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#submitBtn').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            var img = document.getElementById('bukti_bayar');
            var formData = new FormData();
            formData.append('bukti_bayar', img.files[0]);
            formData.append('user_id', $("#user_id").val());
            formData.append('paket_id', $("#paket_id").val());
            formData.append('lap_lat', $("#lap_lat").val());
            formData.append('start', $("#start").val());
            formData.append('end', $("#end").val());
            formData.append('metode_pemb', $("#metode_pemb:checked").val());

            $.ajax({
                url: "{{ route('store.transaction') }}",
                data: formData,
                type: "POST",
                processData: false,
                contentType: false,
                cache: false,

                success: function(response) {
                    console.log(response)
                    if (response.errors) {
                        $('#update-profile').html('Store Transaction');
                        $('.btn-warning').html('');
                        $.each(response.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<strong><li>' + value +
                                '</li></strong>');
                        });
                        $('#submitBtn').html('SIMPAN');
                    } else {
                        swal({
                            type: 'success',
                            icon: 'success',
                            title: `${response.message}`,
                            showConfirmButton: false,
                            timer: 3000
                        });
                        $('#submitBtn').html('SIMPAN');
                        window.location = '{{ url('/orderSukses') }}'
                    }
                }
            });
        });

    });
</script>
