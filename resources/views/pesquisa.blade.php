
@extends('layouts.app')


@section('content')


<div class="container product_section_container">
    <div class="row">
        <div class="col product_section clearfix">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Pesquisa</a></li>
                </ul>
            </div>

            <!-- Sidebar -->

            <div class="sidebar">
                <div class="sidebar_section">
                    <div class="sidebar_title">
                        <h5>Calçados</h5>
                    </div>
                    <ul class="sidebar_categories">
                        <li><a href="#">Sandália</a></li>
                        <li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Mule</a></li>
                        <li><a href="#">Tênis</a></li>
                        <li><a href="#">Scarpin</a></li>
                        <li><a href="#">Sapatilha</a></li>
                        <li><a href="#">Mocassim</a></li>
                    </ul>
                </div>

                <!-- Price Range Filtering -->
                <div class="sidebar_section">
                    <div class="sidebar_title">
                        <h5>Filtrar por preço</h5>
                    </div>
                    <p>
                        <input type="text" id="amount" readonly style="border:0; color:#000000; font-weight:bold;">
                    </p>
                    <div id="slider-range"></div>
                    <div class="filter_button"><span>Filtrar</span></div>
                </div>

                <!-- Sizes -->
                <div class="sidebar_section">
                    <div class="sidebar_title">
                        <h5>Numeração</h5>
                    </div>
                    <ul class="checkboxes">
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>34</span></li>
                        <li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>35</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>36</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>37</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>38</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>39</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>40</span></li>
                    </ul>
                </div>

                <!-- Color -->
                <div class="sidebar_section">
                    <div class="sidebar_title">
                        <h5>Cor</h5>
                    </div>
                    <ul class="checkboxes">
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Azul</span></li>
                        <li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Preto</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Vermelho</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Verde</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Verde Musgo</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Laranja</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Azul Jeniffer</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Ferrugem</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Prata</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Dourado</span></li>
                        <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Rosa</span></li>
                    </ul>
                    <div class="show_more">
                        <span><span>+</span>Mostrar mais</span>
                    </div>
                </div>

            </div>

            <!-- Main Content -->

            <div class="main_content">

                <!-- Products -->

                <div class="products_iso">
                    <div class="row">
                        <div class="col">

                            <!-- Product Sorting -->

                            <div class="product_sorting_container product_sorting_container_top">
                                <ul class="product_sorting">
                                    <li>
                                        <span class="type_sorting_text">Ordernar por</span>
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="sorting_type">
                                            <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Padrão</span></li>
                                            <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Preço</span></li>
                                            <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Nome</span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Mostrar</span>
                                        <span class="num_sorting_text">6</span>
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="sorting_num">
                                            <li class="num_sorting_btn"><span>6</span></li>
                                            <li class="num_sorting_btn"><span>12</span></li>
                                            <li class="num_sorting_btn"><span>24</span></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="pages d-flex flex-row align-items-center">
                                    <div class="page_current">
                                        <span>1</span>
                                        <ul class="page_selection">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                    <div class="page_total"><span>of</span> 3</div>
                                    <div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                </div>

                            </div>

                            <!-- Product Grid -->

                            <div class="product-grid">

                                <!-- Product 1 -->

                                <div class="product-item scarpin">
                                    <div class="product discount product_filter">
                                        <div class="product_image">
                                            <img src="images/calcado1.png" alt="">
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
                                            <img src="images/sandalia_rasteira_couro.png" alt="">
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
                                            <img src="images/sandalia_com_salto_quadrado.png" alt="">
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
                                            <img src="images/mule_em_couro.png" alt="">
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
                                            <img src="images/tenis_em_couro.png" alt="">
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
                                            <img src="images/mocassim_vermelho.png" alt="">
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
                                            <img src="images/Sandalia-em-couro-salto-fino-preto.png" alt="">
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
                                            <img src="images/scarpin-laranja.png" alt="">
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
                                            <img src="images/sandalia-em-tiras.png" alt="">
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
                                            <img src="images/mule-gelo.png" alt="">
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
                                            <img src="images/sapatilha-onca.png" alt="">
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
                                            <img src="images/scarpin-couro.png" alt="">
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
                            <!-- Product Sorting -->

                            <div class="product_sorting_container product_sorting_container_bottom clearfix">
                                <ul class="product_sorting">
                                    <li>
                                        <span>Mostrar:</span>
                                        <span class="num_sorting_text">04</span>
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="sorting_num">
                                            <li class="num_sorting_btn"><span>01</span></li>
                                            <li class="num_sorting_btn"><span>02</span></li>
                                            <li class="num_sorting_btn"><span>03</span></li>
                                            <li class="num_sorting_btn"><span>04</span></li>
                                        </ul>
                                    </li>
                                </ul>
                                <span class="showing_results">Exibindo 1–3 de 12 resultados</span>
                                <div class="pages d-flex flex-row align-items-center">
                                    <div class="page_current">
                                        <span>1</span>
                                        <ul class="page_selection">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                    <div class="page_total"><span>of</span> 3</div>
                                    <div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
