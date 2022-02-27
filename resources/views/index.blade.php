
@extends('layouts.app')


@section('content')

<!-- Slider -->
<div class="main_slider" style="background-image:url('assets/images/slider_2.jpg')">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_content">
                    <h6>Coleção Primavera / Verão 2021</h6>
                    <h1>Ganhe até 20% de desconto em novidades</h1>
                    <div class="red_button shop_now_button"><a href="#">Compre agora</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner -->

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url('/assets/images/banner_4.png')">
                    <div class="banner_category">
                        <a href="categories.html">sandálias</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url('/assets/images/banner_5.png')">
                    <div class="banner_category">
                        <a href="categories.html">saltos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url('/assets/images/banner_6.png')">
                    <div class="banner_category">
                        <a href="categories.html">Tamancos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Arrivals -->

<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title new_arrivals_title">
                    <h2>Nova Coleção</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col text-center">
                <div class="new_arrivals_sorting">
                    <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">TODAS</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".sandalia">Sandália</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".mule">Mule</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".tenis">Tênis</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".scarpin">Scarpin</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".sapatilha">Sapatilha</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".mocassim">Mocassim</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                    <!-- Product 1 -->

                    <div class="product-item scarpin">
                        <div class="product discount product_filter">
                            <div class="product_image">
                                <img src="/assets/images/foto-teste.jpg" alt="">
                            </div>
                            <div class="favorite favorite_left"></div>
                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-R$ 14</span></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Scarpin ferrugem</a></h6>
                                <div class="product_price">R$ 96,00<span>R$ 110,00</span></div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 2 -->

                    <div class="product-item sandalia">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/sandalia_rasteira_couro.png" alt="">
                            </div>
                            <div class="favorite"></div>
                            <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>nova</span></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Sandália rasteira em couro Nº 34 ao 39</a></h6>
                                <div class="product_price">R$ 90,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 3 -->

                    <div class="product-item sandalia">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/sandalia_com_salto_quadrado.png" alt="">
                            </div>
                            <div class="favorite"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Sandália salto quadrado em couro</a></h6>
                                <div class="product_price">R$ 95,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 4 -->

                    <div class="product-item mule">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/mule_em_couro.png" alt="">
                            </div>
                            <!--<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span></span></div>-->
                            <div class="favorite favorite_left"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Mule em couro</a></h6>
                                <div class="product_price">R$ 68,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 5 -->

                    <div class="product-item tenis">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/tenis_em_couro.png" alt="">
                            </div>
                            <div class="favorite"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Tênis em couro</a></h6>
                                <div class="product_price">R$ 50,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 6 -->

                    <div class="product-item mocassim">
                        <div class="product discount product_filter">
                            <div class="product_image">
                                <img src="/assets/images/mocassim_vermelho.png" alt="">
                            </div>
                            <div class="favorite favorite_left"></div>
                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-R$ 20</span></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="#single.html">Mocassim vermelho</a></h6>
                                <div class="product_price">R$ 69,90<span>R$ 89,90</span></div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 7 -->

                    <div class="product-item sandalia">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/Sandalia-em-couro-salto-fino-preto.png" alt="">
                            </div>
                            <div class="favorite"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Sandália salto fino em couro</a></h6>
                                <div class="product_price">R$ 95,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 8 -->

                    <div class="product-item scarpin">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/scarpin-laranja.png" alt="">
                            </div>
                            <div class="favorite"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Scarpin laranja</a></h6>
                                <div class="product_price">$120.00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 9 -->

                    <div class="product-item sandalia">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/sandalia-em-tiras.png" alt="">
                            </div>
                            <!--<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>-->
                            <div class="favorite favorite_left"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Sandália de tiras</a></h6>
                                <div class="product_price">R$ 85,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>

                    <!-- Product 10 -->

                    <div class="product-item mule">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/mule-gelo.png" alt="">
                            </div>
                            <div class="favorite"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Mule gelo</a></h6>
                                <div class="product_price">R$ 50,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>
                    <div class="product-item sapatilha">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/sapatilha-onca.png" alt="">
                            </div>
                            <div class="favorite"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Sapatilha onça</a></h6>
                                <div class="product_price">R$ 50,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>
                    <div class="product-item scarpin">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="/assets/images/scarpin-couro.png" alt="">
                            </div>
                            <div class="favorite"></div>
                            <div class="product_info">
                                <h6 class="product_name"><a href="single.html">Scarpin em couro</a></h6>
                                <div class="product_price">R$ 120,00</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">colocar na sacola</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
