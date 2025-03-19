<?php

require_once "../vendor/autoload.php";

use Bernh\WebtAdvTwigTemplatingEngine\Model\Entity\Hotel;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

$hotels = [
    new Hotel(1, "Hotel Sonnenblick", 6, "Ein idyllisches Hotel am See mit Bergblick, stilvollen Zimmern und einem luxuriösen Wellnessbereich. Perfekt für Erholung und Outdoor-Aktivitäten."),
    new Hotel(2, "CityLodge Metropolis", 3, "Modernes Designhotel im Stadtzentrum mit top ausgestatteten Zimmern. Ideal für Geschäftsreisende und Städtetrips."),
    new Hotel(3, "Strandhotel Meerblick", 0, "Direkt am Sandstrand gelegen, mit Meerblick, Spa und exzellenter Küche. Perfekt für entspannte Strandurlaube."),
    new Hotel(4, "Waldhotel Ruheoase", 4, "Ein ruhiges Hotel im Wald, ideal für Wanderer und Naturliebhaber. Mit gemütlichen Zimmern und entspannendem Ambiente."),
    new Hotel(5, "Bergresort Alpenblick", 5, "Ein exklusives Resort in den Alpen mit atemberaubendem Blick, luxuriösen Zimmern und einem privaten Spa."),
    new Hotel(6, "Flughafenhotel Jetset", 3, "Ein komfortables Hotel direkt am Flughafen mit schnellen Verbindungen und modernen Annehmlichkeiten."),
    new Hotel(7, "Seehotel Panorama", 5, "Direkt am See gelegen, mit einem tollen Wellnessbereich und Aktivitäten wie Segeln und Wandern."),
    new Hotel(8, "Luxus Hotel Royal", 5, "Ein exklusives Hotel mit 5-Sterne-Annehmlichkeiten, hochklassigen Restaurants und einem luxuriösen Spa."),
    new Hotel(9, "Pension Sonnenhof", 3, "Eine charmante Pension inmitten von Wäldern, ideal für Naturfreunde und Wanderer."),
    new Hotel(10, "Hotel Parkblick", 4, "Modernes Hotel mit Blick auf den Stadtpark, ideal für einen ruhigen und entspannenden Aufenthalt."),
    new Hotel(11, "Hotel Panorama Berg", 4, "Hoch in den Bergen gelegen, mit spektakulärem Blick und komfortablen Zimmern für einen aktiven Urlaub."),
    new Hotel(12, "Urlaubsresort Küstenglück", 4, "Resort direkt an der Küste mit einem privaten Strand, ideal für Familien und Entspannung."),
];

// Render the template
echo $twig->render('index.html.twig', ['hotels' => $hotels]);
//echo $twig->render('details.html.twig', ['hotel'=> $hotels[0]]);
?>
