<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GiftSerwis - Rejestracja EN</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/topbar.php"; ?> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
        <?php include "./components/register/hero_en_client.php"; ?>
            <?php include "./components/register/register_en_content.php"; ?> 
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>

        <!-- Country Modal -->
        <div class="modal fade country-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="title">
                            <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane<span>Sprawdź, do którego oddziału się zgłosić.</span></p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Znajdź oddział, który obsługuje Twój kraj.</h3>
                        <div class="table-wrapper">
                            <div class="table-wrapper__col">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Country</th>
                                            <th>Branch</th>
                                        </tr>
                                        <tr>
                                            <td>Lithuania</td>
                                            <td rowspan="5">
                                                <strong>GiftSerwis POLSKA</strong>
                                                <p><a href="www.GiftSerwis.pl">www.GiftSerwis.pl</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:GiftSerwis@GiftSerwis.pl">GiftSerwis@GiftSerwis.pl</a></p>
                                                <p>Phone: <a class="gtm-phone" href="tel:+48 71 330 54 60">+48 71 330 54 60</a></p>
                                                <br>
                                                <p>GiftSerwis Polska Sp. z o.o. Byków,<br> ul. Wrocławska 41<br> 55-095 Mirków k/Wrocławia</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Latvia</td>
                                        </tr>
                                        <tr>
                                            <td>Estonia</td>
                                        </tr>
                                        <tr>
                                            <td>Belarus</td>
                                        </tr>
                                        <tr>
                                            <td>Ukraine</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Country</th>
                                            <th>Branch</th>
                                        </tr>
                                        <tr>
                                            <td>Slovenia</td>
                                            <td rowspan="7">
                                                <strong>GiftSerwis HUNGARY</strong>
                                                <p><a href="www.GiftSerwis.hu">www.GiftSerwis.hu</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:GiftSerwis@GiftSerwis.hu">GiftSerwis@GiftSerwis.hu</a></p>
                                                <p>Phone: <a class="gtm-phone" href="tel:+36 1 272 2720">+36 1 272 2720</a></p>
                                                <br>
                                                <p>GiftSerwis Kft.<br> 1184 Budapest, Fáy u. 2.<br> Hungary</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Croatia</td>
                                        </tr>
                                        <tr>
                                            <td>Hungary</td>
                                        </tr>
                                        <tr>
                                            <td>Romania</td>
                                        </tr>
                                        <tr>
                                            <td>Slovakia</td>
                                        </tr>
                                        <tr>
                                            <td>Moldova</td>
                                        </tr>
                                        <tr>
                                            <td>Serbia</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-wrapper__col">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Country</th>
                                            <th>Branch</th>
                                        </tr>
                                        <tr class="darkgrey-line">
                                            <td>Germany</td>
                                            <td rowspan="1">
                                                <strong>GiftSerwis GERMANY</strong>
                                                <p><a href="www.GiftSerwis.de">www.GiftSerwis.de</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:info@GiftSerwis.de">info@GiftSerwis.de</a></p>
                                                <p>Phone: <a class="gtm-phone" href="tel:+49 (0) 911 9 81 81 33">+49 (0) 911 9 81 81 33</a></p>
                                                <p>Fax: <a class="gtm-phone" href="tel:+49 (0) 911 9 81 81 340">+49 (0) 911 9 81 81 340</a></p>
                                                <br>
                                                <p>GiftSerwis Werbeartikel oHG<br> Thomas-Mann-Str. 60<br>90471 Nürnberg<br>Deutschland</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>DESK 4</strong></td>
                                            <td rowspan="7">
                                                <p>Phone: <a class="gtm-phone" href="tel:+49 (0) 911 981 81 458">+49 (0) 911 981 81 458</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:desk4@GiftSerwis.de">desk4@GiftSerwis.de</a></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Great Britain</td>
                                        </tr>
                                        <tr>
                                            <td>Ireland</td>
                                        </tr>
                                        <tr>
                                            <td>Spain</td>
                                        </tr>
                                        <tr>
                                            <td>Portugal</td>
                                        </tr>
                                        <tr>
                                            <td>Italy</td>
                                        </tr>
                                        <tr class="darkgrey-line">
                                            <td>South Africa</td>
                                        </tr>
                                        <tr>
                                            <td><strong>DESK 3</strong></td>
                                            <td rowspan="2">
                                                <p>Phone: <a class="gtm-phone" href="tel:+49 (0) 911 981 81 450">+49 (0) 911 981 81 450</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:desk3@GiftSerwis.de">desk3@GiftSerwis.de</a></p>
                                            </td>
                                        </tr>
                                        <tr class="darkgrey-line">
                                            <td>Austria</td>
                                        </tr>
                                        <tr>
                                            <td><strong>DESK 1</strong></td>
                                            <td rowspan="2">
                                                <p>Phone: <a class="gtm-phone" href="tel:+49 (0) 911 981 81 430">+49 (0) 911 981 81 430</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:commercial@GiftSerwis.de">commercial@GiftSerwis.de</a></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>France</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-wrapper__col">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Country</th>
                                            <th>Branch</th>
                                        </tr>
                                        <tr>
                                            <td>Netherlands</td>
                                            <td rowspan="3">
                                                <strong>GiftSerwis NORVALD</strong>
                                                <p>Phone: <a class="gtm-phone" href="tel:+31 26 31 93 959">+31 26 31 93 959</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:info@norvald.nl">info@norvald.nl</a></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Belgium</td>
                                        </tr>
                                        <tr>
                                            <td>Luxembourg</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Country</th>
                                            <th>Branch</th>
                                        </tr>
                                        <tr>
                                            <td>Sweden</td>
                                            <td rowspan="3">
                                                <strong>GiftSerwis NORDICA</strong>
                                                <p>Phone: <a class="gtm-phone" href="tel:+46 241 611 90">+46 241 611 90</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:info@GiftSerwis.se">info@GiftSerwis.se</a></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Norway</td>
                                        </tr>
                                        <tr>
                                            <td>Finland</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Country</th>
                                            <th>Branch</th>
                                        </tr>
                                        <tr>
                                            <td>Other countries</td>
                                            <td rowspan="3">
                                                <strong>GiftSerwis NORDICA</strong>
                                                <p>Phone: <a class="gtm-phone" href="tel:+49 (0) 911 981 81 458">+49 (0) 911 981 81 458</a></p>
                                                <p>E-mail: <a class="gtm-mail" href="mailto:desk4@GiftSerwis.de">desk4@GiftSerwis.de</a></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="color-btn" data-bs-dismiss="modal">Zamknij <img src="./assets/icons/common/buttons/button_white_arrow.svg" alt="arrow icon" width="18" height="18"></button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.querySelector('#topbar .container .topbar-links a:nth-of-type(7)').classList.add('active')
        </script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>