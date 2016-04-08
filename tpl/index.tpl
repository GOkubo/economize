{include file='globalheader.tpl'}
<!-- MAIN -->
<div role="main" id="main">
        <div class="wrapper">
                <!-- SLIDER -->
                <div class="slider-wrapper theme-default theme-project theme-home">
                        <div class="ribbon"></div>
                        <div id="slider" class="nivoSlider">
                                <a href="about.php">{html_image src="Fotos/foto1.jpg"}</a>
                                <a href="location.php">{html_image src="Fotos/foto2.jpg"}</a>
                                <a href="location.php">{html_image src="Fotos/foto3.jpg"}</a>
{*                                <a href="location.php">{html_image src="location.jpg"}</a>*}
{*                                <a href="contact.php">{html_image src="dummies/slides/03.jpg" style="width:920px;height:390px"}</a>*}
{*                                <a href="contact.php">{html_image src="dummies/slides/03.jpg"}</a>*}
                        </div>
                </div>
                <!-- ENDS SLIDER -->

                <!-- headline -->
                <div class="headline">MERCEARIA E MATERIAIS DE CONSTRUÇÃO</div>
                <!-- ENDS headline -->

                <!-- Feature -->
                <ul id="filter-container-feature" class="feature">
                        <li>
                                <a href="about.php" class="thumb" >{html_image src="icnflat_03.png"}</a>
                                <div class="caption">Quem Somos</div>
                        </li>
                        <li>
                                <a href="location.php" class="thumb" >{html_image src="icnflat_02.png"}
        {*                                <div class="date"><span class="d">23</span><span class="m">Jan</span></div>*}
                                </a>
                                <div class="caption">Onde Estamos</div>
                        </li>
                        <li>
                                <a href="contact.php" class="thumb" >{html_image src="icnflat_01.png"}</a>
{*                                <a href="contact.php" class="thumb" >{html_image src="dummies/430x500c.jpg"}</a>*}
                                <div class="caption">Contate-nos</div>
                        </li>
                 </ul>
                 <!-- ENDS feature -->
        </div>
</div>
<!-- ENDS MAIN -->
{include file='globalfooter.tpl'}