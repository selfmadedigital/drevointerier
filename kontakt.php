<!--breadcrumb-->
<section class="row header-breadcrumb">
    <div class="container">
        <div class="row m0 page-cover">
            <h2 class="page-cover-tittle">KONTAKT</h2>
        </div>
    </div>
</section>

<section class="row touch">
    <div class="sectpad touch_bg">
        <div class="container">
            <div class="row m0 section_header color">
                <h2>DREVO - interiér s.r.o.</h2>
            </div>
            
            <div class="row touch_middle">
                <div class="col-md-4 open_hours">
                    <div class="row m0 touch_top">
                        <ul class="nav">
                            <li class="item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Hlboká 778<br/>
                                        900 55 Lozorno
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-envelope-o"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        drevo-interier@stonline.sk
                                    </div>
                                </div>
                            </li>
                            <li  class="item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Tel.: 02/659 687 56<br/>
                                        Fax: 02/654 592 82<br/>
                                        Mobil: 0903 218 449, 0903 714 823
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 input_form">
                    <form action="contact_process.php" method="post" id="contactForm">
                        <input type="text" class="form-control" id="yourname" name="yourname" placeholder="Meno">
                        <input type="email" class="form-control" id="youremail" name="youremail" placeholder="Email">
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telefón">
                        <textarea class="form-control" rows="6" id="message" name="message" placeholder="Správa"></textarea>
                        <div class="row m0">
                            <button type="submit" class="btn btn-default submit">Odoslať</button>
                        </div>
                    </form>
                    <div id="success"><p>Your message sent successfully.</p></div>
                    <div id="error"><p>Something is wrong. Message cant be sent!</p></div>
                </div>
            </div>           
        </div>
    </div>
</section>
<!--MapBox-->
<section class="map">
    <div id="mapBox" class="row m0" data-lat="37.3818288" data-lon="-122.0636325" data-zoom="15"></div>
</section>

