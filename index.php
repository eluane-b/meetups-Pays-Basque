<!DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <title>Chain64 - Votre rendez-vous meetup du Pays Basque</title>
    <meta content="Chain64 offre une excellente occasion d'apprendre et d'échanger sur le web3." name="description"/>
    <meta content="Chain64 - Des meetups enrichissants et ouvert à tous." property="og:title"/>
    <meta property="og:type" content="website"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/webflow.css" rel="stylesheet" type="text/css"/>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js?v=202410220000" type="text/javascript"></script>
    <script type="text/javascript">
      WebFont.load({ google: { families: ["Inter:regular,500,600"] } });
    </script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="images/webclip.jpg" rel="apple-touch-icon"/>
    
    <!--  Keep this css code to improve the font quality -->
    <style>
      * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -o-font-smoothing: antialiased;
        -webkit-appearance: none;
      }
    </style>
  </head>
  <body>
    <div class="page-wrapper">
      <div class="global-styles w-embed">
        <style>
          /* Ensure all elements inherit the color from its parent */
          body * {
            color: inherit;
          }
          a,
          .w-input,
          .w-select,
          .w-tab-link,
          .w-nav-link,
          .w-slider-arrow-left,
          .w-slider-arrow-right,
          .w-dropdown-btn,
          .w-dropdown-toggle,
          .w-dropdown-link {
            color: inherit;
            text-decoration: inherit;
            font-size: inherit;
          }
          /* Focus state style for keyboard navigation for the focusable elements */
          *[tabindex]:focus-visible,
          input[type="file"]:focus-visible {
            outline: 0.125rem solid #4d65ff;
            outline-offset: 0.125rem;
          }
          /* Get rid of top margin on first element in any rich text element */
          .w-richtext > :not(div):first-child,
          .w-richtext > div:first-child > :first-child {
            margin-top: 0 !important;
          }
          /* Get rid of bottom margin on last element in any rich text element */
          .w-richtext > :last-child,
          .w-richtext ol li:last-child,
          .w-richtext ul li:last-child {
            margin-bottom: 0 !important;
          }
          /* Prevent all click and hover interaction with an element */
          .pointer-events-off {
            pointer-events: none;
          }
          /* Enables all click and hover interaction with an element */
          .pointer-events-on {
            pointer-events: auto;
          }
          /* Create a class of .div-square which maintains a 1:1 dimension of a div */
          .div-square::after {
            content: "";
            display: block;
            padding-bottom: 100%;
          }
          /* Make sure containers never lose their center alignment */
          .container-medium,
          .container-small,
          .container-large {
            margin-right: auto !important;
            margin-left: auto !important;
          }
          /* Apply "..." after 3 lines of text */
          .text-style-3lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
          }
          /* Apply "..." after 2 lines of text */
          .text-style-2lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
          }
          /* Adds inline flex display */
          .display-inlineflex {
            display: inline-flex;
          }
          /* These classes are never overwritten */
          .hide {
            display: none !important;
          }
          @media screen and (max-width: 991px) {
            .hide,
            .hide-tablet {
              display: none !important;
            }
          }
          @media screen and (max-width: 767px) {
            .hide-mobile-landscape {
              display: none !important;
            }
          }
          @media screen and (max-width: 479px) {
            .hide-mobile {
              display: none !important;
            }
          }
          .margin-0 {
            margin: 0rem !important;
          }
          .padding-0 {
            padding: 0rem !important;
          }
          .spacing-clean {
            padding: 0rem !important;
            margin: 0rem !important;
          }
          .margin-top {
            margin-right: 0rem !important;
            margin-bottom: 0rem !important;
            margin-left: 0rem !important;
          }
          .padding-top {
            padding-right: 0rem !important;
            padding-bottom: 0rem !important;
            padding-left: 0rem !important;
          }
          .margin-right {
            margin-top: 0rem !important;
            margin-bottom: 0rem !important;
            margin-left: 0rem !important;
          }
          .padding-right {
            padding-top: 0rem !important;
            padding-bottom: 0rem !important;
            padding-left: 0rem !important;
          }
          .margin-bottom {
            margin-top: 0rem !important;
            margin-right: 0rem !important;
            margin-left: 0rem !important;
          }
          .padding-bottom {
            padding-top: 0rem !important;
            padding-right: 0rem !important;
            padding-left: 0rem !important;
          }
          .margin-left {
            margin-top: 0rem !important;
            margin-right: 0rem !important;
            margin-bottom: 0rem !important;
          }
          .padding-left {
            padding-top: 0rem !important;
            padding-right: 0rem !important;
            padding-bottom: 0rem !important;
          }
          .margin-horizontal {
            margin-top: 0rem !important;
            margin-bottom: 0rem !important;
          }
          .padding-horizontal {
            padding-top: 0rem !important;
            padding-bottom: 0rem !important;
          }
          .margin-vertical {
            margin-right: 0rem !important;
            margin-left: 0rem !important;
          }
          .padding-vertical {
            padding-right: 0rem !important;
            padding-left: 0rem !important;
          }
          /* Apply "..." at 100% width */
          .truncate-width {
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
          }
          /* Removes native scrollbar */
          .no-scrollbar {
            -ms-overflow-style: none;
            overflow: -moz-scrollbars-none;
          }
          .no-scrollbar::-webkit-scrollbar {display: none}
        </style>
      </div>
      <main class="main-wrapper">
        <div data-animation="default" class="navbar_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" style="
            opacity: 1;
            -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
              rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
              rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
              rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
              rotateY(0) rotateZ(0) skew(0, 0);
          "
          data-w-id="489e39d6-d925-9ceb-1e1c-f3a713992871" role="banner" data-duration="400">
          <section data-w-id="39afa5bd-8a2b-9edb-3029-675873bab8d7" style="opacity: 1" class="banner_component background-color-tertiary">
            <div class="padding-global">
              <div class="banner_content-wrapper">
                <a href="https://www.meetup.com/le-meetup-basque-sur-crypto-blockchain-nft-et-web3/" target="_blank" class="banner_content w-inline-block">
                  <div class="text-size-small text-weight-semibold">
                    Retrouvez nos meetups au Pays Basque
                  </div>
                  <div class="icon-embed-xxsmall w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 16 16" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                      <path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" fill="currentColor"></path>
                    </svg>
                  </div>
                </a>
                <a data-w-id="39afa5bd-8a2b-9edb-3029-675873bab8e0" href="#" class="banner_close-button w-inline-block">
                  <div class="icon-embed-small w-embed">
                  </div>
                </a>
              </div>
            </div>
          </section>
		  <!-- [MENU] - NORMAL -->
          <div class="navbar_container">
            <a href="https://www.chain64.com" class="navbar_logo-link w-nav-brand"
              ><img loading="lazy" src="images/chain64-full-logo.svg" alt="" class="navbar_logo"/></a>
            <nav role="navigation" id="w-node-_489e39d6-d925-9ceb-1e1c-f3a713992875-cacf2ea2" class="navbar_menu is-page-height-tablet w-nav-menu">
              <a href="#missions" class="navbar_link w-nav-link">L'association</a>
              <!-- <a href="#cours" class="navbar_link w-nav-link">Cours</a> -->
              <a href="#temoignages" class="navbar_link w-nav-link">Témoignages</a>
              <div class="margin-top margin-huge hide-desktop">
                <a data-w-id="25c835f5-6edc-8717-a5f7-6cbf382a917e" target="_blank" href="https://www.helloasso.com/associations/chain64/adhesions/adhesion-chain64" class="button is-small is-icon w-inline-block">
                  <div class="text-size-regular">Devenir membre</div>
                  <div class="button-icon-wrapper">
                    <div style="
                        -webkit-transform: translate3d(-2rem, 0, 0)
                          scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                          skew(0, 0);
                        -moz-transform: translate3d(-2rem, 0, 0)
                          scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                          skew(0, 0);
                        -ms-transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      "
                      class="icon-embed-xsmall w-embed">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                        <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                      </svg>
                    </div>
                    <div style="
                        -webkit-transform: translate3d(-2rem, 0, 0)
                          scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                          skew(0, 0);
                        -moz-transform: translate3d(-2rem, 0, 0)
                          scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                          skew(0, 0);
                        -ms-transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      "
                      class="icon-embed-xsmall w-embed">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                        <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </nav>
            <div id="w-node-_489e39d6-d925-9ceb-1e1c-f3a713992888-cacf2ea2" class="navbar_button-wrapper">
              <a data-w-id="f12c222c-508c-33f7-f87f-7392572124db" href="https://www.helloasso.com/associations/chain64/adhesions/adhesion-chain64" target="_blank" class="button is-small is-icon hide-mobile-landscape w-inline-block">
                <div>Devenir membre</div>
                <div class="button-icon-wrapper">
                  <div style="
                      -webkit-transform: translate3d(-2rem, 0, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                      -moz-transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      -ms-transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                    "
                    class="icon-embed-xsmall w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                      <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                    </svg>
                  </div>
                  <div style="
                      -webkit-transform: translate3d(-2rem, 0, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                      -moz-transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      -ms-transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      transform: translate3d(-2rem, 0, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                    "
                    class="icon-embed-xsmall w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                      <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                    </svg>
                  </div>
                </div>
              </a>
              <div class="navbar_menu-button w-nav-button">
                <div class="menu-icon2">
                  <div class="menu-icon_line-top"></div>
                  <div class="menu-icon_line-middle">
                    <div class="menu-icon_line-middle-inner"></div>
                  </div>
                  <div class="menu-icon_line-bottom"></div>
                </div>
              </div>
            </div>
          </div>
		  <!-- [MENU] - MOBILE -->
		  <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0" style="display: none;">
		  <nav role="navigation" id="w-node-_489e39d6-d925-9ceb-1e1c-f3a713992875-cacf2ea2" class="navbar_menu is-page-height-tablet w-nav-menu" style="transition: height 0.5s, transform 400ms; transform: translateY(0px) translateX(0px);" data-nav-menu-open="">
              <a href="#missions" class="navbar_link w-nav-link w--nav-link-open">L'association</a>
              <!-- <a href="#cours" class="navbar_link w-nav-link w--nav-link-open">Cours</a> -->
              <a href="#temoignages" class="navbar_link w-nav-link w--nav-link-open">Témoignages</a>
              <div class="margin-top margin-huge hide-desktop">
                <a data-w-id="25c835f5-6edc-8717-a5f7-6cbf382a917e" href="https://www.helloasso.com/associations/chain64/adhesions/adhesion-chain64" class="button is-small is-icon w-inline-block">
                  <div class="text-size-regular">Devenir membre</div>
                  <div class="button-icon-wrapper">
                    <div style="transform: translate3d(-2rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="icon-embed-xsmall w-embed">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                        <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                      </svg>
                    </div>
                    <div style="transform: translate3d(-2rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="icon-embed-xsmall w-embed">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                        <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </nav></div>
        </div>
        <header id="Hero" data-w-id="e4cfed09-ee92-ecee-172a-17a8243e51a3" class="section_header">
          <div class="padding-global">
            <div class="container-large">
              <div data-w-id="9024aec1-0d1e-f4cb-c049-abd13c767336" style="opacity: 1" class="header_background">
                <div class="header_background-grid-wrapper">
                  <div class="header_background-overlay"></div>
                  <div class="header_background-grid">

                    <?php for ($i = 0; $i < 72; $i++) { echo '<div class="header_background-square"></div>'; } ?>

                    <div class="header_background-square">
                      <img src="images/eth.svg" loading="lazy" style="opacity: 1" data-w-id="9fa8232b-f21c-45bb-5188-d1940fda4aaa" alt="" class="header_background-logo"/>
                    </div>

                    <?php for ($i = 0; $i < 6; $i++) { echo '<div class="header_background-square"></div>'; } ?>

                    <div class="header_background-square">
                      <img src="images/worldcoin.svg" loading="lazy" style="opacity: 1" data-w-id="ccd3b0c7-6e63-460a-207f-cc302cc2367a" alt="" class="header_background-logo"/>
                    </div>

                    <?php for ($i = 0; $i < 5; $i++) { echo '<div class="header_background-square"></div>'; } ?>

                   <div class="header_background-square">
                      <img src="images/solana.svg" loading="lazy" style="opacity: 1" data-w-id="3ef7be44-e624-19ae-8245-cd7f0d5f1285" alt="" class="header_background-logo"/><!-- GitHub -->
                    </div>

                    <?php for ($i = 0; $i < 6; $i++) { echo '<div class="header_background-square"></div>'; } ?>

                    <div class="header_background-square">
                      <img src="images/Celo.svg" loading="lazy" style="opacity: 1" data-w-id="32bc2594-48e6-4f57-af45-f3a06cf3f52f" alt="" class="header_background-logo"/>
                    </div>

                    <?php for ($i = 0; $i < 10; $i++) { echo '<div class="header_background-square"></div>'; } ?>
                    
                    <div class="header_background-square">
                      <img src="images/bitcoin.svg" loading="lazy" style="opacity: 1" data-w-id="f6bea4e3-0f22-2a3a-e836-284cb762ca80" alt="Bitcoin" class="header_background-logo"/>
                    </div>

                    <?php for ($i = 0; $i < 5; $i++) { echo '<div class="header_background-square"></div>'; } ?>

                    <div class="header_background-square">
                      <img src="images/farcaster.svg" loading="lazy" style="opacity: 1" data-w-id="eeb38d2e-6a4b-20eb-9cbc-c439a6c6966a" alt="" class="header_background-logo" />
                    </div>

                    <?php for ($i = 0; $i < 22; $i++) { echo '<div class="header_background-square"></div>'; } ?>

                    <div class="header_background-square"                    >
                      <img src="images/eth-global.svg" loading="lazy" style="opacity: 1" data-w-id="fda97fe8-211b-4002-b90a-8bcaf2358bec" alt="" class="header_background-logo"/>
                    </div>

                    <?php for ($i = 0; $i < 5; $i++) { echo '<div class="header_background-square"></div>'; } ?>

                    <div class="header_background-square"                    >
                      <img src="images/Base.svg" loading="lazy" style="opacity: 1" data-w-id="9673ac8b-d679-1013-3ac6-e1271b9cf4dc" alt="" class="header_background-logo"/>
                    </div>
                    <div class="header_background-square"></div>
                    <div class="header_background-square"></div>
                    <div class="header_background-square">
                      <img src="images/ens.svg" loading="lazy" style="opacity: 1" data-w-id="6484572a-b3eb-41a0-dfae-726420c67f2d" alt="" class="header_background-logo"/>
                    </div>
                    
                    <?php for ($i = 0; $i < 23; $i++) { echo '<div class="header_background-square"></div>'; } ?>

                  </div>
                </div>
              </div>
              <div class="padding-section-large">
                <div class="header_component">
                  <div class="text-align-center">
                    <div class="max-width-large align-center">
                      <div class="margin-bottom margin-small">
                        <h1 blocks-non-deletable="true" data-w-id="e4cfed09-ee92-ecee-172a-17a8243e51ac" style="opacity: 1" class="heading-style-h1">
                          Des meetups enrichissants et ouvert à tous.
                        </h1>
                      </div>
                      <p data-w-id="e4cfed09-ee92-ecee-172a-17a8243e51ae" style="opacity: 1" class="text-size-medium text-size-large text-color-secondary">
                        Chain64 offre une excellente occasion d'apprendre et d'échanger sur le web3. Découvrez ainsi l'univers de la blockchain et des cryptomonnaies.
                      </p>
                      <div class="margin-top margin-medium">
                        <div class="button-group is-center">
                          <a style="opacity: 1" href="https://www.helloasso.com/associations/chain64/adhesions/adhesion-chain64" target="_blank" class="button w-button">Devenir membre</a>
                          <a style="opacity: 1" href="https://www.chain64.com/manifeste" class="button is-secondary w-button">Manifeste Chain64</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-id="e4cfed09-ee92-ecee-172a-17a8243e51b6" style="opacity: 1" class="header_image-wrapper">
                    <img data-w-id="e4cfed09-ee92-ecee-172a-17a8243e51b7" sizes="90vw" alt="" src="images/cross.png" class="header_image bottom-image"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <section class="section_features">
          <div class="padding-global">
            <div class="container-large">
              <div class="padding-section-large">
                <div class="features_component">
                  <div class="w-layout-grid features_list">
                    <div data-w-id="2fb1dd00-4ef8-c6c1-bbbd-2d1618a7fdbe" style="opacity: 1" class="features_item">
                      <div class="margin-bottom margin-xsmall">
                        <div class="features_item-title-wrapper">
                          <div class="icon-embed-xsmall w-embed">
                            <img src="images/meetups.svg" alt="" class="ecosystem_item-icon"/>
                          </div>
                          <h3 blocks-non-deletable="true">Les Meetups Chain64</h3>
                        </div>
                      </div>
                      <p class="text-color-secondary">
                        Chaque mois, un accès est proposé à des rencontres dédiées à l'univers de la crypto, permettant ainsi d'aider et de soutenir chaque participant dans ses différentes envies concernant l'investissement dans les actifs numériques. Ces échanges visent à répondre aux interrogations de chacun sur ce sujet passionnant et en constante évolution.
                      </p>
                    </div>
                    <div data-w-id="2fb1dd00-4ef8-c6c1-bbbd-2d1618a7fdca" style="opacity: 1" class="features_item">
                      <div class="margin-bottom margin-xsmall">
                        <div class="features_item-title-wrapper">
                          <div class="icon-embed-xsmall w-embed">
                            <img src="images/nos-experts.svg" alt="" class="ecosystem_item-icon"/>
                          </div>
                          <h3 blocks-non-deletable="true">
                            Les experts
                          </h3>
                        </div>
                      </div>
                      <p class="text-color-secondary">
                        Dans cette communauté dynamique, des experts spécialisés dans l'écosystème blockchain s'investissent pour aider les participants à approfondir leurs connaissances. Grâce à leurs conseils et à leurs échanges, chacun peut développer ses compétences et enrichir sa compréhension des aspects techniques et pratiques de la blockchain.
                      </p>
                    </div>
                    <div data-w-id="2fb1dd00-4ef8-c6c1-bbbd-2d1618a7fdd6" style="opacity: 1" class="features_item">
                      <div class="margin-bottom margin-xsmall">
                        <div class="features_item-title-wrapper">
                          <div class="icon-embed-xsmall w-embed">
                            <img src="images/nos-ambitions.svg" alt="" class="ecosystem_item-icon"/>
                          </div>
                          <h3 blocks-non-deletable="true">&Agrave; venir</h3>
                        </div>
                      </div>
                      <p class="text-color-secondary">
                       Les membres de cette association auront l'opportunité de participer plus activement aux diverses activités proposées. En effet, l'association envisagera de soumettre des demandes de subvention auprès de l'État, ce qui permettra d'organiser une variété de futurs ateliers, formations et événements enrichissants.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="missions" class="section_ecosystem">
          <div class="padding-global">
            <div class="container-large">
              <div class="padding-section-large">
                <div class="ecosystem_component-2">
                  <div class="margin-bottom margin-xxlarge">
                    <div class="text-align-center">
                      <div class="max-width-medium align-center">
                        <div data-w-id="7bf11a6b-af57-d611-6c7f-90e5be37c8cc" style="opacity: 1" class="margin-bottom margin-xsmall">
                          <div class="text-style-tagline">L'association</div>
                        </div>
                        <div class="margin-bottom margin-small">
                          <h2 blocks-non-deletable="true" data-w-id="7bf11a6b-af57-d611-6c7f-90e5be37c8d0" style="opacity: 1">
                            Former & Accompagner les <span class="text-color-alternate">100+ membres actifs.</span>
                          </h2>
                        </div>
                        <p data-w-id="7bf11a6b-af57-d611-6c7f-90e5be37c8d2" style="opacity: 1" class="text-size-large text-weight-normal text-color-secondary">
                          Découvrir, apprendre, se perfectionner. Nous organisons des rencontres régulières sur les thématiques du web3.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="w-layout-grid ecosystem_grid-list">
                    <div id="w-node-_7bf11a6b-af57-d611-6c7f-90e5be37c8d5-cacf2ea2" class="w-layout-grid ecosystem_row">
                      <a id="w-node-_7bf11a6b-af57-d611-6c7f-90e5be37c8d6-cacf2ea2" data-w-id="7bf11a6b-af57-d611-6c7f-90e5be37c8d6" style="opacity: 1" href="https://bitcoin.org/files/bitcoin-paper/bitcoin_fr.pdf" target="_blank" class="ecosystem_card w-inline-block">
                        <div class="ecosystem_card-content">
                          <div class="ecosystem_card-content-top">
                            <div class="margin-bottom margin-medium">
                              <div>
                                <img src="images/smiley-interrogatif.svg" loading="lazy" alt="" class="ecosystem_item-icon"/>
                                Découvrir
                              </div>
                            </div>
                            <p class="text-size-large text-weight-normal">
                              L'information est à l'origine de toute connaissance. Chain64 vous recommande la lecture de livre blanc de Bitcoin.
                            </p>
                          </div>
                          <div class="margin-top margin-xlarge">
                            <div class="button-group">
                              <div class="button is-link is-icon">
                                <div>Lire plus</div>
                                <div class="ecosystem_card-read-more-icon">
                                  <div class="icon-embed-xxsmall w-embed">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                                      <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                  <div class="icon-embed-xxsmall w-embed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                                      <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a id="w-node-_7bf11a6b-af57-d611-6c7f-90e5be37c8e7-cacf2ea2" data-w-id="7bf11a6b-af57-d611-6c7f-90e5be37c8e7" style="opacity: 1" href="https://www.meetup.com/le-meetup-basque-sur-crypto-blockchain-nft-et-web3/" target="_blank" class="ecosystem_card w-inline-block">
                        <div class="ecosystem_card-content">
                          <div class="ecosystem_card-content-top">
                            <div class="margin-bottom margin-medium">
                              <div>
                                <img src="images/graduate.svg" loading="lazy" alt="" class="ecosystem_item-icon"/>
                                Apprendre
                              </div>
                            </div>
                            <p class="text-size-large text-weight-normal">
                              Vous souhaitez approfondir vos connaissances, venez participez aux meetups. 
                            </p>
                          </div>
                          <div class="margin-top margin-xlarge">
                            <div class="button-group">
                              <div class="button is-link is-icon">
                                <div>Lire plus</div>
                                <div class="ecosystem_card-read-more-icon">
                                  <div class="icon-embed-xxsmall w-embed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                                      <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                  <div class="icon-embed-xxsmall w-embed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                                      <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a id="w-node-_7bf11a6b-af57-d611-6c7f-90e5be37c8f8-cacf2ea2" data-w-id="7bf11a6b-af57-d611-6c7f-90e5be37c8f8" style="opacity: 1" href="https://www.superprof.fr/maitrise-bitcoin-cryptomonnaies-blockchain-optimiser-achats-augmente-revenus-maximise-gains.html" target="_blank" class="ecosystem_card w-inline-block">
                        <div class="ecosystem_card-content">
                          <div class="ecosystem_card-content-top">
                            <div class="margin-bottom margin-medium">
                              <div>
                                <img src="images/tools.svg" loading="lazy" alt="" class="ecosystem_item-icon"/>
                              Se perfectionner
                              </div>
                            </div>
                            <p class="text-size-large text-weight-normal">
                              Prenez en main votre autonomie financière et apprenez avec un expert dans le domaine.
                            </p>
                          </div>
                          <div class="margin-top margin-xlarge">
                            <div class="button-group">
                              <div class="button is-link is-icon">
                                <div>Lire plus</div>
                                <div class="ecosystem_card-read-more-icon">
                                  <div class="icon-embed-xxsmall w-embed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                                      <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                  <div class="icon-embed-xxsmall w-embed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                                      <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="temoignages" class="section_testimonials">
          <div class="padding-global">
            <div class="container-large">
              <div class="padding-section-large">
                <div class="testimonials_component">
                  <div class="margin-bottom margin-xxlarge">
                    <div class="text-align-center">
                      <div class="max-width-medium align-center">
                        <div data-w-id="746b2282-9922-6011-602a-5a1a231cf230" style="opacity: 1" class="margin-bottom margin-xsmall">
                          <div class="text-style-tagline">Témoignages</div>
                        </div>
                        <div class="margin-bottom margin-small">
                          <h2 blocks-non-deletable="true" style="opacity: 1" class="heading-style-h2">
                            Ce qu'en disent <br /><span
                              class="text-color-alternate"
                              > les membres.</span>
                          </h2>
                        </div>
                        <p style="opacity: 1" class="text-size-large text-weight-normal text-color-secondary">
                          Partagez vos avis avec les autres membres, rencontrez-les lors des meetups et rejoignez l'association.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div style="opacity: 1" class="testimonials_list">
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">“Les meetups Chain64 facilitent les rencontres dans l'écosystème crypto, offrent des points d'amorçage pour débutants et encouragent débats et recherches personnelles. Recommandé aux esprits ouverts.”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              Clément
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">“Très heureux d'avoir découvert Chain64 qui accompagne dans la compréhension de la crypto, tant techniquement que philosophiquement, avec des experts en DeFi, airdrop, et trading. Elle permet d'éviter de nombreux pièges et il y en a !”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              Adeitasuna
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">“Ma rencontre avec Chain64 m'a permis de partager ma passion, d'apprendre de nouvelles choses et de vivre des échanges enrichissants dans une ambiance chaleureuse et familiale.”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div>
                            <img src="images/bonnet-logo.jpg" loading="lazy" alt="" class="ecosystem_item-icon"/>
                          </div>
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              Alexandre Bonnet
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">“L’univers des cryptos est passionnant mais tellement vaste ! Grace aux meetups de Chain64, j’ai pu découvrir cet univers à mon rythme grâce au talent de vulgarisation de l’équipe !”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              David Fafet
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">
                        “Chain64 m'a apporté une meilleure vision de ce monde technologique et m'a très certainement évité des erreurs. Cela m'a également permis de rencontrer des personnes passionnées et pleines d'ambitions avec qui je peux discuter sur divers sujets rarement abordés.”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              Guizorg
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">
                        “Fidèle visiteur de ces évènements qui sont finalement surtout des rencontres et discussions enrichissantes, c'est définitivement le rdv immanquable pour tout curieux de tech en général. Pas que crypto :)”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              Frank Dupont, OpenGem
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">
                        “Rejoindre Chain64 m’a permis de pousser mes connaissances de l’écosystème blockchain à un autre niveau. Valeurs communes, échanges qualitatifs et esprit convivial, les meet-ups sont toujours très enrichissants !”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              Charlotte
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">
                        “J'ai pu rencontrer et échanger avec des personnes partageant les mêmes centres d'intérêts. Débats techniques, intervenants de qualité, approche philosophique et sociale de la Blockchain et bien sûr, convivialité !!! Merci à Mattin et Aleksander.”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              Francis.K
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="testimonials_card w-inline-block">
                      <div blocks-non-deletable="true" class="text-size-large text-weight-normal">
                        “Sceptique mais curieux, j’ai découvert Chain64 lors d’un premier meetup. Leur vulgarisation claire et l’ambiance conviviale m’ont aidée à comprendre l’écosystème. C’est instructif, intéressant et accessible à tous, même sans expertise ou gros portefeuille.”
                      </div>
                      <div class="margin-top margin-xsmall">
                        <div class="testimonials_client">
                          <div class="testimonials_client-info">
                            <div class="text-color-secondary">
                              PeonSama
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <header class="section_cta text-color-alternate">
          <div class="padding-global">
            <div class="container-large">
              <div
                data-w-id="6dc7a4cf-1af3-eaf4-2434-4bf16ae8a610"
                class="cta_background"
              >
                <div class="header_background-grid-wrapper">
                  <div class="header_background-overlay"></div>
                  <div class="header_background-grid">
                    <?php
                    for ($i = 0; $i < 20; $i++) {
                        echo '<div class="header_background-square"></div>';
                    }
                    ?>
                    <div id="#c-001-001-1" class="header_background-square"></div>
                    <?php
                    for ($i = 0; $i < 85; $i++) {
                        echo '<div class="header_background-square"></div>';
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="padding-section-huge">
                <div class="cta_component">
                  <div class="text-align-center">
                    <div class="max-width-large align-center">
                      <div class="margin-bottom margin-small">
                        <h1 blocks-non-deletable="true"data-w-id="ba17945f-200b-d2f7-8508-5e6846845f00" style="opacity: 1" class="heading-style-h2">
                          <span class="text-color-white"
                            >Rejoignez les 100+ membres.<br /></span
                          >Apprenez avec Chain64.
                        </h1>
                      </div>
                      <div class="margin-top margin-medium">
                        <div class="button-group is-center">
                          <a style="opacity: 1" href="https://www.helloasso.com/associations/chain64/adhesions/adhesion-chain64" target="_blank" class="button is-icon w-inline-block">
                            <div>Devenir membre</div>
                            <div class="button-icon-wrapper">
                              <div style="
                                  -webkit-transform: translate3d(-2rem, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  -moz-transform: translate3d(-2rem, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  -ms-transform: translate3d(-2rem, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  transform: translate3d(-2rem, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                "
                                class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                                  <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                                </svg>
                              </div>
                              <div style="
                                  -webkit-transform: translate3d(-2rem, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  -moz-transform: translate3d(-2rem, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  -ms-transform: translate3d(-2rem, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  transform: translate3d(-2rem, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                " 
                                class="icon-embed-xsmall w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                                  <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"></path>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <a data-w-id="ba17945f-200b-d2f7-8508-5e6846845f08" style="opacity: 1" href="https://calendly.com/chain64-paysbasque/30min" target="_blank" class="button is-secondary w-button">Rencontrons nous</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <footer style="opacity: 1" class="footer_component">
          <div class="padding-global">
            <div class="container-large">
              <div class="padding-vertical padding-xxlarge">
                <div class="w-layout-grid footer_top-wrapper">
                  <div id="w-node-_56fb9364-1324-29f0-a07c-feb6a21b726b-cacf2ea2" class="footer_logo-column">
                    <a href="https://www.chain64.com" class="footer_logo-link w-nav-brand">
                      <img loading="lazy" src="images/chain64-full-logo.svg" alt=""/></a>
                    <div class="w-layout-grid footer_social-icons">
                      <a href="https://t.me/+5cFAmc2vIjw5Y2Zh" target="_blank" class="footer_social-link w-inline-block">
                        <div class="icon-embed-xsmall w-embed">
                          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 24" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
                            <path
                              d="M12.3734 2.60254C7.30287 2.60254 3.19238 6.71302 3.19238 11.7836C3.19238 16.8542 7.30287 20.9646 12.3734 20.9646C17.444 20.9646 21.5545 16.8542 21.5545 11.7836C21.5545 6.71302 17.444 2.60254 12.3734 2.60254ZM16.629 8.84639C16.4908 10.2981 15.893 13.8211 15.5887 15.4471C15.46 16.1351 15.2066 16.3658 14.9613 16.3884C14.4282 16.4375 14.0233 16.036 13.5069 15.6975C12.6988 15.1678 12.2423 14.8381 11.458 14.3212C10.5515 13.7239 11.1391 13.3957 11.6557 12.8589C11.7909 12.7185 14.14 10.5818 14.1855 10.388C14.1912 10.3637 14.1966 10.2732 14.1428 10.2257C14.089 10.1781 14.0099 10.1942 13.9527 10.2072C13.8717 10.2256 12.5808 11.0788 10.0801 12.7668C9.71368 13.0184 9.3818 13.141 9.08443 13.1346C8.75662 13.1275 8.12605 12.9492 7.65726 12.7968C7.0823 12.61 6.62532 12.5111 6.66511 12.1937C6.68585 12.0284 6.91352 11.8593 7.34814 11.6866C10.0246 10.5205 11.8093 9.75168 12.7023 9.38019C15.252 8.31967 15.7818 8.13545 16.1271 8.12931C16.2031 8.12805 16.3729 8.14686 16.4829 8.23611C16.556 8.29969 16.6027 8.38842 16.6136 8.48474C16.6322 8.60434 16.6374 8.72564 16.629 8.84639Z"
                              fill="currentColor"
                            ></path>
                          </svg>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="footer_link-column">
                    <div class="margin-bottom margin-xxsmall">
                      <div class="text-weight-semibold">Membre</div>
                    </div>
                    <div class="footer_link-list">
                      <a href="https://www.helloasso.com/associations/chain64/adhesions/adhesion-chain64" target="_blank" class="footer_link">Devenir membre</a>
                      <a href="https://calendly.com/chain64-paysbasque/30min" target="_blank" class="footer_link">Prendre RDV</a>
                    </div>
                  </div>
                  <div class="footer_link-column">
                    <div class="margin-bottom margin-xxsmall">
                      <div class="text-weight-semibold">Outils</div>
                    </div>
                    <div class="footer_link-list">
                      <a href="https://mempool.space/fr/" target="_blank" class="footer_link">Mempool</a>
                      <a href="https://github.com/eluane-b/Chain64" target="_blank" class="footer_link">GitHub</a>
                    </div>
                  </div>
                  <div class="footer_link-column">
                    <div class="margin-bottom margin-xxsmall">
                      <div class="text-weight-semibold">Ressources</div>
                    </div>
                    <div class="footer_link-list">
                      <a href="https://drive.google.com/drive/folders/1FX24vUfZaQLt5TiJjQX4b8p5moMd0npn?usp=sharing" target="_blank" class="footer_link">Presse kit</a>
                      <a href="lien-a-mettre" target="_blank" class="footer_link">Mentions légales</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </main>
    </div>
<script
src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66d9c51df2bbaa67cacf2e42"
type="text/javascript"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"
></script>
<script src="js/webflow.js?v=202411050000" type="text/javascript"></script>
</body>
</html>