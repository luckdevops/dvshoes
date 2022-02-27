
<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">frete grátis para compras acima de R$ 200,00</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<!--<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>-->
								<li class="account">
									@if (!Auth::check())
                                        <a href="#">
                                            Minha conta
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Entrar</a></li>
                                            <li><a href="{{ route('login') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Cadastrar</a></li>
                                        </ul>
                                    @else
                                        <a href="#">

                                             Seja bem-vinda,
                                             {{ Auth::user()->name }}
                                             <i class="fa fa-user-circle" aria-hidden="true"></i>
                                             <i class="fa fa-angle-down"></i>

                                        </a>
                                        <ul class="account_selection">
                                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Meu Perfil</a></li>
                                            <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Minhas Compras</a></li>
                                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Sair</a></li>
                                        </ul>
                                    @endif
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->


		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">D'V<span>SHOES</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="{{ route('home') }}">home</a></li>
								<li><a href="{{ route('pesquisa') }}">coleções</a></li>
								<li><a href="#">promoção</a></li>
								<li><a href="#">personalidades</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="contact.html">contato</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="{{ route('pesquisa') }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-bag" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
                                    <div class="cart-hover">
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="si-pic"><img src="/assets/images/banner_4.png" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>$60.00 x 1</p>
                                                                <h6>Kabino Bedside Table</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="si-pic"><img src="" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>$60.00 x 1</p>
                                                                <h6>Kabino Bedside Table</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>$120.00</h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                            <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                        </div>
                                    </div>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<!--<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>-->
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">coleções</a></li>
				<li class="menu_item"><a href="#">promocão</a></li>
				<li class="menu_item"><a href="#">personalidades</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contato</a></li>
			</ul>
		</div>
    </div>
</div>
