<?php
  include_once("contact-form/index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come firts in the head; any other head
             contents must come *after* these tags -->
  <title>Editing A Contact Form On A Website</title>
  <meta name="description" content="Owning or a website a blog has it’s responsibilities. You can’t just upload content and forget about it. Well, you can. It's just not considered good practice.">
  <!-- Pintrest -->
  <meta name="p:domain_verify" content="278404a9010e40fd9ab911b1043f8be6"/>

  <!-- Facebook Blog posts -->
  <meta property="fb:app_id" content="261264534353072" />
  <meta property="og:type"   content="article" />
  <meta property="og:url"    content="https://fullstack.city/Editing-A-Contact-Form-On-A-Website/index.php" />
  <meta property="og:title"  content="Editing A Contact Form On A Website" />
  <meta property="og:description"   content="Owning a website or a blog has it’s responsibilities. You can’t just upload content and forget about it. Well, you can. It's just not considered good practice." />
  <meta property="og:image"  content="https://fullstack.city/images/joey-kyber-132520.jpg" />


  <link rel="icon" type="image/png" href="../images/fullstack-map-icon.png">
  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Swipper -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="//load.sumome.com/" data-sumo-site-id="ece0f0f93eec7433d293e0dabe791af627ecedbde3cfe1ba87edbb6574822bc2" async="async"></script>

  <link rel="stylesheet" href="css/main.css">
  <style media="screen">
      .contact-icons-two {
          padding: 5px;
          color: #FFF;
      }
      #facebook:hover {
          background-color:#3B5998;
          border-radius: 4px;
      }
      #twitter:hover {
          background-color: #1DA1F2;
          border-radius: 4px;
      }
      #google-plus:hover {
          background-color: #DB4437;
          border-radius: 4px;
      }
      #linkedin:hover {
          background-color: #0077B5;
          border-radius: 4px;
      }
      #instagram:hover {
          background: #FED484; /* For browsers that do not support gradients */
          border-radius: 4px;
          background: -webkit-linear-gradient(#853BCC, #FED484); /* For Safari 5.1 to 6.0 */
          background: -o-linear-gradient(#853BCC, #FED484); /* For Opera 11.1 to 12.0 */
          background: -moz-linear-gradient(#853BCC, #FED484); /* For Firefox 3.6 to 15 */
          background: linear-gradient(#853BCC, #FED484); /* Standard syntax */
      }
      #pinterest:hover {
          background-color: #D50C22;
          border-radius: 4px;
      }
  </style>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">Full Stack Solutions</a>
      </div>
    </div>
  </nav>
  <!-- /navbar -->


  <div class="wrap blog-header-wrap" id="home">
    <div class="wrap-2 blog-header-wrap-2">
      <div class="container page-title-container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12 main-title-content">
            <div id="error"><?php echo $errorContactForm.$successContactMainForm ?></div> <!-- one or the other will be displayed. However, not both a once. -->
            <h1>Editing A Contact Form On A Website</h1>
            <div class="date">JESUS HILARIO H.  |   JULY 1, 2017</div>
          </div>
        </div>
      </div>
      <div style="text-align:right; margin: 0 0 0 0;">
          <a style="background-color:rgba(0, 0, 0, 0.61);color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:normal;line-height:1.2;display:inline-block;border-radius:3px; text-align:right;" href="http://unsplash.com/@erik_lundqvist?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Erik Lundqvist">
              <span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title></title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg>
              </span>
              <span style="display:inline-block;padding:2px 3px;">Erik Lundqvist</span>
          </a>
      </div>

    </div>

  </div>
  <div class="wrap blog-wrap">
      <div class="wrap-2 blog-wrap-2">
          <div class="container blog-container">

              <div class="row row-2">

                <div class="header-paragraph-style">

                  <div class="col-sm-8 blog-content">
                      <!-- 16:9 aspect ratio -->
                      <div class="embed-responsive embed-responsive-16by9">
                          <iframe style="border-radius: 5px; border: 15px solid #2c3e50;" class="embed-responsive-item" src="https://www.youtube.com/embed/Ft8h-Udy-Lk"></iframe>
                      </div>
                      <!-- <div class="">
                          <iframe width="100%" height="100%"  frameborder="0" allowfullscreen></iframe>
                      </div> -->
                      <h4 style="margin-top: 15px;">Video about Editing a contact form for a client in Corpus Christi, TX.</h4>

                      <div class="blog-content-style">

                        <h2>Owning a website or a blog has it’s responsibilities.</h2>
                        <p>You can’t just upload content and forget about it. Well, you can. It's just not considered good practice. Regular website upkeep is a must if you want your site to be successful. Little tweaks here and there are necessary--for both the developer/designer and the client. In this case the owner of the website wanted to edit the contact form to receive more information from the user whenever they've submitted a contact form.</p>
                        <p>The initial form had three fields or boxes where the visitor would input information (name, subject, message). When we finished with the video we will have added two more fields; Making it a total of 5 separate boxes where the user may input information (first name, last name, email address, phone number, and message).</p>
                    </div>
                    <div class="blog-content-style">
                        <blockquote>
                          <h2 style="font-style:italic; font-weight:normal; color: #8e8b8b; font-size: 23px;">Keeping a website up to date is significantly important to both the owner and it's visitors.</h2>
                        </blockquote>
                      <h2>Why update?</h2>
                      <p>I can not stress this enough. That keeping a website up to date is significantly important for both the owner and it's visitors. Times change. And so do hair styles, fashion, and clothing. Culture. Consider this. Today's websites must be search engine optimized, mobile responsive, keyword content driven, content driven, mobile friendly, and more to be successful in this search engine society that wants things done quick fast and in a hurry.</p>
                      <p>Too, I dread visiting those websites that are still in the 90s. Don't get me wrong. I grew up in the 90s and often miss the grunge scene with bands like Pearl Jam and Stone Temple Pilots. But, if your website is not mobile responsive as are most modern websites—Forget it. You may loose a few clients that way. I've seen them do it and even done it myself. I'll hit the back button and keep searching. Same goes if a page is too slow uploading to my screen. Click. I'm out.</p>

                  </div>
                  <!-- <div class="blog-content-style">
                    <h2>Search Engines?</h2>
                    <p>Now, regarding website maintenance. You can promote upcoming events, products, sales promotions, blog posts, holiday offers, videos, photos, or testimonials on a website. This type of content leads to more leads, user engagement, and SEO potential. </p>
                </div> -->
                  <div class="blog-content-style">
                    <h2>Search Engines Too?</h2>
                    <p>They’ll change on you. You used to be able to use keywords in meta tags and google would pick up and favor your site. Not so now, with the hummingbird algorithm in place since 2013, Google’s search techniques have shifted from keyword based searching to more question-based or conversational searches. So sites that used to use keywords in their meta tags are no longer effective. If your site is not prepared for that, then. Well. Say hello to search results page 20. Yes. </p>
                </div>
                <div class="blog-content-style">
                    <h2>Hey, that’s it.</h2>
                  <p>If you’ve enjoyed this blog, stay tuned for more and subscribe to our newsletter. As we’ll be keeping you posted on when the next blog is out. Leave us a comment. Let us know what you think.</p>
                  <p><a href="https://www.youtube.com/channel/UCtcDwGe8Gunjz4dZcy6vVGA">YouTube channel</a>.</p>
                  <p>-Thanks a bunch,</p>
                  <p><a href="https://www.fullstack.city">Full Stack Solutions</a></p>
                  <a href="https://fullstack.city/Editing-A-Contact-Form-On-A-Website/index.php#disqus_thread">Link</a>
              </div>
                  </div>

                  <div class="col-sm-4" style="background-color: #ddd; height:100%; margin-bottom:30px;  padding-top:10px">
                      <div class="col-sm-4-tags">
                          
                          <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
var disqus_config = function () {
this.page.url = "https://fullstack.city/Editing-A-Contact-Form-On-A-Website/index.php";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "/Editing-A-Contact-Form-On-A-Website/"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://fullstackcity.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                      </div>
                  </div>
                </div>


              </div>

              <!-- /row -->
          </div>
        <div class="container">
              <div class="row address-map-row" style="clear:both; padding-top: 75px;">
                <div class="col-sm-6" style="padding-top: 25px;">
                  <h1 style="font-size:28px;">Full Stack Solutions</h1>
                  <p style="font-size:18px;">1515 6th Street <br>Corpus Christi, Texas, 78404</p>
                  <p style="font-size:18px; margin-bottom: 8px;"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+1-361-779-3759" class="phone-number"> (361)-779-3759</a></p>
                  <p style="font-size:18px; margin-bottom: 8px;"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a style="color: #7ABBBF;" href="mailto:fullstackcity@gmail.com" target="_top"> fullstackcity@gmail.com</a></p>
                  <p style="font-size:18px;"><i class="fa fa-globe" aria-hidden="true"></i> <a style="color: rgb(82, 196, 82);" href="https://fullstack.city"> fullstack.city</a></p>
                  <div class="contact-icons" style="margin-top:20px;">
                      <a href="https://www.facebook.com/fullstackcity" target="_blank"><i class="fa fa-2x contact-icons-two fa-facebook-square" aria-hidden="true" id="facebook"></i>
                      </a>
                      <a href="https://twitter.com/fullstackcity" target="_blank"><i id="twitter" class="fa fa-2x contact-icons-two fa-twitter-square" aria-hidden="true"></i>
                      </a>
                      <a href="https://plus.google.com/u/1/100242297586907968333" target="_blank"><i id="google-plus" class="fa fa-2x contact-icons-two fa-google-plus-square" aria-hidden="true"></i>
                      </a>
                      <a href="https://www.linkedin.com/company-beta/22325082" target="_blank"><i  id="linkedin" class="fa fa-2x contact-icons-two fa-linkedin-square" aria-hidden="true"></i>
                      </a>
                      <a href="https://www.pinterest.com/fullstackcity/" target="_blank"><i id="pinterest" class="fa fa-2x contact-icons-two fa-pinterest-square" aria-hidden="true"></i>
                      </a>
                      <a href="https://www.instagram.com/fullstackcity/" target="_blank"><i id="instagram" class="fa fa-2x contact-icons-two fa-instagram" aria-hidden="true"></i>
                      </a>
                  </div>
                </div>

                <div class="col-sm-6" style="padding-top: 25px;">
                  <div class="" style="height:300px; width:100%; margin-bottom: 24px; color:#000; text-shadow: none;">
                    <div id="map"></div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Swipper min js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
  <!-- Swipper min jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Google Maps API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBw7Cc8iowpfcJxvBYOkM5nioNyTLQ5lX0&callback=initMap"
    async defer></script>
  <!-- <script type="text/javascript" src="index.js"></script> -->
  <script type="text/javascript" src="js/main.js"></script>
  <script id="dsq-count-scr" src="//fullstackcity.disqus.com/count.js" async></script>
</body>

</html>
