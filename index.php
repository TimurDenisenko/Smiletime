<?php include "header.php" ?>
<main data-bs-spy="scroll" data-bs-target="#mainnav" data-bs-offset="0" tabindex="0">
    <section id="carouselPreview" class="carousel slide carousel-fade js-cursor-fx-target">
        <div class="carousel-indicators">
            <div class="indicator justify-content-center text-center">
                <img src="images/slide1-100x50.jpg" alt="slide 2" class="active" data-bs-target="#carouselPreview" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2" loading="lazy">
            </div>
            <div class="indicator">
                <img src="images/slide2-100x50.jpg" alt="slide 3" data-bs-target="#carouselPreview" data-bs-slide-to="2" aria-current="true" aria-label="Slide 3" loading="lazy">
            </div>
            <div class="indicator">
                <img src="images/slide3-100x50.jpg" alt="slide 1" data-bs-target="#carouselPreview" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" loading="lazy">
            </div>
        </div>
        <div class="carousel-inner" id="esileht">
            <div class="carousel-item active">
                <div class="d-block w-100 parallax-image" id="slide1" > </div>    
                <div class="carousel-caption d-none d-md-block animation-1 animation-for-p">
                    <h5>
                        <span>T</span><span>i</span><span>m</span><span>e</span>
                         <span>c</span><span>l</span><span>u</span><span>b</span> 
                         <span>S</span><span>M</span><span>I</span><span>L</span><span>E</span>
                    </h5>
                    <p>KAASAEGSED TEHNOLOOGIJAD JA MOODSAD LÄHENEMISED</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100 parallax-image" id="slide2"></div>  
                <div class="carousel-caption d-none d-md-block animation-2 animation-for-p">
                    <h5>
                        <span>T</span><span>i</span><span>m</span><span>e</span>
                         <span>c</span><span>l</span><span>u</span><span>b</span> 
                         <span>S</span><span>M</span><span>I</span><span>L</span><span>E</span>
                    </h5>
                    <p>PARIM KOHT AJA VEETMISEKS, PUHKAMISEKS JA LÕBUTSEMISEKS!</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100 parallax-image" id="slide3"></div>  
                <div class="carousel-caption d-none d-md-block animation-3 animation-for-p">
                    <h5 class="js-cursor-fx-object--1">
                        <span>T</span><span>i</span><span>m</span><span>e</span>
                         <span>c</span><span>l</span><span>u</span><span>b</span> 
                         <span>S</span><span>M</span><span>I</span><span>L</span><span>E</span>
                    </h5>
                    <p class="js-cursor-fx-object--2">VÄLJASÕIDU ÜRITUSED ERINEVATEL TEEMADEL</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev carousel-preview-control" type="button" data-bs-target="#carouselPreview" data-bs-slide="prev">
            <i class="fa-solid fa-angle-left" aria-hidden="true"><i class="fa-solid fa-circle" aria-hidden="true"></i></i>
        </button>
        <button class="carousel-control-next carousel-preview-control animation-triggers" type="button" data-bs-target="#carouselPreview" data-bs-slide="next">
            <i class="fa-solid fa-angle-right" aria-hidden="true"><i class="fa-solid fa-circle" aria-hidden="true"></i></i>
        </button>
    </section>
    <section class="container" id="meist" >
        <div class="row mt-6">
            <div class="col-12 text-center">
                <h2 class="fw-light">Meist</h2>
            </div>
        </div>
        <div class="row mt-4 general-info">
            <div class="col-4">
                <p>Sünnipäeva pidutsemine muutus tavapäraseks? Lisa rohkem kreatiivsust, improviseeri, ava ennast uuest küljest, mängi meiega koos ja sinu üritus saab olema emotsioonide rohkem ja meelde jääv!</p>
            </div>
            <div class="col-4">
                <p>Korporatiivne õhtu ei sisalda erilisust?! Osale meeste ja naiste lahingus. Kes võidab, man or woman?</p>
            </div>
            <div class="col-4">
                <p>Tahad näha jõuluvana uues stiilis? Läbi jõulu quest mäng koos moodsa päkapikuga ja saa oma kingitus!</p>
            </div>
        </div>
    </section>
    <section class="container" id="team-container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-light">Meie meeskond</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2 team-member" data-bs-toggle="modal" data-bs-target="#zoom-image">
                <div class="image-wrapper">
                    <img src="images/Vladimir.jpg" alt="Vladimir Peojuht" loading="lazy"/>
                </div>
                <i class="fa fa-search"></i>
                <h3 class="text-uppercase text-center">
                    <span>Vladimir</span>
                </h3>
                <h6 class="text-center fw-light">Peojuht</h6>
            </div>
            <div class="col-2 team-member" data-bs-toggle="modal" data-bs-target="#zoom-image">
                <div class="image-wrapper">
                    <img src="images/Aleksandr.jpg" alt="Aleksandr Peojuht" loading="lazy"/>
                </div>
                <i class="fa fa-search"></i>
                <h3 class="text-uppercase text-center">
                    <span>Aleksandr</span>
                </h3>
                <h6 class="text-center fw-light">Peojuht</h6>
            </div>
            <div class="col-2 team-member" data-bs-toggle="modal" data-bs-target="#zoom-image">
                <div class="image-wrapper">
                    <img src="images/Kristjan.jpg" alt="Kristjan Peojuht" loading="lazy"/>
                </div>
                <i class="fa fa-search"></i>
                <h3 class="text-uppercase text-center">
                    <span>Kristjan</span>
                </h3>
                <h6 class="text-center fw-light">Peojuht</h6>
            </div>
            <div class="col-2 team-member" data-bs-toggle="modal" data-bs-target="#zoom-image">
                <div class="image-wrapper">
                    <img src="images/Arina.jpg" alt="Arina Peojuht" loading="lazy"/>
                </div>
                <i class="fa fa-search"></i>
                <h3 class="text-uppercase text-center">
                    <span>Arina</span>
                </h3>
                <h6 class="text-center fw-light">Peojuht</h6>
            </div>
            <div class="col-2 team-member" data-bs-toggle="modal" data-bs-target="#zoom-image">
                <div class="image-wrapper">
                    <img src="images/Julia.jpg" alt="Julia Peojuht" loading="lazy"/>
                </div>
                <i class="fa fa-search"></i>
                <h3 class="text-uppercase text-center">
                    <span>Julia</span>
                </h3>
                <h6 class="text-center fw-light">Peojuht</h6>
            </div>
            <div class="col-2 team-member" data-bs-toggle="modal" data-bs-target="#zoom-image">
                <div class="image-wrapper">
                    <img src="images/Margarita.jpg" alt="Margarita Peojuht" loading="lazy"/>
                </div>
                <i class="fa fa-search"></i>
                <h3 class="text-uppercase text-center">
                    <span>Margarita</span>
                </h3>
                <h6 class="text-center fw-light">Peojuht</h6>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="zoom-image" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="" alt="" class="modal-image img-fluid">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <p class="fw-light modal-description text-capitalize"></p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal -->
    </section>
    <div id="galerii">
        <section class="container gallery-main-container justify-content-center">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="fw-light">Galerii</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-1.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-2.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-3.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-4.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-5.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-6.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-7.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-8.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-9.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-10.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-11.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
                <div class="col-4 gallery">
                    <div class="image-wrapper position-relative">
                        <img src="images/galerii-12.jpg" alt="galerii foto" class="img-fluid" loading="lazy">
                    </div>
                    <p class="text-uppercase gallery-text fw-bold">photography</p>
                </div>
            </div>
        </section>
    <section class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-light">Assortiment</h2>
            </div>
        </div>
        <div class="row assortment">
            <div class="col-4 text-center">
                <p class="counter" data-target="20"></p>
                <p>LAUAMÄNGUD</p>
            </div>
            <div class="col-4 text-center border-start border-end">
                <p class="counter" data-target="6"></p>
                <p>MÄNGUKONSOOLID</p>
            </div>
            <div class="col-4 text-center">
                <p class="counter" data-target="7"></p>
                <p>TEMAATILISED ÕHTUD</p>
            </div>
        </div>
    </section>
    </div>
    <section class="container" id="services-container">
        <div class="row text-center" id="teenused">
            <h2 class="fw-light">Teenused</h2>
        </div>
        <div class="row services justify-content-center">
            <div class="col text-center border target"
                data-title="<i class='fa fa-female' aria-hidden='true'></i>TÜDRUKUTE ÕHTU" 
                data-content="Veeda oma viimane õhtu vabana, kui kompromaadid on kustutatud ning ütle oma teisele poolele, et pidu oli igav 🙂">
                <i class="fa fa-female d-block" aria-hidden="true"></i>
                <p class="d-inline-block">TÜDRUKUTE ÕHTU</p>
            </div>
            <div class="col text-center border target"
                data-title="<i class='fa fa-user-secret' aria-hidden='true'></i>Temaatika" 
                data-content="Piraadi - aarde jaht, merelahing; 
                Egiptuse - quest room, papüüruste uuring; 
                Sõja - luure, laskmine püstolitest ja granaadi viskamine; 
                Gangster - panga rööv, põgenemine vanglast; 
                Bloggers battle - jälgijate arvu suurendamine, hype instagramis; 
                Hacker fight - sotsiaalvõrku häkkimine, Snowdeni saladus; 
                Treener - cheerleading, klubi legend">
                <i class="fa fa-user-secret d-block" aria-hidden="true"></i>
                <p class="d-inline-block">TEMAATIKA</p>
            </div>
            <div class="col text-center border target"
                data-title="<i class='fa fa-users' aria-hidden='true'></i>KORPORATIIV" 
                data-content="Organiseerime üritust firma tegevusala põhjal. Üllatame mitte ainult külalisi, vaid ka ülemusi">
                <i class="fa fa-users d-block" aria-hidden="true"></i>
                <p class="d-inline-block">KORPORATIIV</p>
            </div>
            <div class="col text-center border target"
                data-title="<i class='fa fa-graduation-cap' aria-hidden='true'></i>LÕPUPIDU" 
                data-content="Korraldame lõpupeod algklassidele ja gümnaasiumitele. Mitte tüüpilised konkursid ja kaasaegne lähenemine on garanteeritud">
                <i class="fa fa-graduation-cap d-block" aria-hidden="true"></i>
                <p class="d-inline-block">LÕPUPIDU</p>
            </div>
            <div class="col text-center border target"
                data-title="<i class='fa fa-birthday-cake' aria-hidden='true'></i>SÜNNIPÄEVAD" 
                data-content="Pea pidu meil, tee selfie peojuhiga ja saa +100 likes">
                <i class="fa fa-birthday-cake d-block" aria-hidden="true"></i>
                <p class="d-inline-block">SÜNNIPÄEVAD</p>
            </div>
        </div>
        <div class="row services justify-content-center">
            <div class="col text-center border target"
                data-title="<i class='fa fa-key' aria-hidden='true'></i>QUEST ROOM" 
                data-content="Läbi kõik Anubise jumala ülesanded ja pääse pimedast ruumist">
                <i class="fa fa-key d-block" aria-hidden="true"></i>
                <p class="d-inline-block">QUEST ROOM</p>
            </div>
            <div class="col text-center border target"
                data-title="<i class='fab fa-instagram' aria-hidden='true'></i>PRANKS" 
                data-content="Telli lähedasele inimesele prank
                - linna seiklused; 
                - fake töövestlus, paranormaalsed nähtused; 
                - ekstreemne show">
                <i class="fab fa-instagram d-block" aria-hidden="true"></i>
                <p class="d-inline-block">PRANKS</p>
            </div>
            <div class="col text-center border target"
                data-title="<i class='fa fa-tree' aria-hidden='true'></i>JÕULUPIDU" 
                data-content="Taga endale maailma hype ja saa maksimaalselt talve adrenaliini! Jõulupeo kava igale vanusele.">
                <i class="fa fa-tree d-block" aria-hidden="true"></i>
                <p class="d-inline-block">JÕULUPIDU</p>
            </div>
            <div class="col text-center border target"
                data-title="<i class='fa-brands fa-pied-piper-alt' aria-hidden='true'></i>MUSTKUNSTNIK" 
                data-content='Sukeldu illusioonis ja ära ütle pärast, et ta oli "cheater"'>
                <i class="fa-brands fa-pied-piper-alt d-block" aria-hidden="true"></i>
                <p class="d-inline-block">MUSTKUNSTNIK</p>
            </div>
            <div class="col text-center border target"
                data-title="<i class='fa fa-venus-mars' aria-hidden='true'></i>PULM" 
                data-content="Perforaator vs saapanael - kes võidab? pruut ostab välja abikaasa - lõhume pulma stereotüüpe">
                <i class="fa fa-venus-mars d-block" aria-hidden="true"></i>
                <p class="d-inline-block">PULM</p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-light" id="hinnad">Hinnad</h2>
            </div>
        </div>
    </section>
    <section class="container" id="tagasiside">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-light">Tagasiside</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="carousel-tagasiside" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-tagasiside" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-tagasiside" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel-tagasiside" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carousel-tagasiside" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carousel-tagasiside" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carousel-tagasiside" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-content">
                                <div class="carousel-caption d-block">
                                    <p class="fw-light feedback">Suur tänu Vladimirile, et organiseeris niisuguse peo. See oli huvitav, reisisime muistses Egiptuses. Vladimiri energilisus läks lastele väga hästi peale ja otsustasime ühiselt, et see oli kõige parem sünnipäeva pidu kus me kõik käinud oleme. Veelkord täname suurepärase peo eest!</p>
                                    <p class="feedback-author">Inna Karamnova</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-content">
                                <div class="carousel-caption d-block">
                                    <p class="fw-light feedback">Super klubi! Super Meeskond! Pidadime väikese juubeli(21.04.08). Peokorraldajad hoidsid 10 aastaseid lapsi 4 tundi niimodi tegevuses, et ei saanudki aru, et juba on aeg lahkuda. Eriti konkursite fina ja slideshow õnnitlemine. Suur tänu. Soovitan kõikidele ning meeleldi tuleme teile veel kord!!</p>
                                    <p class="feedback-author">Tatjana Korseikina</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-content">
                                <div class="carousel-caption d-block">
                                    <p class="fw-light feedback">Super meeskond, super pidu! Laps oli väga vaimustatud! Ürituse ajal olid kõik tegevuses ning võib öelda, et vanemad praktiliselt ei näinudki lapsi. Kõigile väga meeldis! Poja sünnipäeva suhtes teme juba, kus saab meie pidu toimuma! Suur tänu teile veel kord!</p>
                                    <p class="feedback-author">Evgenija Kireeva</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-content">
                                <div class="carousel-caption d-block">
                                    <p class="fw-light feedback">Kōige parem, lõbusaim, aktiivseim sünnipäev minu pojal. Kõik külalised olid vaimustuses. Suur tänu Peojuht Vladimirile. 100% külastame teid taas!!!</p>
                                    <p class="feedback-author">Natalja Kalinina</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-content">
                                <div class="carousel-caption d-block">
                                    <p class="fw-light feedback">Aitäh! Veetsime suurepäraselt aega teie juures! Mulle väga meeldis kõik ning kuidas peojuht viis läbi meelelahutus kava ning kōik oli väga huvitav ja ebatavaline. Kordagi ei kahetse, et otsustasin pidada esimese osa enda juubelist just teie juures!</p>
                                    <p class="feedback-author">Olga Sarap</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-content">
                                <div class="carousel-caption d-block">
                                    <p class="fw-light feedback">Siin võib pidada lihtsalt imelise peo! Meie poja sünnipäev oli õnnestunud 100%. Kõik lapsed ja täiskasvanud olid üllatunud. Täname kõiki Time club SMILE meeskonda, tuleme siia veel kord!</p>
                                    <p class="feedback-author">Ekaterina Artushina</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev carousel-control" type="button" data-bs-target="#carousel-tagasiside" data-bs-slide="prev">
                        <i class="fa-solid fa-angle-left" aria-hidden="true"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next carousel-control" type="button" data-bs-target="#carousel-tagasiside" data-bs-slide="next">
                        <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="broneerimine">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-light">Broneerimine</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-6">
                <button type="button" class="btn btn-book btn-lg btn3d" data-bs-toggle="modal" data-bs-target="#broneerimine-modal">
                    <i class="fa-regular fa-star"></i>
                    Broneeri sünnipäev Online
                </button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-private btn-lg btn3d" data-bs-toggle="modal" data-bs-target="#event-modal">
                    <i class="fa-regular fa-face-smile"></i>
                    Tee päring eripakkumisele
                </button>
            </div>
            <div class="modal fade modals-for-events" id="broneerimine-modal" tabindex="-1" aria-labelledby="broneerimine-modal-label">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"> 
                    <div class="modal-content">
                        <div class="modal-body p-0 overflow-x-hidden">
                        <div class="modal-header border-0 pb-0 bg-white">
                            <h3 class="modal-title fs-5" id="broneerimine-modal-label">Broneeri sünnipäev Online</h3>
                            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                        </div>
                            <form class="container pt-0 pb-0 needs-validation" novalidate>
                                <div class="row g-1 align-items-center" id="pakket">
                                    <div class="col-auto">
                                        <p class="col-form-label main-label">Pakket:</p>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-check-label" for="s">S (250EUR)</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pakket" id="s" value="S" checked required />
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-check-label" for="m">M (280EUR)</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pakket" id="m" value="M" required />
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-check-label" for="l">L (300EUR)</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pakket" id="l" value="L" required />
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-check-label" for="xl">XL (330EUR)</label>
                                        <div class="form-check form-check-inline col-auto">
                                            <input class="form-check-input" type="radio" name="pakket" id="xl" value="XL" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input
                                            placeholder="Toimumise aeg"
                                            class="form-control"
                                            type="text"
                                            onfocus="(this.type='date')"
                                            onblur="(this.type='text')"
                                            required />
                                        <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="number" class="form-control" id="age" placeholder="Vanus" min="18" max="99" required />
                                        <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row g-1 align-items-center" id="osalejate-arv">
                                    <div class="col-auto">
                                        <p class="col-form-label main-label">Osalejate arv:</p>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="osalejate-arv" id="true" value="true" checked required />
                                        </div>
                                        <label class="form-check-label" for="true">kuni 15</label>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check form-check-inline ps-2">
                                            <input class="form-check-input ms-2 me-2" type="radio" name="osalejate-arv" id="false" value="false" required />
                                        </div>
                                        <label class="form-check-label" for="false">15+</label>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-12">
                                        <textarea class="form-control" id="erisoovid" rows="6" placeholder="Erisoovid" required></textarea>
                                        <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row g-1 align-items-center" id="koht">
                                    <div class="col-auto">
                                        <p class="col-form-label main-label">Koht:</p>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="koht" id="club" value="club" checked required />
                                        </div>
                                        <label class="form-check-label" for="club">Time club SMILE</label>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check form-check-inline ps-2">
                                            <input class="form-check-input ms-2 me-2" type="radio" name="koht" id="noclub" value="noclub" required />
                                        </div>
                                        <label class="form-check-label" for="noclub">Väljasõit</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 has-validation">
                                        <input class="form-control" type="tel" id="phone" name="phone" 
                                            placeholder="Telefoninumber" 
                                            pattern="^\+(\d{1,3})(\d{7,12})$" 
                                            required />
                                        <div class="invalid-feedback text-start" id="phoneFeedback">Palun täitke nõutud väli.</div>
                                    </div>
                                    <div class="col-md-6 has-validation">
                                        <input class="form-control" type="email" id="email" name="email" 
                                            placeholder="E-mail (välja arvatud mail.ru)" 
                                            pattern="^((?!\.)[\w\-_.]*[^.])(@(?!mail\.ru\b))(?![\w]*\.mail\.ru\b)(\w+)(\.\w+(\.\w+)?[^.\W])$" 
                                            required />
                                        <div class="invalid-feedback text-start" id="emailFeedback">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row justify-content-end mt-5">
                                    <button type="submit" class="btn btn-dark w-25">SAADA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade modals-for-events" id="event-modal" tabindex="-1" aria-labelledby="event-modal-label" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"> 
                    <div class="modal-content">
                        <div class="modal-body p-0 overflow-x-hidden">
                            <div class="modal-header border-0 pb-0 bg-white">
                                <h3 class="modal-title fs-5" id="event-modal-label">Tee päring eripakkumisele</h3>
                                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <form class="container pt-0 pb-0 needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <select class="form-select" id="event-select" aria-label="Event" required>
                                            <option value="" selected disabled style="display: none;">Ürituse liik (lõpupidu, pulm jne)</option>
                                            <option value="Tudrukute ohtu">Tüdrukute õhtu</option>
                                            <option value="Teematika">Teematika</option>
                                            <option value="Korporatiiv">Korporatiiv</option>
                                            <option value="Lopupidu">Lõpupidu</option>
                                            <option value="Mustkunstnik">Mustkunstnik</option>
                                            <option value="Quest">Quest room</option>
                                            <option value="Pranks">Pranks</option>
                                            <option value="Joulupidu">Jõulupidu</option>
                                            <option value="Pulm">Pulm</option>
                                        </select>                                        
                                        <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input
                                            placeholder="Toimumise aeg"
                                            class="form-control"
                                            type="text"
                                            onfocus="(this.type='date')"
                                            onblur="(this.type='text')"
                                            required />
                                        <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 has-validation">
                                        <input type="number" class="form-control" placeholder="Osalejate arv" min="2" max="99" required />
                                        <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                                    </div>
                                    <div class="col-md-6 has-validation">
                                        <input class="form-control" type="text" name="text" 
                                            placeholder="Ürituse läbiviimise koht"
                                            required />
                                        <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <textarea class="form-control" id="erisoovid" rows="6" placeholder="Erisoovid" required></textarea>
                                        <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 has-validation">
                                        <input class="form-control" type="tel" id="phone" name="phone" 
                                            placeholder="Telefoninumber" 
                                            pattern="^\+(\d{1,3})(\d{7,12})$" 
                                            required />
                                        <div class="invalid-feedback text-start" id="phoneFeedback">Palun täitke nõutud väli.</div>
                                    </div>
                                    <div class="col-md-6 has-validation">
                                        <input class="form-control" type="email" id="email" name="email" 
                                            placeholder="E-mail (välja arvatud mail.ru)" 
                                            pattern="^((?!\.)[\w\-_.]*[^.])(@(?!mail\.ru\b))(?![\w]*\.mail\.ru\b)(\w+)(\.\w+(\.\w+)?[^.\W])$" 
                                            required />
                                        <div class="invalid-feedback text-start" id="emailFeedback">Palun täitke nõutud väli.</div>
                                    </div>
                                </div>
                                <div class="row justify-content-end mt-5">
                                    <button type="submit" class="btn btn-dark w-25">SAADA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row text-center">
            <div class="col">
                <a href="https://iweb.ee/">
                    <img src="images/iweb.png" alt="iweb" loading="lazy" class=" mt-4">
                </a>
            </div>
            <div class="col">
                <a href="https://eskaro.ee/">
                    <img src="images/eskaro.png" alt="eskaro" loading="lazy">
                </a>
            </div>
            <div class="col">
                <a href="https://www.tallinn.ee/">
                    <img src="images/tallinn.png" alt="tallinn" loading="lazy">
                </a>
            </div>
            <div class="col">
                <a href="https://www.kysk.ee/">
                    <img src="images/kysk.png" alt="kysk" loading="lazy">
                </a>
            </div>
            <div class="col">
                <a href="http://www.rokkibaar.ee/">
                    <img src="images/rokki.png" alt="rokkibaar" loading="lazy">
                </a>
            </div>
        </div>
    </section>
    <section class="container-fluid pt-5 pb-5" id="kontaktid">
        <div class="row mb-3">
            <div class="col-12 w-100 text-center">
                <h2 class="fw-light text-white">Kontaktid</h2>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row" id="contact-info">
                <div class="col text-white fw-light pe-5">
                    <p class="pb-3">Kõikide küsimustega pöörduge meie poole ja meie vastame Teile meelsasti!</p>
                    <div class="mb-4">
                        <i class="fa-solid fa-location-dot text-black bg-white p-1 text-center me-2"></i> 
                         Põhja-Tallinn, Erika 5A, Tallinn, Estonia
                    </div>
                    <div class="mb-4">
                        <i class="fa-solid fa-phone text-black bg-white p-1 me-2"></i>
                         +372 53 664 000
                    </div>
                    <div class="mb-4">
                        <i class="fa-solid fa-envelope text-black bg-white p-1 me-2"></i>
                        <a href="mailto:info@smiletime.ee" class="text-decoration-none"> info@smiletime.ee</a>
                    </div>
                    <div class="mb-5">
                        <i class="fa-solid fa-earth-americas text-black bg-white p-1 me-2"></i>
                        <a href="www.smiletime.ee" class="text-decoration-none"> www.smiletime.ee</a>
                    </div>
                    <p>Kuidas Meieni jõuda ühistranspordiga? <br />
                    Peatus <strong class="fw-bold">Angerja</strong> (230 m kaugusel): Buss (59), tramm (1, 2). <br />
                    Peatus <strong class="fw-bold">Erika</strong> (400 m kaugusel): Buss (3, 59).</p>
                </div>
                <div class="col ps-5">
                    <form class="container pt-0 pb-0 needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 has-validation">
                                <input class="form-control bg-transparent form-control-lg" type="text" name="name" 
                                    placeholder="Nimi" 
                                    required />
                                <div class="invalid-feedback text-start" id="phoneFeedback">Palun täitke nõutud väli.</div>
                            </div>
                            <div class="col-md-6 has-validation">
                                <input class="form-control bg-transparent form-control-lg" type="email" name="email" 
                                    placeholder="Email" 
                                    pattern="^((?!\.)[\w\-_.]*[^.])(@(?!mail\.ru\b))(?![\w]*\.mail\.ru\b)(\w+)(\.\w+(\.\w+)?[^.\W])$" 
                                    required />
                                <div class="invalid-feedback text-start" id="emailFeedback">Palun täitke nõutud väli.</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <textarea class="form-control" id="teade" rows="6" placeholder="Teade" required></textarea>
                                <div class="invalid-feedback text-start">Palun täitke nõutud väli.</div>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-4">
                            <button type="submit" class="btn w-25 fw-bold">SAADA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="map-section">
        <div class="row">
            <div class="col-12 bg-black w-100 pt-4 pb-4">
                <h3 class="text-center text-white fw-light fs-4">
                    LEIA MEID KAARDILT
                    <i class="fa-solid fa-angle-down d-inline-block ps-2"></i>
                </h3>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php" ?>