<!doctype html>
<html>
  <head>
    <title>uzhas_neveroyatniy</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css" rel="stylesheet" type="text/css"> -->
  </head>
  <body>
  	<img src="images6.jpg" width="320">
    <form class="tweetbox">
      <textarea name="tweet_content" class="tweetbox__field" placeholder="Compose new Tweet..."></textarea>
      <div class="tweetbox__actions">
        <div class="tweetbox__counter"></div>
        <input class="tweetbox__button" type="submit" value="Tweet">
      </div>
    </form>
    <section class="tweets">
      <article class="tweet">
        <a  class="tweet__avatar">
          <img src="avatar.jpg" alt="JeffreyATW">
        </a>
        <div class="tweet__details">
          <div class="tweet__metadata">
            <a  class="tweet__author">hochu umeret'</a>
            <small class="tweet__time">1h</small>
          </div>
          <p class="tweet__content">spasite radi boga.</p>
                      <button class="retweet" type="button">Retweet</button>
                      <button class="like">Like</button>
        </div>
      </article>
      <article class="tweet">
        <a  class="tweet__avatar">
          <img src="avatar.jpg" >
        </a>
        <div class="tweet__details">
          <div class="tweet__metadata">
            <a  class="tweet__author">hochu umeret'</a>

            <small class="tweet__time">2h</small>
          </div>
          <p class="tweet__content">za chto mne eto.</p>
                      <button class="retweet" type="button">Retweet</button>
                      <button class="like">Like</button>
        </div>
      </article>
      <article class="tweet">
        <a  class="tweet__avatar">
          <img src="avatar.jpg" >
        </a>
        <div class="tweet__details">
          <div class="tweet__metadata">
            <a  class="tweet__author">hochu umeret'</a>
            <small class="tweet__time">3h</small>
          </div>
          <p class="tweet__content">ya ne hochu.</p>
                      <button class="retweet" type="button">Retweet</button>
                      <button class="like">Like</button>

        </div>
      </article>
    </section>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>