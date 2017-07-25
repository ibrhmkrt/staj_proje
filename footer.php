<?php include_once "database.php" ?>
<footer>

   <div class="row">
     <?php
     $sorgu = $db->query("SELECT * FROM sosyalmedya ", PDO::FETCH_ASSOC)->fetch();
     ?>
     <div class="twelve columns">
     <ul class="social-links">
            <li><a href= "https://www.facebook.com/<?php echo $sorgu['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/<?php echo $sorgu['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://plus.google.com/<?php echo $sorgu['googleplus'] ?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://github.com/<?php echo $sorgu['github'] ?>"><i class="fa fa-github-square"></i></a></li>
            <li><a href="https://www.instagram.com/<?php echo $sorgu['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>

         </ul>
     </div>

      <div class="six columns info">

         <h3>About Keep It Simple</h3>

         <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
         Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
         nibh id elit.
         </p>

         <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint
         sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

      </div>

      <div class="four columns">

         <h3>Photostream</h3>

            <?php function instagram()
            {
              $username = 'kotlindeveloper';
              $json = file_get_contents('https://www.instagram.com/'.$username.'/media/');
              $instagram_feed_data = json_decode($json, true);
              if (isset($instagram_feed_data['items'])) {
                return $instagram_feed_data['items'];
        ?>
        <?php
        }
        }
        ?>
            <ul class="photostream group">
            <?php foreach (instagram() as $item) {
        $link = $item['link'];
        $img_url = $item['images']['low_resolution']['url'];
        $caption = isset($item['caption']) ? $item['caption']['text'] : '';
        echo "<li><a href='$link'><img src='$img_url'></a></li>";
        } ?>

         </ul>

      </div>

      <div class="two columns">
         <h3 class="social">Navigate</h3>

         <ul class="navigate group">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Demo</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">About</a></li>
         </ul>
      </div>

      <p class="copyright">&copy; 2017 &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">ibrahim Kurt</a>.</p>

   </div> <!-- End row -->

   <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

</footer> <!-- End Footer-->
