<?php
    include('SnorPdf.php');
    $currentDate = Date(DATE_W3C);
    if ($_POST != NULL) {
        $pdf = new SnorPdf();
        $pdf->setTitle('Inschrijvingsformulier 1e graad: schooljaar 2016-2017');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,10,'Naam leraar: ');
        $pdf->Cell(0,10,$_POST['leraar_naam']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Datum: ');
        $pdf->Cell(0,10,$_POST['registratie_datum']);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Studie keuze: ');
        if (isset($_POST['studie_keuze'])) {
            switch($_POST['studie_keuze']) {
            case '1la_latijn':  $pdf->Cell(0,10,'1ste leerjaar latijn');
                                break;
            case '1la_technische':  $pdf->Cell(0,10,'1ste leerjaar technische');
                                break;
            case '1la_moderne':  $pdf->Cell(0,10,'1ste leerjaar moderne');
                                break;
            case '1la_moderne_stem':  $pdf->Cell(0,10,'1ste leerjaar moderne-STEM');
                                break;
            case '1la_moderne_taal':  $pdf->Cell(0,10,'1ste leerjaar moderne-taal/expressie');
                                break;
            case '1lb':         $pdf->Cell(0,10,'1ste leerjaar B');
                                break;
            case '2l_latijn':  $pdf->Cell(0,10,'2ste leerjaar latijn');
                                break;
            case '2l_moderne_wetenschappen':  $pdf->Cell(0,10,'2ste leerjaar moderne wetenschappen');
                                break;
            case '2l_techniek_wetenschappen':  $pdf->Cell(0,10,'1ste leerjaar techniek wetenschappen');
                                break;
            case '2l_sociale_technische_vorming':  $pdf->Cell(0,10,'1ste leerjaar sociale en technische vorming');
                                break;
            case 'bvl':  $pdf->Cell(0,10,'BVL');
                                break;
            }
        }
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0,10,'Gegevens leerling');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Naam: ');
        $pdf->Cell(0,10,$_POST['student_naam']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Voornaam: ');
        $pdf->Cell(0,10,$_POST['student_voornaam']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Roepnaam: ');
        $pdf->Cell(0,10,$_POST['student_roepnaam']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Geboorteplaats: ');
        $pdf->Cell(0,10,$_POST['student_geboorteplaats']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Officieel adres: ');
        $pdf->Cell(0,10,$_POST['student_adres']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Gsm leerling: ');
        $pdf->Cell(0,10,$_POST['student_gsm']);
        $pdf->Ln();
        $pdf->Cell(40,10,'E-mail leerling: ');
        $pdf->Cell(0,10,$_POST['student_email']);
        $pdf->Ln();
        $pdf->Cell(40,10,'nationaliteit: ');
        $pdf->Cell(0,10,$_POST['student_nationaliteit']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Geslacht: ');
        if (isset($_POST['student_geslacht'])) {
            $pdf->Cell(0,10,$_POST['student_geslacht']);
        }
        $pdf->Ln();
        $pdf->Cell(40,10,'Geboortedatum: ');
        $pdf->Cell(0,10,$_POST['student_geboortedatum']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Rijksregister: ');
        $pdf->Cell(0,10,$_POST['student_rijksregister']);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0,10,'Gegevens moeder');
        $pdf->Ln();
        $pdf->Cell(40,10,'Naam: ');
        $pdf->Cell(0,10,$_POST['moeder_naam']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Voornaam: ');
        $pdf->Cell(0,10,$_POST['moeder_voornaam']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Officieel adres: ');
        $pdf->Cell(0,10,$_POST['moeder_adres']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Nationaliteit: ');
        $pdf->Cell(0,10,$_POST['moeder_nationaliteit']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Burgerlijke staat: ');
        $pdf->Cell(0,10,$_POST['moeder_burgerlijke_staat']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Beroep: ');
        $pdf->Cell(0,10,$_POST['moeder_beroep']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Gsm: ');
        $pdf->Cell(0,10,$_POST['moeder_gsm']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Thuistelefoon: ');
        $pdf->Cell(0,10,$_POST['moeder_telefoon']);
        $pdf->Ln();
        $pdf->Cell(40,10,'E-mail: ');
        $pdf->Cell(0,10,$_POST['moeder_email']);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0,10,'Gegevens vader');
        $pdf->Ln();
        $pdf->Cell(40,10,'Naam: ');
        $pdf->Cell(0,10,$_POST['vader_naam']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Voornaam: ');
        $pdf->Cell(0,10,$_POST['vader_voornaam']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Officieel adres: ');
        $pdf->Cell(0,10,$_POST['vader_adres']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Nationaliteit: ');
        $pdf->Cell(0,10,$_POST['vader_nationaliteit']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Burgerlijke staat: ');
        $pdf->Cell(0,10,$_POST['vader_burgerlijke_staat']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Beroep: ');
        $pdf->Cell(0,10,$_POST['vader_beroep']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Gsm: ');
        $pdf->Cell(0,10,$_POST['vader_gsm']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Thuistelefoon: ');
        $pdf->Cell(0,10,$_POST['vader_telefoon']);
        $pdf->Ln();
        $pdf->Cell(40,10,'E-mail: ');
        $pdf->Cell(0,10,$_POST['vader_email']);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Fiscaal ten laste: ');
        $pdf->Ln();
        $pdf->Cell(65,10,'Kind is fiscaal ten laste van: ');
        if (isset($_POST['fiscale_laste'])) {
            if ($_POST['fiscale_laste'] == 'andere') {
                $pdf->Cell(0,10,$_POST['fiscale_laste_andere']);
            }
            else
            {
                $pdf->Cell(0,10,$_POST['fiscale_laste']);
            }
        }
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Aantal kinderen in Sint-NorbertusInstituut Duffel: ');
        $pdf->Ln();
        $pdf->Ln();
        $counter = 0;
        if (!empty($_POST['kind1_naam'])) {
            $pdf->Cell(15,10,'Kind 1');
            $pdf->Ln();
            $pdf->Cell(15,10,'Naam: ');
            $pdf->Cell(25,10,$_POST['kind1_naam']);
            $pdf->Ln();
            $pdf->Cell(24,10,'Voornaam: ');
            $pdf->Cell(25,10,$_POST['kind1_voornaam']);
            $pdf->Ln();
            $pdf->Cell(29,10,'Geboortejaar: ');
            $pdf->Cell(23,10,$_POST['kind1_geboortejaar']);
            $pdf->Ln();
            $pdf->Cell(21,10,'Geslacht: ');
            if (isset($_POST['kind1_geslacht'])) {
                if ($_POST['kind1_geslacht']  == 'man') {
                    $pdf->Cell(0,10,$_POST['kind1_geslacht']);
                }
                else {
                    $pdf->Cell(0,10,$_POST['kind1_geslacht']);
                }
            }
            $counter++;
        }
        if (!empty($_POST['kind2_naam'])) {
            $pdf->Cell(15,10,'Kind 2');
            $pdf->Ln();
            $pdf->Cell(15,10,'Naam: ');
            $pdf->Cell(25,10,$_POST['kind2_naam']);
            $pdf->Ln();
            $pdf->Cell(24,10,'Voornaam: ');
            $pdf->Cell(25,10,$_POST['kind2_voornaam']);
            $pdf->Ln();
            $pdf->Cell(29,10,'Geboortejaar: ');
            $pdf->Cell(23,10,$_POST['kind2_geboortejaar']);
            $pdf->Ln();
            $pdf->Cell(21,10,'Geslacht: ');
            if (isset($_POST['kind2_geslacht'])) {
                if ($_POST['kind2_geslacht']  == 'man') {
                    $pdf->Cell(0,10,$_POST['kind2_geslacht']);
                }
                else {
                    $pdf->Cell(0,10,$_POST['kind2_geslacht']);
                }
            }
            $counter++;
        }
        if (!empty($_POST['kind3_naam'])) {
            $pdf->Cell(15,10,'Kind 3');
            $pdf->Ln();
            $pdf->Cell(15,10,'Naam: ');
            $pdf->Cell(25,10,$_POST['kind3_naam']);
            $pdf->Ln();
            $pdf->Cell(24,10,'Voornaam: ');
            $pdf->Cell(25,10,$_POST['kind3_voornaam']);
            $pdf->Ln();
            $pdf->Cell(29,10,'Geboortejaar: ');
            $pdf->Cell(23,10,$_POST['kind3_geboortejaar']);
            $pdf->Ln();
            $pdf->Cell(21,10,'Geslacht: ');
            if (isset($_POST['kind3_geslacht'])) {
                if ($_POST['kind3_geslacht']  == 'man') {
                    $pdf->Cell(0,10,$_POST['kind3_geslacht']);
                }
                else {
                    $pdf->Cell(0,10,$_POST['kind3_geslacht']);
                }
            }
            $counter++;
        }
        if ($counter < 1) {
            $pdf->Cell(15,10,'Geen');
        }
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Schoolloopbaan');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Vorig schooljaar: 2015-2016');
        $pdf->Ln();
        $pdf->Cell(40,10,'Basisonderwijs:');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'School + adres: ');
        $pdf->Cell(0,10,$_POST['student_basisonderwijs_school']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Leerjaar: ');
        $pdf->Cell(0,10,$_POST['student_basisonderwijs_leerjaar']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Leertotaal: ');
        $pdf->Cell(0,10,$_POST['student_basisonderwijs_jaartotaal']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Resultaat taal: ');
        $pdf->Cell(0,10,$_POST['student_basisonderwijs_resultaat_taal']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Resultaat rekenen: ');
        $pdf->Cell(0,10,$_POST['student_basisonderwijs_resultaat_rekenen']);
        $pdf->Ln();
        $pdf->Cell(62,10,'Getuigschrift basisonderwijs: ');
        $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_basisonderwijs_getuigschrift'));
        $pdf->Ln();
        $pdf->Cell(65,10,'attest buitengewoon onderwijs: ');
        switch ($pdf->getRadioButtonResult('student_basisonderwijs_attest_buitengewoon_onderwijs')) {
            case 'Ja':      $pdf->Cell(8,10,'Ja');
                            $pdf->Cell(8,10,'type: ' . $_POST['student_basisonderwijs_attest_buitengewoon_onderwijs_type']);
                            break;
            case 'Neen':    $pdf->Cell(8,10,'Neen');
                            break;
            default:        $pdf->Cell(8,10,$pdf->getRadioButtonResult('student_basisonderwijs_attest_buitengewoon_onderwijs'));
                            break;
        }
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Secundair onderwijs:');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(50,10,'School + adres: ');
        $pdf->Cell(0,10,$_POST['student_secundair_school']);
        $pdf->Ln();
        $pdf->Cell(60,10,'Leerjaar + richting: ');
        $pdf->Cell(0,10,$_POST['student_secundair_leerjaar_richting']);
        $pdf->Ln();
        $pdf->Cell(15,10,'Attest: ');
        $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_secundair_attest'));
        $pdf->Ln();
        switch ($pdf->getRadioButtonResult('student_secundair_attest')) {
            case 'B':   $pdf->Cell(47,10,'B-attest, clausulering: ');
                        $pdf->Cell(0,10,$_POST['student_secundair_attest_b']);
                        break;
            case 'C':   $pdf->Cell(90,10,'C-attest, studierichting en attest 2014-2015: ');
                        $pdf->Cell(0,10,$_POST['student_secundair_attest_c']);
                        break;
            default:    break;
        }
        $pdf->Ln();
        $pdf->Cell(40,10,'Huidig schooljaar:');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(50,10,'School + adres: ');
        $pdf->Cell(0,10,$_POST['student_huidig_schooljaar_school']);
        $pdf->Ln();
        $pdf->Cell(60,10,'Leerjaar + richting: ');
        $pdf->Cell(0,10,$_POST['student_huidig_schooljaar_leerjaar_richting']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Studieadvies');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Vanwege de school: ');
        $pdf->Cell(0,10,$_POST['student_studieadvies_school']);
        $pdf->Ln();
        $pdf->Cell(32,10,'Vanwege CLB: ');
        $pdf->Cell(0,10,$_POST['student_studieadvies_clb']);
        $pdf->Ln();
        $pdf->Cell(40,10,'Wensen ivm klasindeling');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(22,10,'Graag bij: ');
        $pdf->Cell(0,10,$_POST['student_klasindeling_wensen_1']);
        $pdf->Ln();
        $pdf->Cell(8,10,'Of: ');
        $pdf->Cell(0,10,$_POST['student_klasindeling_wensen_2']);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,10,'Intake leren en persoonlijke gegevens');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(70,10,'Hoe leerde u onze school kennen: ');
        if($pdf->getRadioButtonResult('student_intake_persoonlijk_ontdekking') == 'andere') {
            $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_ontdekking_andere']);
        }
        else {
            $pdf->Cell(20,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_ontdekking'));
        }
        $pdf->Ln();
        $pdf->Cell(60,10,'Waarom kies je voor onze school: ');
        $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_waarom_school']);
        $pdf->Ln();
        $pdf->Cell(60,10,'Waarom kies je voor deze studierichting: ');
        $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_waarom_richting']);
        $pdf->Ln();
        $pdf->Cell(60,10,'Wat verwacht je van de school: ');
        $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_verwachtingen_ouders']);
        $pdf->Ln();
        $pdf->Cell(60,10,'Wat verwacht je zoon/dochter van de school: ');
        $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_verwachtingen_kind']);
        $pdf->Ln(15);
        $pdf->Cell(60,10,'Leer en ontwikkelingsstoornissen');
        $pdf->Ln(15);
        $pdf->MultiCell(180,5,'Zijn er eventueel leer- of ontwikkelingsstoornissen met attest van een multidisciplinair team of CLB? Zo ja, welke:');
        $pdf->Ln(2);
        if($pdf->getRadioButtonResult('student_intake_persoonlijk_ontwikkelingsstoornis') == 'andere') {
            $pdf->Cell(40,5,$_POST['student_intake_persoonlijk_ontwikkelingsstoornis_andere']);
        }
        else {
            $pdf->Cell(40,5,$pdf->getRadioButtonResult('student_intake_persoonlijk_ontwikkelingsstoornis'));
        }
        $pdf->Ln(12);
        $pdf->Cell(120,5,'Welke ondersteuning kreeg je vorig schooljaar waar je baat bij had: ');
        $pdf->Ln(7);
        $pdf->Cell(45,5,$_POST['student_intake_persoonlijk_ondersteuning']);
        $pdf->Ln(10);
        $pdf->Cell(70,10,'Mocht je hulpmiddelen gebruiken: ');
        $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_hulpmiddelen'));
        if ($pdf->getRadioButtonResult('student_intake_persoonlijk_hulpmiddelen') == 'Ja') {
            $pdf->Ln();
            $pdf->Cell(30,10,'Zo ja, welke: ');
            $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_hulpmiddelen_welke']);
        }
        $pdf->Ln(15);
        $pdf->Cell(40,10,'Gon-begeleiding');
        $pdf->Ln(15);
        $pdf->Cell(82,10,'Wens je GON-begeleiding op te nemen: ');
        $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gon_begeleiding'));
        if($pdf->getRadioButtonResult('student_intake_persoonlijk_gon_begeleiding') == 'ja') {
            $pdf->Ln();
            $pdf->Cell(40,10,'GON begeleiding voor ontwikkelingsstoornis: ');
            if($pdf->getRadioButtonResult('student_intake_persoonlijk_gon_ontwikkelingsstoornis') == 'andere') {
                $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_gon_ontwikkelingsstoornis_andere']);
            }
            else {
                $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_gon_ontwikkelingsstoornis']);
            }
            $pdf->Ln();
            $pdf->Cell(40,10,'Aanvraag is reeds bij een CLB gebeurd: ');
            $pdf->Cell(0,10,$_POST['student_intake_persoonlijk_gon_aanvraag']);
        }
        $pdf->Ln();
        $pdf->MultiCell(180,5,'Voor ASS, STOS (taal- en ontwikkelingsstoornissen) en gehoorproblemen werken we steeds samen met KOCA Emmaus. De GON-begeleider zal begin september de ouders contacteren voor een overleg.');
        $pdf->Ln(10);
        $pdf->Cell(40,10,'Gezinssituatie');
        $pdf->Ln(15);
        $pdf->Cell(30,10,'Inwonend bij: ');
        switch($pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie')) {
            case 'pleeggezin':  $pdf->Ln();
                                $pdf->Cell(25,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie') . ': ');
                                $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_pleeggezin'));
                                $pdf->Ln();
                                $pdf->Cell(50,10,'adres: ' . $pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_pleeggezin_adres'));
                                break;
            case 'instelling':  $pdf->Ln();
                                $pdf->Cell(20,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie') . ': ');
                                $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_instelling'));
                                $pdf->Ln();
                                $pdf->Cell(50,10,'adres: ' . $pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_instelling_adres'));
                                break;
            case 'andere':      $pdf->Ln();
                                $pdf->Cell(25,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie') . ': ');
                                $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_andere'));
                                break;
            default:            $pdf->Cell(25,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie'));
        }
        $pdf->Ln();
        if(isset($_POST['student_intake_persoonlijk_gezinssituatie_gescheiden_ouders_communicatie'])) {
            $pdf->Cell(110,10,'Gescheiden ouders: school voert communicatie met ');
            $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_gescheiden_ouders_communicatie'));
            $pdf->Ln();
            $pdf->Cell(46,10,'Wenst u 2 rapporten: ');
            $pdf->Cell(0,10,'Ja, ' . $pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_rapporten'));
        }
        $pdf->Ln(10);
        $pdf->Cell(70,10,'Contractverbod met andere ouder: ');
        $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_contactverbod'));
        $pdf->Ln(7);
        $pdf->Cell(140,5,'Indien ja, gelieve een bewijs te bezorgen aan pedagogische directie.');
        $pdf->Ln(10);
        $pdf->Cell(130,10,'Gesprek gewenst omtrent persoonlijke of familiale problemen: ');
        $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_gesprek_familiale_problemen'));
        $pdf->Ln();
        $pdf->Cell(60,10,'Was er vroeger begeleiding: ');
        if($pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_begeleiding') == 'andere') {
            $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_begeleiding') . ': ' . $_POST['student_intake_persoonlijk_gezinssituatie_begeleiding_andere']);
        }
        else {
            $pdf->Cell(0,10,$pdf->getRadioButtonResult('student_intake_persoonlijk_gezinssituatie_begeleiding'));
        }
        $pdf->Ln();
        $pdf->Output();
    }
    else {

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="" method="post">
              <fieldset>
                <legend>Registratie informatie</legend>
                <label>Naam Leraar: </label>
                <input type="text" name="leraar_naam" placeholder="Voornaam + Achternaam"><br/>
                <label>Datum: </label>
                <input type="text" name="registratie_datum" value="<?php echo $currentDate; ?>"><br/><br/>
              </fieldset>
            
            <fieldset>
                <legend>Studiekeuze</legend>
                    <fieldset>
                        <legend>1ste leerjaar A</legend>
                        <input type="radio" name="studie_keuze" value="1la_latijn">
                        <label>Optie latijn</label>
                        </br>
                        <input type="radio" name="studie_keuze" value="1la_technische">
                        <label>Optie technische</label>
                        </br>
                        <input type="radio" name="studie_keuze" value="1la_moderne">
                        <label>Optie moderne</label>
                        </br>
                        <input type="radio" name="studie_keuze" value="1la_moderne_stem">
                        <label>Optie moderne-STEM</label>
                         </br>
                        <input type="radio" name="studie_keuze" value="1la_moderne_taal">
                        <label>Optie moderne-taal/expressie</label>
                        </br>
                    </fieldset>
                    <fieldset>
                        <legend>1ste leerjaar B</legend>
                        <input type="radio" name="studie_keuze" value="1lb">
                        <label>1ste leerjaar B</label>
                    </fieldset>
                    <fieldset>
                        <legend>2ste leerjaar A</legend>
                        <input type="radio" name="studie_keuze" value="2l_latijn">
                        <label>Latijn</label>
                        <br/>
                        <input type="radio" name="studie_keuze" value="2l_moderne_wetenschappen">
                        <label>Moderne wetenschappen</label>
                        </br>
                        <input type="radio" name="studie_keuze" value="2l_techniek_wetenschappen">
                        <label>Techniek wetenschappen</label>
                        </br>
                        <input type="radio" name="studie_keuze" value="2l_sociale_technische_vorming">
                        <label>Sociale en technische vorming</label>
                    </fieldset>
                    <fieldset>
                        <legend>2ste leerjaar B</legend>
                        <input type="radio" name="studie_keuze" value="bvl">
                        <label>BVL</label>
                    </fieldset>
            </fieldset>

            <fieldset>
                <legend>Gegevens leerling</legend>
                <label>Naam: </label>
                <input type="text" name="student_naam" placeholder="Achternaam"><br/>
                <label>voornaam: </label>
                <input type="text" name="student_voornaam" placeholder="Voornaam"><br/>
                <label>Roepnaam: </label>
                <input type="text" name="student_roepnaam" placeholder="Roepnaam"><br/>
                <label>Geboorteplaats: </label>
                <input type="text" name="student_geboorteplaats" placeholder="(Voor buitenland: Stad+land)"><br/>
                <label>Officieel adres: </label>
                <input type="text" name="student_adres" placeholder="adres"><br/>
                <label>GSM leerling: </label>
                <input type="text" name="student_gsm" placeholder="bv: 048651237"><br/>
                <label>E-mail leerling: </label>
                <input type="text" name="student_email" placeholder="bv: janneke@outlook.be"><br/>
                <label>Nationaliteit: </label>
                <input type="text" name="student_nationaliteit" placeholder="bv: Belg"><br/>
                <fieldset>
                    <legend>Geslacht</legend>
                    <input type="radio" name="student_geslacht" value="man">
                    <label>Man</label>
                    <input type="radio" name="student_geslacht" value="vrouw">
                    <label>Vrouw</label>
                </fieldset>
                <label>Geboortedatum: </label>
                <input type="text" name="student_geboortedatum" placeholder="bv: 31/07/2004"><br/>
                <label>Rijksregister: </label>
                <input type="text" name="student_rijksregister" placeholder="rijksregisternummer">
            </fieldset>

            <fieldset>
                <legend>Gegevens moeder</legend>
                <label>Naam: </label>
                <input type="text" name="moeder_naam" placeholder="Achternaam"><br/>
                <label>voornaam: </label>
                <input type="text" name="moeder_voornaam" placeholder="Voornaam"><br/>
                <label>Officieel adres: </label>
                <input type="text" name="moeder_adres" placeholder="bv: Nonnenstraat 23, 2800 Mechelen"><br/>
                <label>Nationaliteit: </label>
                <input type="text" name="moeder_nationaliteit" placeholder="bv: Belg"><br/>
                <label>Burgerlijke staat: </label>
                <input type="text" name="moeder_burgerlijke_staat" placeholder=""><br/>
                <label>Beroep: </label>
                <input type="text" name="moeder_beroep" placeholder=""><br/>
                <label>GSM: </label>
                <input type="text" name="moeder_gsm" placeholder="bv: 048651237"><br/>
                <label>Thuistelefoon: </label>
                <input type="text" name="moeder_telefoon" placeholder="bv: 023056066"><br/>
                <label>E-mail: </label>
                <input type="text" name="moeder_email" placeholder="bv: janneke@outlook.be"><br/>
            </fieldset>

            <fieldset>
                <legend>Gegevens vader</legend>
                <label>Naam: </label>
                <input type="text" name="vader_naam" placeholder="Achternaam"><br/>
                <label>voornaam: </label>
                <input type="text" name="vader_voornaam" placeholder="Voornaam"><br/>
                <label>Officieel adres: </label>
                <input type="text" name="vader_adres" placeholder="bv: Nonnenstraat 23, 2800 Mechelen"><br/>
                <label>Nationaliteit: </label>
                <input type="text" name="vader_nationaliteit" placeholder="bv: Belg"><br/>
                <label>Burgerlijke staat: </label>
                <input type="text" name="vader_burgerlijke_staat" placeholder=""><br/>
                <label>Beroep: </label>
                <input type="text" name="vader_beroep" placeholder=""><br/>
                <label>GSM: </label>
                <input type="text" name="vader_gsm" placeholder="bv: 048651237"><br/>
                <label>Thuistelefoon: </label>
                <input type="text" name="vader_telefoon" placeholder="bv: 023056066"><br/>
                <label>E-mail: </label>
                <input type="text" name="vader_email" placeholder="bv: janneke@outlook.be"><br/>
            </fieldset>

            <fieldset>
                <legend>Fiscaal ten laste</legend>
                <input type="radio" name="fiscale_laste" value="Moeder">
                <label>moeder</label>
                <input type="radio" name="fiscale_laste" value="Vader">
                <label>Vader</label>
                <input type="radio" name="fiscale_laste" value="andere">
                <label>andere: </label>
                <input type="text" name="fiscale_laste_andere" placeholder="Vul in indien gekozen voor 'andere'">
            </fieldset>

            <fieldset>
                <legend>Aantal kinderen in Sint-Norbertusinstituut Duffel</legend>
                <fieldset>
                    <legend>Kind 1</legend>
                    <label>Naam: </label>
                    <input type="text" name="kind1_naam" placeholder="Achternaam">
                    <label>Voornaam: </label>
                    <input type="text" name="kind1_voornaam" placeholder="Voornaam">
                    <label>Geboortejaar: </label>
                    <input type="text" name="kind1_geboortejaar" placeholder="bv: 31/07/2001">
                    <label>Geslacht: </label>
                    <input type="radio" name="kind1_geslacht" value="Man">
                    <label>M</label>
                    <input type="radio" name="kind1_geslacht" value="Vrouw">
                    <label>V</label>
                </fieldset>
                <fieldset>
                    <legend>Kind 2</legend>
                    <label>Naam: </label>
                    <input type="text" name="kind2_naam" placeholder="Achternaam">
                    <label>Voornaam: </label>
                    <input type="text" name="kind2_voornaam" placeholder="Voornaam">
                    <label>Geboortejaar: </label>
                    <input type="text" name="kind2_geboortejaar" placeholder="bv: 31/07/2001">
                    <label>Geslacht: </label>
                    <input type="radio" name="kind2_geslacht" value="Man">
                    <label>M</label>
                    <input type="radio" name="kind2_geslacht" value="Vrouw">
                    <label>V</label>
                </fieldset>
                <fieldset>
                    <legend>Kind 3</legend>
                    <label>Naam: </label>
                    <input type="text" name="kind3_naam" placeholder="Achternaam">
                    <label>Voornaam: </label>
                    <input type="text" name="kind3_voornaam" placeholder="Voornaam">
                    <label>Geboortejaar: </label>
                    <input type="text" name="kind3_geboortejaar" placeholder="bv: 31/07/2001">
                    <label>Geslacht: </label>
                    <input type="radio" name="kind2_geslacht" value="Man">
                    <label>M</label>
                    <input type="radio" name="kind2_geslacht" value="Vrouw">
                    <label>V</label>
                </fieldset>
            </fieldset>
            <fieldset>
                <legend>Schoolloopbaan</legend>
                <p><b><u>Vorig schooljaar: 2015-2016</u></b></p>
                <p><u>Basisonderwijs: ook invullen voor wie reeds secundair onderwijs volgde</u></p>
                <label>School: </label>
                <input type="text" name="student_basisonderwijs_school" placeholder="School + adres"><br/>
                <label>Leerjaar: </label>
                <input type="text" name="student_basisonderwijs_leerjaar" placeholder="Leerjaar">
                <label>Jaartotaal: </label>
                <input type="text" name="student_basisonderwijs_jaartotaal" placeholder="Jaartotaal"><br/>
                <label>Resultaat taal: </label>
                <input type="text" name="student_basisonderwijs_resultaat_taal" placeholder="resultaat taal">
                <label>Resultaat rekenen: </label>
                <input type="text" name="student_basisonderwijs_resultaat_rekenen" placeholder="resultaat rekenen"><br/>
                <label>Getuigschrift basisonderwijs: </label>
                <input type="radio" name="student_basisonderwijs_getuigschrift" value="Ja">
                <label>Ja</label>
                <input type="radio" name="student_basisonderwijs_getuigschrift" value="Neen">
                <label>Neen</label><br/>
                <label>Attest buitengewoon onderwijs: </label>
                <input type="radio" name="student_basisonderwijs_attest_buitengewoon_onderwijs" value="Ja">
                <label>Ja, </label>
                <label>type: </label>
                <input type="text" name="student_basisonderwijs_attest_buitengewoon_onderwijs_type" placeholder="">
                <input type="radio" name="student_basisonderwijs_attest_buitengewoon_onderwijs" value="Neen">
                <label>Neen</label><br/>
                <p><u>Secundair onderwijs</u></p>
                <label>School: </label>
                <input type="text" name="student_secundair_school" placeholder="School + adres"><br/>
                <label>Leerjaar + richting: </label>
                <input type="text" name="student_secundair_leerjaar_richting" placeholder="Leerjaar + richting">
                <label>attest: </label>
                <input type="radio" name="student_secundair_attest" value="A">
                <label>A</label>
                <input type="radio" name="student_secundair_attest" value="B">
                <label>B</label>
                <input type="radio" name="student_secundair_attest" value="C">
                <label>C</label><br/>
                <label>Indien B-attest, clausulering (altijd kopie rapport bijvoegen): </label>
                <input type="text" name="student_secundair_attest_b" placeholder=""><br/>
                <label>Indien C-attest, studierichting en attest 2014-2015: </label>
                <input type="text" name="student_secundair_attest_c" placeholder=""><br/>
                <p><b><u>Huidig schooljaar: </u></b>In te vullen indien de leerling wordt ingeschreven na 1 september 2016</p>
                <label>School + adres: </label>
                <input type="text" name="student_huidig_schooljaar_school" placeholder="School + adres">
                <label>Leerjaar + richting: </label>
                <input type="text" name="student_huidig_schooljaar_leerjaar_richting" placeholder="resultaat rekenen"><br/>
                <p><b><u>Studieadvies</u></b></p>
                <label>Vanwege de school: </label>
                <input type="text" name="student_studieadvies_school" placeholder=""><br/>
                <label>Vanwege CLB: </label>
                <input type="text" name="student_studieadvies_clb" placeholder=""><br/>
                <p><b><u>Wensen ivm klasindeling</u></b></p>
                <label>Graag bij: </label>
                <input type="text" name="student_klasindeling_wensen_1" placeholder="">
                <label>of </label>
                <input type="text" name="student_klasindeling_wensen_2" placeholder="">
            </fieldset>
            <fieldset>
                <legend>Intake leren en persoonlijke gegevens</legend>
                <label>Hoe leerde u onze school kennen?</label><br/>
                <input type="radio" name="student_intake_persoonlijk_ontdekking" value="scholenbeurs">
                <label>scholenbeurs: </label>
                <input type="radio" name="student_intake_persoonlijk_ontdekking" value="advertentie">
                <label>advertentie: </label>
                <input type="radio" name="student_intake_persoonlijk_ontdekking" value="brochure">
                <label>brochure: </label>
                <input type="radio" name="student_intake_persoonlijk_ontdekking" value="brochure LOP">
                <label>brochure LOP</label><br/>
                <input type="radio" name="student_intake_persoonlijk_ontdekking" value="internet">
                <label>internet: </label>
                <input type="radio" name="student_intake_persoonlijk_ontdekking" value="basisschool">
                <label>basisschool: </label>
                <input type="radio" name="student_intake_persoonlijk_ontdekking" value="familie/vrienden">
                <label>familie/vrienden: </label>
                <input type="radio" name="student_intake_persoonlijk_ontdekking" value="andere">
                <label>andere: </label>
                <input type="text" name="student_intake_persoonlijk_ontdekking_andere" placeholder="omschrijving"><br/>
                <label>Waarom kies je voor onze school? </label>
                <input type="text" name="student_intake_persoonlijk_waarom_school" placeholder="korte omschrijving"><br/>
                <label>Waarom kies je voor deze richting? </label>
                <input type="text" name="student_intake_persoonlijk_waarom_richting" placeholder="korte omschrijving">
                <label>Wat verwacht je van de school? </label>
                <input type="text" name="student_intake_persoonlijk_verwachtingen_ouders" placeholder="korte omschrijving"><br/>
                <label>Wat verwacht je zoon/dochter van de school? </label>
                <input type="text" name="student_intake_persoonlijk_verwachtingen_kind" placeholder="korte omschrijving">
                <p><b><u>leer- en ontwikkelingsstoornissen</u></b></p>
                <label>Zijn er eventuele leer- of ontwikkelingsstoornissen met een attest van een multidisiplinair team of CLB? Zo ja, welke? </label><br/>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="ADHD">
                <label>ADHD</label>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="ADD">
                <label>ADD</label>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="ASS">
                <label>ASS</label>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="dyscalculie">
                <label>dyscalculie</label>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="dyslexie">
                <label>dyslexie</label><br/>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="dysfasie">
                <label>dysfasie</label>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="dyspraxie">
                <label>dyspraxie</label>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="NLD">
                <label>NLD</label>
                <input type="radio" name="student_intake_persoonlijk_ontwikkelingsstoornis" value="andere">
                <label>andere: </label>
                <input type="text" name="student_intake_persoonlijk_ontwikkelingsstoornis_andere" placeholder="korte omschrijving"><br/>
                <label>Welke ondersteuning kreeg je vorig schooljaar waar je baat bij had?</label><br/>
                <input type="text" name="student_intake_persoonlijk_ondersteuning" placeholder="korte omschrijving"><br/>
                <label>Mocht je hulpmiddelen gebruiken? </label>
                <input type="radio" name="student_intake_persoonlijk_hulpmiddelen" value="Ja">
                <label>Ja, </label>
                <input type="radio" name="student_intake_persoonlijk_hulpmiddelen" value="Neen">
                <label>Neen</label><br/>
                <label>Zo ja, welke? </label>
                <input type="text" name="student_intake_persoonlijk_hulpmiddelen_welke" placeholder="korte omschrijving"><br/>
                <p><b><u>GON-begeleiding</u></b></p>
                <label>Wens je GON-begeleiding op te nemen? </label>
                <input type="radio" name="student_intake_persoonlijk_gon_begeleiding" value="Ja">
                <label>Ja</label>
                <input type="radio" name="student_intake_persoonlijk_gon_begeleiding" value="Neen">
                <label>Neen</label><br/>
                <label>Zo ja, voor welke ontwikkelingsstoornis neem je GON op?</label>
                <input type="radio" name="student_intake_persoonlijk_gon_ontwikkelingsstoornis" value="ASS">
                <label>ASS</label>
                <input type="radio" name="student_intake_persoonlijk_gon_ontwikkelingsstoornis" value="andere">
                <label>andere: </label>
                <input type="text" name="student_intake_persoonlijk_gon_ontwikkelingsstoornis_andere" placeholder="korte omschrijving"><br/>
                <label>Zo ja, is deze aanvraag reeds bij een CLB gebeurd?</label>
                <input type="radio" name="student_intake_persoonlijk_gon_aanvraag" value="Ja">
                <label>Ja</label>
                <input type="radio" name="student_intake_persoonlijk_gon_aanvraag" value="Neen">
                <label>Neen</label><br/>
                <p>
                    Voor ASS, STOS (taal- en ontwikkelingsstoornissen) en gehoorproblemen werken we steeds samen met KOCA Emmaus.<br/>
                    De GON-begeleider zal begin september de ouders contacteren voor een overleg.
                </p>
                <p><b><u>Gezinssituatie</u></b></p>
                <label>Gezinssituatie </label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie" value="inwonend bij ouders">
                <label>inwonend bij ouders</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie" value="inwonend bij moeder">
                <label>inwonend bij moeder</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie" value="inwonend bij vader">
                <label>inwonend bij vader</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie" value="co-ouderschap">
                <label>co-ouderschap</label><br/>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie" value="pleeggezin">
                <label>pleeggezin: </label>
                <input type="text" name="student_intake_persoonlijk_gezinssituatie_pleeggezin" placeholder=""><br/>
                <label>adres: </label>
                <input type="text" name="student_intake_persoonlijk_gezinssituatie_pleeggezin_adres" placeholder=""><br/>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie" value="instelling">
                <label>instelling: </label>
                <input type="text" name="student_intake_persoonlijk_gezinssituatie_instelling" placeholder=""><br/>
                <label>adres: </label>
                <input type="text" name="student_intake_persoonlijk_gezinssituatie_instelling_adres" placeholder=""><br/>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie" value="andere">
                <label>andere + adres: </label>
                <input type="text" name="student_intake_persoonlijk_gezinssituatie_andere" placeholder=""><br/>
                <label>Gescheiden ouders: School voer communicatie met </label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_gescheiden_ouders_communicatie" value="moeder">
                <label>moeder</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_gescheiden_ouders_communicatie" value="vader">
                <label>vader</label><br/>
                <label>Wenst u 2 rapporten? Zoja </label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_rapporten" value="meegeven met zoon/dochter">
                <label>meegeven met zoon/dochter</label><br/>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_rapporten" value="mailen naar vader/moeder">
                <label>mailen naar vader/moeder</label><br/>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_rapporten" value="opsturen naar vader/moeder">
                <label>opsturen naar vader/moeder</label><br/>
                <label>Is er een contractverbod met andere ouder? </label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_contactverbod" value="ja">
                <label>ja</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_contactverbod" value="neen">
                <label>neen</label><br/>
                <p>Indien ja, gelieve een bewijs te bezorgen aan de pedagogische directie.<p>
                <label>Zijn er persoonlijke of familiale problemen waar je graag een gesprek over wenst?</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_gesprek_familiale_problemen" value="ja">
                <label>ja</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_gesprek_familiale_problemen" value="neen">
                <label>neen</label><br/>
                <label>Was er vroeger begeleiding?</label><br/>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_begeleiding" value="clb">
                <label>CLB</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_begeleiding" value="dienst geestelijke gezondheidzorg">
                <label>Dienst geestelijke gezondheidszorg</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_begeleiding" value="psychiater">
                <label>psychiater</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_begeleiding" value="therapeut">
                <label>therapeut</label>
                <input type="radio" name="student_intake_persoonlijk_gezinssituatie_begeleiding" value="andere">
                <label>andere: </label>
                <input type="text" name="student_intake_persoonlijk_gezinssituatie_begeleiding_andere" placeholder="">
            </fieldset>
            <fieldset>
                <legend>Medische gegevens</legend>
                <label>Zijn er gezondheidsproblemen waar wij op de hoogte moeten zijn? Zo ja, welke? omschrijf dit kort: </label><br/>
                <textarea style="resize: none;" name="student_medisch_gezondheidsproblemen" cols="40" rows="5" placeholder=""></textarea><br/>
                <hr/>
                <label>Wie contacteren we indien uw kind op school onwel of ziek wordt:</label>
                <input type="radio" name="student_medisch_contact_onwel" value="ouders">
                <label>ouder</label>
                <input type="radio" name="student_medisch_contact_onwel" value="familielid/buur">
                <label>familielid/buur</label><br/>
                <label>telefoon: </label>
                <input type="text" name="student_medisch_contact_onwel_telefoon" placeholder="">
                <label>naam: </label>
                <input type="text" name="student_medisch_contact_onwel_naam" placeholder="">
                <label>adres / telefoon: </label>
                <input type="text" name="student_medisch_contact_onwel_adres" placeholder=""><br/>
                <hr/>
                <label>
                    Indien de tussenkomst van een dokter noodzakelijk is, tracht de school steeds contact op<br/>
                    te nemen met de ouders. Mocht je kind een ongeval hebben of ernstig ziek worden, <br/>
                    ga je er dan mee akkoord dat de school een dokter raadpleegt om de eerste zorgen toe te dienen?    
                </label>
                <input type="radio" name="student_medisch_raadplegen_dokter" value="ja">
                <label>ja</label>
                <input type="radio" name="student_medisch_raadplegen_dokter" value="neen">
                <label>neen</label><br/>
                <label>Zo niet, gelieve de gegevens van de huisdokter te noteren:</label><br/>
                <label>naam: </label>
                <input type="text" name="student_medisch_raadplegen_dokter_naam" placeholder="">
                <label>adres/telefoon</label>
                <input type="text" name="student_medisch_raadplegen_dokter_adres" placeholder=""><br/>
            </fieldset>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
