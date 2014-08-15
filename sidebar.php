<!-- SIDEBAR -->
<div class="sidebar-container">
  <aside class="links container"><div class="inner">
    <ul>
      <?php if ( !is_page( 640 )  ) : // if not about page ?>
        <li class="about"><a href="<?php bloginfo('wpurl'); ?>/about/">About Corry</a></li>
      <?php else : // if IS about page ?>
        <li class="contact"><a href="mailto:cfrydlewicz@gmail.com" target="_blank">Email Corry</a></li>
      <?php endif; ?>
      <li class="linkedin"><a href="http://www.linkedin.com/in/corryart" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);" target="_blank">LinkedIn</a></li>
      <?php if ( in_category('professional') ) : ?>
        <li class="resume"><a href="mailto:cfrydlewicz@gmail.com?subject=Resume Request?body=Hello Corry,%0A%0AI would like a copy of your resume for the following position:%0A%0A(Please insert a job description or a link to one. I will reply as soon as possible.)" target="_blank">Request a Resume</a></li>
        <li class="github"><a href="https://github.com/cfrydlewicz" target="_blank">GitHub</a></li>
        <li class="stackoverflow"><a href="http://stackoverflow.com/users/967727/cfrydlewicz" target="_blank">StackOverflow</a></li>
      <?php endif; ?>
      <?php if ( in_category('personal') ) : ?>
        <li class="facebook"><a href="http://www.facebook.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);" target="_blank">Facebook</a></li>
        <li class="twitter"><a href="http://www.twitter.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.twitter.com']);" target="_blank">Twitter</a></li>
        <li class="spotify"><a href="http://open.spotify.com/user/1232018881/playlist/59TxdkMRHa3DL54uXp9Y3c" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://spotify.com/']);" target="_blank">My Latest Stuff Spotify Playlist</a></li>
      <?php endif; ?>
        <li class="google"><a href="https://plus.google.com/u/0/103048907259001918186/about/p/pub" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://plus.google.com']);" target="_blank">Google+</a></li>
    </ul>
  </div></aside>

  <aside class="gaming-links container"><div class="inner">
    <h3>Play With Me</h3>
    <ul id="gaming-follow">
      <li class="blizzard" style="background-image:url('http://img2.wikia.nocookie.net/__cb20130924144155/wowwiki/images/6/69/Badge_battlenet.png'); background-size:30px;"><a href="http://us.battle.net/wow/en/character/queldorei/Ultros/simple" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.battle.net']);" target="_blank">Ultros#1809</a></li><!--.wow-->
      <li class="steam"><a href="http://steamcommunity.com/id/cfrydlewicz/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://steamcommunity.com']);" target="_blank">handbanana_51</a></li><!--.steam-->
      <li class="lol"><a href="http://www.lolking.net/summoner/na/20187867" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.lolking.net']);" target="_blank">Ultros</a></li><!--.lol-->
      <li class="psn"><a href="https://us.playstation.com/publictrophy/?onlinename=Hand_Banana51" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.playstation.com']);" target="_blank">Hand_Banana51</a></li><!--.psn-->
      <li class="xbl"><a href="http://www.xboxgamertag.com/search/viciouslobo/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.xboxgamertag.com']);" target="_blank">ViciousLobo</a></li><!--.xbl-->
      <li class="mtgo"><a href="http://community.wizards.com/users/propagandist" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://community.wizards.com']);" target="_blank">Propagandist</a></li><!--.mtgo-->
      <!--li class="ffxiv"><a href="http://corryfrydlewicz.com/ffxiv-recruitment/" >Ultros Kowalski</a><br /><span>(Ultros NA)</span></li><!--.ffxiv-->
      <!--li class="guildwars2"><a href="<?php bloginfo('wpurl'); ?>/?p=1376">ultros.2854</a></li><!--.guildwars2-->
    </ul>
  </div></aside>
</div><!--.sidebar-container-->