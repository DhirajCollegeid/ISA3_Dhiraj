<!DOCTYPE html>
<html lang="en">
<!-- ISA 2 build website using bootstrap - by Dhiraj  -->
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhiraj Bank - Innovating Financial Solutions</title>
    <link rel="icon" href="../assets/img/logo.png"  id ="icon" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,400&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:wght@400;700&family=Volkhov:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.min.js"></script> <!-- coded by Dhiraj -->
</head>

<body class="body-whole">

    <img src="../assets/img/home-decor.png" class="bank-decor">


    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pb-5">
        <div class="container">
            <a class="navbar-brand nav-logo" href="#">
                <img src="../assets/img/homebank.png" alt="Logo" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="fas fa-bars fa-sm"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark nav-change-color" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark nav-change-color" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark nav-change-color" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark nav-change-color" href="../pages/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-signup-container">
                            <div class="nav-signup">
                                <a href="../pages/register.php" class="no-underline">Sign Up</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <section class="pt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <p class="bank-subtitle mb-1">We don't just manage your money, we optimize it.</p>
                    <h2 class="mb-3 bank-title">Innovating Financial Solutions <br> Since 2024</h2>
                    <p class="bease-subtitle col-9 mb-4 bank-info">
                        We're not your traditional bankers; we're the financial experts who understand your needs and ambitions.
                    </p>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <a href="../pages/register.php"><button class="btn btn-primary border-0 bank-btn">Register Now</button></a>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item bank-phone"> <img src="../assets/img/home-call.png"
                                    height="20px" class="zoom-on-hover"> +91 7498729204</li>
                            <li class="list-inline-item"><span class="vertical-divider"></span></li>
                            <li class="list-inline-item zoom-on-hover fa-sm"><a href="#"><i
                                        class="fab fa-facebook fa-lg" id="icon-awesome"></i></a></li>
                            <li class="list-inline-item zoom-on-hover fa-sm"><a href="#"><i
                                        class="fab fa-instagram fa-lg" id="icon-awesome"></i></a></li>
                            <li class="list-inline-item zoom-on-hover fa-sm"><a href="#"><i class="fab fa-twitter fa-lg"
                                        id="icon-awesome"></i></a></li>
                            <li class="list-inline-item zoom-on-hover fa-sm"><a href="#"><i
                                        class="fab fa-linkedin fa-lg" id="icon-awesome"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <img src="../assets/img/bank.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <div class="gap"></div>



    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h2 class="font-weight-bold section-title">Our Services</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-8 text-center">
                    <p class="text-center section-subtitle">
                        Tired of banking apps that look like they were designed by a hamster on acid? Ditch the snooze
                        and join the financial fiesta at Dhiraj Bank! Where your hard-earned moolah gets more action
                        than a Dogecoin on Elon's Twitter feed.
                    </p>
                </div>
            </div>
            <div class="row col-12 justify-content-center text-center text-uppercase" id="service-list">
                <div class="col-7 col-md-2 mb-4">
                    <a href="#"><img src="../assets/img/service-1.png" alt="Home Loan"
                            class="img-fluid zoom-on-hover text-center"></a>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="no-underline">
                            <p class="mt-3">DREAM <br>Home Loan</p>
                        </a>
                        <a href="#" class="no-underline"> <img src="../assets/img/arrow_right.svg" alt="" height="35px"
                                class="mt-4">
                        </a>
                    </div>
                </div>
                <div class="col-7 col-md-2 mb-4">
                    <a href="#"><img src="../assets/img/service-2.png" alt="Auto Loan"
                            class="img-fluid zoom-on-hover text-center"></a>
                    <div class="d-flex justify-content-between ">
                        <a href="#" class="no-underline">
                            <p class="mt-3">Car <br>Car Loan</p>
                        </a>
                        <a href="#" class="no-underline"> <img src="../assets/img/arrow_right.svg" alt="" height="35px"
                                class="mt-4">
                        </a>
                    </div>
                </div>

                <div class="col-7 col-md-2 mb-4">
                    <a href="#"><img src="../assets/img/service-3.png" alt="Education Loan"
                            class="img-fluid zoom-on-hover text-center"></a>
                    <div class="d-flex justify-content-between ">
                        <a href="#" class="no-underline">
                            <p class="mt-3">Educationl <br>Education Loan</p>
                        </a>
                        <a href="#" class="no-underline"> <img src="../assets/img/arrow_right.svg" alt="" height="35px"
                                class="mt-4">
                        </a>
                    </div>
                </div>
                <div class="col-7 col-md-2 mb-4">
                    <a href="#"><img src="../assets/img/service-4.png" alt="Personal Loan"
                            class="img-fluid zoom-on-hover text-center"></a>
                    <div class="d-flex justify-content-between ">
                        <a href="#" class="no-underline">
                            <p class="mt-3">Loan<br>Personal Loan</p>
                        </a>
                        <a href="#" class="no-underline"> <img src="../assets/img/arrow_right.svg" alt="" height="35px"
                                class="mt-4">
                        </a>
                    </div>
                </div>

                <div class="col-7 col-md-2 mb-4">
                    <a href="#"><img src="../assets/img/service-5.png" alt="SME Loan"
                            class="img-fluid zoom-on-hover text-center"></a>
                    <div class="d-flex justify-content-between ">
                        <a href="#" class="no-underline">
                            <p class="mt-3">Assets <br>Gold Loan</p>
                        </a>
                        <a href="#" class="no-underline"> <img src="../assets/img/arrow_right.svg" alt="" height="35px"
                                class="mt-4">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="gap"></div>



    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center best-subtitle">Why Choose Dhiraj Bank</div>
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Experience the Best</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-lg-2 text-center mb-3">
                    <img src="../assets/img/register-interest.png" height="99px" width="99px" alt="Competitive Interest Rates"
                        class="img-fluid mb-3">
                    <h3 class="best-title">Competitive Interest Rates</h3>
                    <p class="best-info">We offer interest rates that are among the best in the industry, ensuring that your money grows with us.</p>
                </div>
                <div class="col-lg-2 text-center mb-3">
                    <img src="../assets/img/register-saving.png" height="99px" width="99px" alt="Easy Savings"
                        class="img-fluid mb-3">
                    <h3 class="best-title">Easy Savings</h3>
                    <p class="best-info">Our savings accounts are designed to make it easy to save money, with low minimum balances and no hidden fees.</p>
                </div>
                <div class="col-lg-2 text-center mb-3">
                    <img src="../assets/img/register-digital.png" height="95px" width="95px" alt="Advanced Digital Services"
                        class="img-fluid mb-3">
                    <h3 class="best-title">Advanced Digital Services</h3>
                    <p class="best-info">Our digital services are designed to make banking easy and convenient, with features like online banking, mobile banking, and e-statements.</p>
                </div>
                <div class="col-lg-2 text-center mb-3">
                    <img src="../assets/img/register-atm.png" height="99px" width="99px" alt="Secure Deposit Lockers"
                        class="img-fluid mb-3">
                    <h3 class="best-title">Secure Deposit Lockers</h3>
                    <p class="best-info">Our deposit lockers are designed to keep your valuables safe and secure, with advanced security features and 24/7 access.</p>
                </div>
                <div class="col-lg-2 text-center mb-3">
                    <img src="../assets/img/register-card.png" height="101px" width="101px" alt="Credit/Debit Cards"
                        class="img-fluid mb-3">
                    <h3 class="best-title">Credit/Debit Cards</h3>
                    <p class="best-info">Our credit and debit cards offer a range of benefits, including rewards programs, purchase protection, and travel insurance.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="gap"></div>


    <section id="beast">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="beast-title mb-3">Budget Beasts, Not <br> Budget Bums</h2>
                    <p class="bease-subtitle mb-5">Unleash Your Inner Financial Ninja with Dhiraj Bank's Killer Tools
                    </p>
                    <div class="row">
                        <div class="col-md-4 mb-5 text-center">
                            <img src="../assets/img/budget-coin.png" height="58px" width="62px" alt="Interest Rate"
                                class="img-fluid">
                            <h3 class="image-title beast-info mt-3">Your money grooves with our amazing interest rates.
                            </h3>
                        </div>
                        <div class="col-md-4 mb-5 text-center">
                            <img src="../assets/img/budget-saving.png" height="50px" width="58px" alt="Savings"
                                class="img-fluid">
                            <h3 class="image-title beast-info mt-3">We make finance so lively, your savings might break
                                into a jig.</h3>
                        </div>
                        <div class="col-md-4 mb-5 text-center">
                            <img src="../assets/img/budget-security.png" height="50px" width="55px" alt="Security"
                                class="img-fluid">
                            <h3 class="image-title beast-info mt-3">Our security is tighter than your grandma's salsa
                                moves.</h3>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-lg"
                                        id="icon-awesome"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-lg"
                                        id="icon-awesome"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-lg"
                                        id="icon-awesome"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-lg"
                                        id="icon-awesome"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube fa-lg"
                                        id="icon-awesome"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="../assets/img/budget-block.png" alt="Image 4" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <div class="gap"></div>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h2 class="font-weight-bold section-title">Our best results <br> for the year</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6 text-center">
                    <p class="text-center section-subtitle">
                        We've got all the boring essentials (checking, savings, loans, yawn)
                        but served with a side of meme-tastic names and enough pop
                        culture references to make your inner nerd do a fist pump.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="row col-lg-9 text-center">
                    <div class="col-lg-3 text-center mb-4 text-rotate">
                        <h3 class="budget-title text-warning ">80.6 bn</h3>
                        <p class="budget-info">Loan Portfolio</p>
                    </div>
                    <div class="col-lg-3 text-center mb-4">
                        <h3 class="budget-title">0.95%</h3>
                        <p class="budget-info">Classified <br>Loan Portfolio</p>
                    </div>
                    <div class="col-lg-3 text-center mb-4">
                        <h3 class="budget-title">388.5%</h3>
                        <p class="budget-info">Classified <br> Loan Coverage</p>
                    </div>
                    <div class="col-lg-3 text-center mb-4">
                        <h3 class="budget-title">50.4 bn</h3>
                        <p class="budget-info">Deposit</p>
                    </div>
                    <div class="col-lg-3 text-center mb-4">
                        <h3 class="budget-title">6.1 bn</h3>
                        <p class="budget-info">Shareholders <br> Equity</p>
                    </div>
                    <div class="col-lg-3 text-center mb-4">
                        <h3 class="budget-title">18.51%</h3>
                        <p class="budget-info">Capiital <br> Adequacy Ratio</p>
                    </div>
                    <div class="col-lg-3 text-center mb-4">
                        <h3 class="budget-title">8.5 bn</h3>
                        <p class="budget-info">Market <br> Capitalization</p>
                    </div>
                    <div class="col-lg-3 text-center mb-4">
                        <h3 class="budget-title">AAA</h3>
                        <p class="budget-info">Credit Rating</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div style="height: 100px;"></div>

    <footer id="contact">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col-lg-3">
                    <h5>About</h5>
                    <p>DHIRAJ Bank was founded by the one and only Dhiraj Kuttikar</p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-lg"
                                    id="icon-awesome"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-lg"
                                    id="icon-awesome"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-lg"
                                    id="icon-awesome"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-lg"
                                    id="icon-awesome"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Our Services</h5>
                    <ul>
                        <li><a href="#">Home Loans</a></li>
                        <li><a href="#">Auto Loans</a></li>
                        <li><a href="#">Personal Loans</a></li>
                        <li><a href="#">Education Loans</a></li>
                        <li><a href="#">SME Loans</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="#">Branch Network</a></li>
                        <li><a href="#">ATM Locations</a></li>
                        <li><a href="#">EMI Calculator</a></li>
                        <li><a href="#">Service Charges</a></li>
                        <li><a href="#">Financial Reports</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">Frequently Asked Questions</a></li>
                        <li><a href="#">Career Opportunities</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Document Verification</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="../assets/js/bootstrap.min.js"></script> <!-- coded by Dhiraj -->
</body>

</html>


