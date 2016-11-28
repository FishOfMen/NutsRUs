<!--- start nav-->
<div>
<div class="navContainer nopadtopbot">
<div class="nav"><img alt="Menu" class="mobileIcon" src="/_files/sitegraphics/mobile_menu_icon.png"/>
<div class="box">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
<!--
<div class="boxHead">
<h3>Menu</h3>
</div>
<ul class="optionBox-menu">
<li class="optionBox-menu-title"><span class="menu-title" rel="About-Clara">About Clara</span>
<ul class="dropdown-menu-content About-Clara">
<li><a href="/about-clara/executive-bio/index.php">Executive Bio</a></li>
<li><a href="/about-clara/schumann-bio/index.php">Bio</a></li>
<li><a href="/about-clara/chronology/index.php">Chronology</a></li>
<li><a href="/about-clara/gender-music/index.php">Gender in Music</a></li>
</ul>
</li>
</ul>
<ul class="optionBox-menu">
<li class="optionBox-menu-title"><span class="menu-title" rel="References">References</span>
<ul class="dropdown-menu-content References">
<li><a href="/references/her-works/worklst.php">Her Works</a></li>
<li><a href="/references/bibliography/biblmbk.php">Bibliographies</a></li>
<li><a href="/references/MPR/MPR2.php">MPR</a></li>
<li><a href="/references/Films/clara-films.php">Films</a></li>
</ul>
</li>
</ul>
<ul class="optionBox-menu">
<li class="optionBox-menu-title"><span class="menu-title" rel="Post-Clara">Post Clara</span>
<ul class="dropdown-menu-content Post-Clara">
<li><a href="/post-clara/3712tran.php">Performances</a></li>
<li><a href="/post-clara/conhall.php">Events</a></li>
</ul>
</li>
</ul>
<ul class="optionBox-menu">
<li class="optionBox-menu-title" rel="About-The-Site"><span class="menu-title" rel="About-The-Site">About The Site</span>
<ul class="dropdown-menu-content About-The-Site">
<li><a href="/about-site/inform.php">The Society</a></li>
<li><a href="/about-site/shopping/index.php">Shopping</a></li>
<li><a href="/about-site/kudos/kudos1.php">Kudos</a></li>
<li><a href="/about-site/smith/index.php">Dr. Smith</a></li>
</ul>
</li>
</ul>
-->

</div>
</div>
</div>

</div>
<!-- end nav -->
