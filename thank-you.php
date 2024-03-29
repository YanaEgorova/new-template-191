<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>



  <div class="wrapper">
  <div class="header__wrapper">
      <div class="container">
     
     
        <header class="header">
          <div class="header__top">
            <div class="header__btn-block">
              <button class="header__btn js_menu-btn">
                <span></span>
              </button>
            </div>

              <nav class="nav js_menu">
                <a href="./index.html" class="header__logo logo js_website-name"></a>
              
                <ul class="nav__list">
                  <li class="nav__item">
                    <a href="./contacts.html" class="nav__link">Contact Us</a>
                  </li>
                  <li class="nav__item">
                    <a href="./return.html" class="nav__link">Return Policy</a>
                  </li>
                  <li class="nav__item">
                    <a href="./purchase.html" class="nav__link">Terms of Purchase</a>
                  </li>
                  <li class="nav__item">
                    <a href="./privacy.html" class="nav__link">Privacy Notice</a>
                  </li>
                  <li class="nav__item">
                    <a href="./shipping.html" class="nav__link">Shipping Policy</a>
                  </li>
                  <li class="nav__item">
                    <a href="./use.html" class="nav__link">Terms of Use</a>
                  </li>
                </ul>
              </nav>
              <a href="./shop.html" class="cart__span-box">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
<g><g><path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
			c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"/>
</g></g>
<g><g><path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
			C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
			c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
			C457.728,97.71,450.56,86.958,439.296,84.91z"/>
</g></g>
<g><g><path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
			c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"/>
</g></g>
</svg> <span class="cart__span js_cart__span"></span>
              </a>
          </div>
        </header>
     
      </div>
    </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
          <?php if($_GET["order_id"]){ ?> 
  <h1 class="title">Thank you</h1>
  <p class="text">Your order was completed successfully!</p>
  <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
<?php } else { ?>
  <h1 class="title">We're sorry</h1>
  <p class="text" style="font-size: 3rem">There was an error processing your order</p>
<?php } ?>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
      <div class="container">
        <footer class="footer">
          <div class="footer__top">
            <div class="footer__top-block">
              <div class="footer__block">
                <p class="footer__title">Terms</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                   </li>
                   <li class="footer__item">
                     <a href="./use.html" class="footer__link">Terms of Use</a>
                    </li>
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Info</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./contacts.html" class="footer__link">Contact Us</a>
                   </li>
                   <li class="footer__item">
                     <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                    </li>
               
               
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Policies</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./return.html" class="footer__link">Return Policy</a>
                   </li>
                   <li class="footer__item">
                     <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                    </li>
                </ul>
              </div>
              <div class="footer__block">
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./index.html" class="footer__logo logo js_website-name"></a>
                   </li>
                   <li class="footer__item">
                    <p class="text text--mb js_website-corp"></p>
                    </li>
                </ul>
              </div>
            </div>
          
          </div>
          <div class="footer__bottom">
            <ul class="footer__list">
              <li class="footer__item">
                <svg class="footer__icon" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m407.579 87.677c-31.073-53.624-86.265-86.385-147.64-87.637-2.62-.054-5.257-.054-7.878 0-61.374 1.252-116.566 34.013-147.64 87.637-31.762 54.812-32.631 120.652-2.325 176.123l126.963 232.387c.057.103.114.206.173.308 5.586 9.709 15.593 15.505 26.77 15.505 11.176 0 21.183-5.797 26.768-15.505.059-.102.116-.205.173-.308l126.963-232.387c30.304-55.471 29.435-121.311-2.327-176.123zm-151.579 144.323c-39.701 0-72-32.299-72-72s32.299-72 72-72 72 32.299 72 72-32.298 72-72 72z"/></g></svg>
                <span class="text js_website-address"></span>
                </li>
                <li class="footer__item">
                  <svg class="footer__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g><g>
		<path d="M507.49,101.721L352.211,256L507.49,410.279c2.807-5.867,4.51-12.353,4.51-19.279V121
			C512,114.073,510.297,107.588,507.49,101.721z"/>
</g></g>
<g><g>
		<path d="M467,76H45c-6.927,0-13.412,1.703-19.279,4.51l198.463,197.463c17.548,17.548,46.084,17.548,63.632,0L486.279,80.51
			C480.412,77.703,473.927,76,467,76z"/>
</g></g>
<g><g>
		<path d="M4.51,101.721C1.703,107.588,0,114.073,0,121v270c0,6.927,1.703,13.413,4.51,19.279L159.789,256L4.51,101.721z"/>
</g></g>
<g><g>
		<path d="M331,277.211l-21.973,21.973c-29.239,29.239-76.816,29.239-106.055,0L181,277.211L25.721,431.49
			C31.588,434.297,38.073,436,45,436h422c6.927,0,13.412-1.703,19.279-4.51L331,277.211z"/>
</g></g>
</svg>
                  <a href="" class="footer__link js_website-email"></a>
                </li>
                <li class="footer__item">
                  <svg class="footer__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
<g><g>
		<path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
			c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
			c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
			C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
			/>
</g></g>
</svg>
                  <a href="" class="footer__link js_website-phone"></a>
                </li>
              </ul>
           
            <span class="footer__span">© All rights reserved</span>
          </div>
        </footer>
      </div>
    </div>
  </div>
 <script src="./js/jquery-3.7.1.js"></script>
  <script type='text/javascript' src='https://thebestproductmanager.com/products/prices-nxg-object'></script>
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script>
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>