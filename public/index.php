<?php

$fail = false;
$mail = "";
$mailbody = "";
if(isset($_REQUEST['submit'])) {

  foreach ($_REQUEST as $key => $value){
    if ($key == "email") {
      if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
          $mail = $value;
      } else {
        $fail = true;
      }
    }
    $mailbody .= "$key = $value\n";
  }


  if (!$fail) {
    $from = $mail;
    $to = "buero@cologneclean.de,te@rb.de";
    $subject = "Anfrage über die Webseite";
    $message = $mailbody;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
  }
}
?>


<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<title>Cologne Clean Gebäudereinigung</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Cologne Clean Gebäudereinigung ist im gesamten Kölner Raum, sowie im angrenzenden Umland tätig. Die Leistungen umfassen Unterhaltsreinigung, Treppenhausreinigung, Parkettreinigung, Glasreinigung, Bauabschlussreinigung und Teppichreinigung.">
    
    <meta property="og:title" content="Cologne Clean Gebäudereinigung" />
    <meta property="og:description" content="Cologne Clean Gebäudereinigung ist im gesamten Kölner Raum, sowie im angrenzenden Umland tätig. Die Leistungen umfassen Unterhaltsreinigung, Treppenhausreinigung, Parkettreinigung, Glasreinigung, Bauabschlussreinigung und Teppichreinigung." />
    <meta property="og:url" content="http://cologneclean.de" />
    <meta property="og:image" content="http://cologneclean.de/img/stage_01.jpg" />
    <meta property="og:type" content="website" />
    <meta name="robots" content="index, follow">  
    
    <link href="http://cologneclean.de" rel="canonical" >
    
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/screen.css">
	</head>
	<body>
    <header>
      <div class="container">
        <a id="logo" href="/" /><img src="img/logo.jpg" alt="" /></a>
        <a id="toggle-nav" class="icon-menu" href="#main-nav" data-toggle="href"> </a>
        <nav id="main-nav" data-role="navigation">
          <ul>
            <li><a href="#ueber-uns">Über uns</a></li>
            <li><a href="#leistungen">Leistungen</a></li>
            <li><a href="#kontakt">Kontakt</a></li>
            <li><a href="#jobs">Jobs</a></li>
            <li><a href="#impressum">Impressum</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>      
      <section id="stage">
        <div class="container">
          <div class="title">
            <h1>Gebäudereinigung</h1><br />
            <h2>...saubere Sache</h2>
          </div>
        </div>
      </section>
      <div class="anker" id="ueber-uns"></div>
      <section>
        <div class="container">
          <h3 class="icon-about">Über uns</h3>
         <!--- <img class="cars" src="img/cars.png" alt=""> -->
          <p>
            Wir sind ein engagiertes Dienstleistungsunternehmen, das <strong>im gesamten Kölner Raum, sowie im angrenzenden Umland</strong> tätig ist. Mehrjährige Berufserfahrung in anderen Unternehmen hat uns inspiriert ein Unternehmen zu gründen, welches durch dienstleistungsorientiertes Denken und Handeln bestimmt ist. Vielfältige Erfahrungen aus Theorie und Praxis zeigen, dass die <strong>ständige Betreuung und Pflege</strong> des Kunden ein wichtiges Kriterium ist, um eine auf Dauer zufrieden stellende Dienstleistung zu erzielen. Ihre Wünsche und Bedürfnisse sind der Maßstab für unsere Arbeit. Ihre Aufträge erledigen wir <strong>kompetent, zuverlässig, flexibel</strong> und mit dem <strong>Bewusstsein für Umweltschutz und Qualität</strong>.
          </p>
          <p>
            Die <strong>langfristige zufriedenheit</strong> unserer Geschäftspartner wird von uns intensiv gepflegt. Das Vertrauen, das wir erhalten, ist die Grundlage unserer Verantwortung. Eine <strong>ehrliche, partnerschaftliche Zusammenarbeit</strong> ist für uns selbstverständlich. <strong>Kompetente Gebäudereinigung</strong> sichert den <strong>langfristigen Werterhalt</strong> und verleiht Immobilien innen und außen einen repräsentativen Charakter. Sollten auch Sie der Überzeugung sein, dass unser Unternehmen Ihnen ein guter und zuverlässiger Partner sein könnte, würden wir uns Ihnen gerne in einem persönlichen Gespräch ausführlich vorstellen.
          </p>
        </div>
      </section>
      <div class="anker" id="leistungen"></div>
      <section class="leistungen">
        <div class="container">
          <h3 class="icon-service">Leistungen</h3>
          <div class="group">
            <article>
              <img src="img/leistungen/unterhaltsreinigung.jpg" alt="Unterhaltsreinigung">
              <div class="inner">
                <h4>Unterhaltsreinigung</h4>
                <p>
                Wir reinigen Büros, Praxen, Banken etc. in den von Ihnen gewünschten Zeitabständen.Ob täglich, wöchentlich oder monatlich, vom saugen über Staubwischen bis hin zu den Sanitären Einrichtungen; wir sind für Sie da.
                </p>
              </div>
            </article>
            <article>
              <img src="img/leistungen/glasreinigung_neu.jpg" alt="">
              <div class="inner">
                <h4>Glasreinigung</h4>
                <p>
                  Die Glasreinigung ist einer der wichtigsten Bestandteile im äußerlichen Auftreten von Objekten.
Wir reinigen sämtliche Glasfronten und Variationen, vom Privathaushalt über Schaufenster bis hin zu Großflächen, mit Leitern, Stangen oder Hebebühnen. Wir garantieren einen klaren Blick.
                </p>
              </div>
            </article>
            <article>
              <img src="img/leistungen/treppenhausreinigung_neu.jpg" alt="">
              <div class="inner">
                <h4>Treppenhausreinigung</h4>
                <p>
                  Jeder freut sich über ein schön gepflegtes Treppenhaus. Saubere Treppenstufen und Podeste, keine Spinnweben, saubere Keller sowie Waschküchen und gepflegte Hauseingänge. Damit auch Sie dieses Gefühl erleben können, geben Sie uns Ihr Vertrauen. Wir machen es möglich.
                </p>
              </div>
            </article>
            <article>
              <img src="img/leistungen/grundreinigung.jpg" alt="">
              <div class="inner">
                <h4>Grundreinigung</h4>
                <p>
                  Die Grundreinigung ist der Hauptbestandteil einer nachfolgenden Pflege. Wir beseitigen den Schmutz bis auf den Grund in allen Bereichen. Wir machen vor nichts halt, ob Wohnungen, Industriehallen, Großküchen, Gastronomie, Treppenhäusern etc. Der Schmutz muss weg.
                </p>
              </div>
            </article>
                        <article>
              <img src="img/leistungen/parkettreinigung.jpg" alt="">
              <div class="inner">
                <h4>Parkettreinigung</h4>
                <p>
                  Damit das wertvolle Erscheinungsbild eines Parkettboden erhalten bleibt, bedingt es einer ständigen Pflege. Wir Reinigen und pflegen sämtliche Parkettböden, ob Privat oder Geschäftlich. Profitieren auch Sie von unseren langjährigen Erfahrung in diesem Bereich. 
                </p>
              </div>
            </article>
            <article>
              <img src="img/leistungen/teppichreinigung.jpg" alt="">
              <div class="inner">
                <h4>Teppichreinigung</h4>
                <p>
                  Schmutz von Schuhen, umgestoßenen Gläsern, schwere Verschmutzungen, wir reinigen sämtliche Teppiche sowie Polster und werten diese wieder auf. Auch Sie sollten sich darüber keine Sorgen machen.
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <div class="anker" id="kontakt"></div>
      <section class="kontakt">
        <div class="container">
          <h3 class="icon-contact">Kontakt</h3>
          <p>
            Schicken Sie uns eine unverbindliche Anfrage und erhalten Sie ein Angebot von uns oder rufen Sie uns an unter 02203/201674.
          </p>
          <form id="kontakt-form" action="index.php" method="POST">
            <div class="column">
              <div class="col-50-md">
                <h5>Anfrage zu:</h5>
                <div class="form-group">
                  <label class="label-checkbox" for="unterhaltsreinigung">
                    <input name="unterhaltsreinigung" id="unterhaltsreinigung" type="checkbox" />
                    Unterhaltsreinigung
                  </label>
                  <label class="label-checkbox" for="glasreinigung">
                    <input name="glasreinigung" id="glasreinigung" type="checkbox" />
                    Glasreinigung
                  </label>
                  <label class="label-checkbox" for="bauabschlussreinigung">
                    <input name="bauabschlussreinigung" id="bauabschlussreinigung" type="checkbox" />
                    Bauabschlussreinigung
                  </label>
                  <label class="label-checkbox" for="grundreinigung">
                    <input name="grundreinigung" id="grundreinigung" type="checkbox" />
                    Grundreinigung
                  </label>
                  <label class="label-checkbox" for="treppenhausreinigung">
                    <input name="treppenhausreinigung" id="treppenhausreinigung" type="checkbox" />
                    Treppenhausreinigung
                  </label>
                  <label class="label-checkbox" for="parkettreinigung">
                    <input name="parkettreinigung" id="parkettreinigung" type="checkbox" />
                    Parkettreinigung und Pflege
                  </label>
                </div>

                <div class="form-group">
                  <label for="sonstiges">Sonstiges</label>
                  <input name="sonstiges" id="sonstiges" type="text" />

                  <label for="flaeche">geschätzte Fläche * (qm)</label>
                  <input name="flaeche" id="flaeche" type="text" />
                </div>
              </div>
              <div class="col-50-md">
                <h5>Gewünschte Reinigungstage:</h5>
                <label class="label-checkbox" for="montag">
                  <input name="montag" id="montag" type="checkbox" />
                  Montag
                </label>
                <label class="label-checkbox" for="dienstag">
                  <input name="dienstag" id="dienstag" type="checkbox" />
                  Dienstag
                </label>
                <label class="label-checkbox" for="mittwoch">
                  <input name="mittwoch" id="mittwoch" type="checkbox" />
                  Mittwoch
                </label>
                <label class="label-checkbox" for="donnerstag">
                  <input name="donnerstag" id="donnerstag" type="checkbox" />
                  Donnerstag
                </label>
                <label class="label-checkbox" for="freitag">
                  <input name="freitag" id="freitag" type="checkbox" />
                  Freitag
                </label>
                <label class="label-checkbox" for="samstag">
                  <input name="samstag" id="samstag" type="checkbox" />
                  Samstag
                </label>
                <label class="label-checkbox" for="sonntag">
                  <input name="sonntag" id="sonntag" type="checkbox" />
                  Sonntag
                </label>
              </div>
            </div>
  
            <div class="column">
              <div class="col-50-md">
                <label for="firma">Firma*</label>
                <input name="firma" id="firma" type="text" />
              </div>
              <div class="col-50-md">
                <label for="abteilung">Abteilung</label>
                <input name="abteilung" id="abteilung" type="text" />
              </div>
              <div class="col-50-md">
                <label for="ansprechpartner">Ansprechpartner*</label>
                <input name="ansprechpartner" id="ansprechpartner" type="text" />
              </div>
              <div class="col-50-md">
                <label for="strasse">Straße*</label>
                <input name="strasse" id="strasse" type="text" />
              </div>
              <div class="col-50-md">
                <label for="postleitzahl">Postleitzahl*</label>
                <input name="postleitzahl" id="postleitzahl" type="text" />
              </div>
              <div class="col-50-md">
                <label for="ort">Ort*</label>
                <input name="ort" id="ort" type="text" />
              </div>
              <div class="col-50-md">
                <label for="email">E-Mail*</label>
                <input name="email" id="email" type="text" />
              </div>
              <div class="col-50-md">
                <label for="telefon">Telefon*</label>
                <input name="telefon" id="telefon" type="text" />
              </div>
            </div>
            <div class="column">
              <div class="col-100">
                <input type="submit" value="Anfrage absenden">
                <input type='hidden' name='submit' />
                <p>
                  * Pflichtfelder, die ausgefüllt werden müssen.
                </p>
              </div>
            </div>
          </form>
        </div>
      </section>


      <div class="anker" id="jobs"></div>
      <section class="jobs">
        <div class="container">
          <h3 class="icon-about">Jobs</h3>
          
          <p>
            Wir sind immer auf der Suche nach qualifizierten, engagierten und zuverlässigen Mitarbeitern.
          </p>
          <p>
            Was wir erwarten? <strong>Zuverlässigkeit, Pünktlichkeit, Verantwortungsbewusstsein, gepflegtes Äußeres, sicheres Auftreten, und ein Auge für die Reinigung. Reinigen ist nicht gleich Reinigen.</strong> 
          </p>
          <p>
            Was wir bieten: <strong>Überdurchschnittliches Gehalt, Arbeiten mit den modernsten und besten Reinigungsmitteln, interessante Reinigungslandschaften, ein freundliches Umfeld und ein Chef auf den man sich verlassen kann.</strong>
          </p>
          <p>
            Wir machen diese Berufung schon seit mehr als 10 Jahren und wissen wie wichtig engagierte und zuverlässige Mitarbeiter sind. Wenn Sie interessiert sind, einfach eine Email mit Ihrem Lebenslauf an

            <a href="mailto:jobs@cologneclean.de?subject=Bewerbung&body=Guten Tag, ich möchte mich als Reinigungsfachkraft bei Ihnen Bewerben.">jobs@cologneclean.de</a> 
          </p>

      </section>


      <div class="anker" id="impressum"></div>
      <section class="impressum">
        <div class="container">
          <h3 class="icon-imprint">Impressum</h3>
          <p><strong>Verantwortlich für den Inhalt</strong><br /></p>
          <div class="column">
            <div class="col-33-md">
              <p>
                Cologne Clean Gebäudereinigung<br />
                Stollwerckstr. 12-14 , 51149 Köln<br />
                Inhaber: Pilar Pastor
              </p>
            </div>
            <div class="col-33-md">
              <p>
                <a href="mailto:buero@cologneclean.de">buero@cologneclean.de</a><br />
                Tel: 02203 / 20 16 74<br />
                Fax: 02203 / 20 16 72
              </p>
            </div>
            <div class="col-33-md">
              <p>
                Steuer - Nr. 216 5149 1354<br />
                <a href=http://www.handwerkskammer-koeln.de/>Mitgliedsbetrieb der Handwerkskammer zu Köln</a>
              </p>
            </div>
          </div>
          <p>
            <small> Webdesign von <a href="http://www.alina-holletzek.de/">Alina Holletzek</a></small><br>
            <small> Mediadesign von <a href="http://www.irene-wall.de/">Irene Wall</a></small>
          </p>
        </div>
      </section>
    </main>
    <footer>
    </footer>
		<script src="js/libs/jquery-1.11.2.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
