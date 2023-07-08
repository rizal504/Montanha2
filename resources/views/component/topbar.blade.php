<div id="menu-classic">
    <div class="menu-holder">
        <ul>
            <li class="submenu">
                <a href="/montanha">Home</a>
            </li>
            <li class="submenu">
                <a href="/gunung">Gunung</a>
            </li>
            <li>
                <a href="/forum" class="">Forum</a>
            </li>
            <li class="submenu">
                <a href="/gallery">Gallery</a>
               </li>
            <li class="submenu">
                <a href="/blog">Artikel</a>
            </li>
            <li>
                <a href="contact-1.html">Contact</a>
            </li>
            <li>
                <a href="/{{ auth()->check() ? 'logout' : 'login' }}">{{ auth()->check() ? 'Logout' : 'Login' }}</a>
            </li>
            <!-- Search Icon -->
            <li class="search">
                <i class="icon ion-ios-search"></i>
            </li>
        </ul>
    </div>
</div>