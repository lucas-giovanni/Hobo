<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hobo Nederland - Kijk series online, kijk films online</title>
    <meta name="description" content="Netflix world – Watch TV Shows Online, Watch Movies Online">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="image-background">

    <main style="padding: 0px 10px;">
        <header class="d-flex space-between middle-align">
            <img src="images/logo.png" height="50px" width="170px" alt="site logo main"></img>
            <!-- <button class="button"><a href="inlog.php" class="sign-in-btn"> Sign In</a></button> -->
            <a href="inlog.php" class="sign-in-btn"><button class="button"> Sign In</button></a>

        </header>
        <section id="landing-hero-section" class="text-white d-flex direction-column flex-center middle-align">

            <h1>Unlimited movies, TV shows, and more.</h1>
            <h2>Watch anywhere. Cancel anytime.</h2>

            <!-- landing page form start -->
            <form class="email-form d-flex" id="email-form" method="POST" action="sign-up.php">

                <h3 class="email-form-title text-white">Ready to watch? Enter your email to create or access your account.</h3>
                <p id="email-error" style="color: #92D050; font-weight: 600; display: none;">Enter correct email</p>

                <div class="email-form-lockup d-flex">

                    <div>
                        <input type="email" name="email" class="emailField" id="id_email" value="" tabindex="0"
                            autocomplete="email" maxlength="50" minlength="5" placeholder="Email address"
                            onchange="validateEmail()" />

                    </div>
                    <button href="inlog.php" class="button submit" type="submit" id="submitbutton" tabindex="0" disabled="disabled">
                        <span class="hero-cta-btn-txt">Get Started
                        </span>
                        <!-- right arrow icon-->
                        <span>
                            <svg version="1.1" id="right-icon" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175"
                                style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                                <g>
                                    <path
                                        d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		                                c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"
                                        fill="white" />

                                </g>
                            </svg>
                        </span>
                    </button>


                </div>

            </form>
        </section>
        <br><br>
        <div class="faq">
          <h1 class="faq-heading">FAQ'S</h1>
      <section class="faq-container">
          <div class="faq-one">
              <!-- faq question -->
              <h1 class="faq-page">What can I watch on Hobo?</h1>
              <!-- faq answer -->
              <div class="faq-body">
                  <p>Hobo has an extensive library of feature films, documentaries, TV programmes, anime, award-winning Netflix originals and more. Watch as much as you want, anytime you want.</p>
              </div>
          </div>
          <hr class="hr-line">
          <div class="faq-two">
              <!-- faq question -->
              <h1 class="faq-page">What is Hobo?</h1>
              <!-- faq answer -->
              <div class="faq-body">
                  <p>Hobo is a streaming service that offers a wide variety of award-winning TV programmes, films, anime, documentaries and more – on thousands of internet-connected devices.</p>
              </div>
          </div>
          <hr class="hr-line">
          <div class="faq-three">
              <!-- faq question -->
<h1 class="faq-page">How much does Hobo cost?</h1>
              <!-- faq answer -->
              <div class="faq-body">
                  <p>Watch Hobo on your smartphone, tablet, smart TV, laptop or streaming device, all for one fixed monthly fee. Plans range from €7,99 to €15,99 a month. No extra costs, no contracts.</p>
              </div>
          </div>
          <div class="faq-four">
              <!-- faq question -->
<h1 class="faq-page">How do I cancel?</h1>
              <!-- faq answer -->
              <div class="faq-body">
                  <p>Hobo is flexible. There are no annoying contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account at any time.</p>
              </div>
          </div>
      </section>
        </div>
    </main>


    <script src="js/script.js"></script>

</body>

</html>
