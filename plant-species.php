<?php include_once 'inc/config.inc.php';
$PAGE_TITLE = 'Plant Species List';
$URL_NAME = 'plant-species';

// FETCH DATA DIRECTLY FOR RELIABILITY
$initial = isset($_GET['initial']) ? $_GET['initial'] : '';
if (!empty($initial)) {
    // If AdminTask has a specific method for this, use it, otherwise filter here
    // For now, we'll fetch all and filter to ensure compatibility
    $allSpecies = $AdminTask->Get_All_Species();
    $allSpecies = array_filter($allSpecies, function($s) use ($initial) {
        return stripos($s->species_name, $initial) === 0;
    });
} else {
    $allSpecies = $AdminTask->Get_All_Species();
}
$familyCache = [];
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?= $PAGE_TITLE . ' | ' . SITE_TITLE ?> </title>
    <?php include_once 'layout/header-props.php'; ?>
    <style>
        .page { opacity: 1 !important; visibility: visible !important; display: block !important; }
        .preloader { display: none !important; }

        /* PREMIUM BUTTON STYLING */
        .dt-buttons { margin-bottom: 20px; gap: 5px; display: flex; flex-wrap: wrap; }
        .dt-button { 
            border: none !important; 
            border-radius: 50px !important; 
            padding: 8px 20px !important; 
            font-size: 13px !important; 
            font-weight: 600 !important; 
            text-transform: uppercase !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1) !important;
        }
        .buttons-copy { background: #1c2331 !important; color: white !important; }
        .buttons-csv { background: #28a745 !important; color: white !important; }
        .buttons-excel { background: #1f7244 !important; color: white !important; }
        .buttons-pdf { background: #d9534f !important; color: white !important; }
        .buttons-print { background: #5bc0de !important; color: white !important; }

        /* ALPHABETICAL FILTER STYLING */
        .alphabet-filter ul { list-style: none; padding: 0; margin-bottom: 20px; }
        .alphabet-filter ul li { display: inline-block; margin-right: 10px; font-weight: bold; }
        .alphabet-filter ul li a { color: green !important; text-decoration: none; font-size: 16px; }
        .alphabet-filter ul li a:hover { color: #1c2331 !important; }
    </style>
</head>

<body>
    <?php include_once 'layout/preloader.php'; ?>

    <div class="page">
        <?php include_once 'layout/header.php'; ?>
        <div class="divider-spectrum"></div>

        <section
            class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap"
            style="background-image: url(images/compound-list-slider-image-2.jpg); background-size: cover; background-position: center bottom; background-attachment: initial;">
            <div class="container text-center">
                <div class="page-title">
                    <h2 style="text-transform: uppercase; color: #fff; font-weight: 800; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);"><?= $PAGE_TITLE ?></h2>
                </div>
            </div>
        </section>

        <section class="section section-50 bg-whisper novi-background">
            <div class="container-fluid">
                <div class="alphabet-filter">
                    <h5>
                        <ul>
                            <li><a href="./plant-species?initial=A"> A</a></li>
                            <li><a href="./plant-species?initial=B"> B</a></li>
                            <li><a href="./plant-species?initial=C"> C</a></li>
                            <li><a href="./plant-species?initial=D"> D</a></li>
                            <li><a href="./plant-species?initial=E"> E</a></li>
                            <li><a href="./plant-species?initial=F"> F</a></li>
                            <li><a href="./plant-species?initial=G"> G</a></li>
                            <li><a href="./plant-species?initial=H"> H</a></li>
                            <li><a href="./plant-species?initial=I"> I</a></li>
                            <li><a href="./plant-species?initial=J"> J</a></li>
                            <li><a href="./plant-species?initial=K"> K</a></li>
                            <li><a href="./plant-species?initial=L"> L</a></li>
                            <li><a href="./plant-species?initial=M"> M</a></li>
                            <li><a href="./plant-species?initial=N"> N</a></li>
                            <li><a href="./plant-species?initial=O"> O</a></li>
                            <li><a href="./plant-species?initial=P"> P</a></li>
                            <li><a href="./plant-species?initial=Q"> Q</a></li>
                            <li><a href="./plant-species?initial=R"> R</a></li>
                            <li><a href="./plant-species?initial=S"> S</a></li>
                            <li><a href="./plant-species?initial=T"> T</a></li>
                            <li><a href="./plant-species?initial=U"> U</a></li>
                            <li><a href="./plant-species?initial=V"> V</a></li>
                            <li><a href="./plant-species?initial=W"> W</a></li>
                            <li><a href="./plant-species?initial=X"> X</a></li>
                            <li><a href="./plant-species?initial=Y"> Y</a></li>
                            <li><a href="./plant-species?initial=Z"> Z</a></li>
                            <li><a href="./plant-species?initial=1"> 1</a></li>
                            <li><a href="./plant-species?initial=2"> 2</a></li>
                            <li><a href="./plant-species?initial=3"> 3</a></li>
                            <li><a href="./plant-species?initial=4"> 4</a></li>
                            <li><a href="./plant-species?initial=5"> 5</a></li>
                            <li><a href="./plant-species?initial=6"> 6</a></li>
                            <li><a href="./plant-species?initial=7"> 7</a></li>
                            <li><a href="./plant-species?initial=8"> 8</a></li>
                            <li><a href="./plant-species?initial=9"> 9</a></li>
                            <li><a href="./plant-species?initial="> All</a></li>
                        </ul>
                    </h5>
                </div>
                <div class="table-responsive" style="padding: 20px; background: #fff; border-radius: 15px;">
                    <table id="example" class="table table-hover table-bordered" style="width:100%">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>ID No.</th>
                                <th>Species name</th>
                                <th>Family</th>
                                <th>Common Name</th>
                                <th>Local Name</th>
                                <th>Compound</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($allSpecies): foreach ($allSpecies as $species): 
                                $speciesLink = urlencode($species->species_link);
                                $speciesName = htmlspecialchars($species->species_name, ENT_QUOTES);
                                $familyId = $species->family_id;
                                
                                // Get family name
                                if (!isset($familyCache[$familyId])) {
                                    $familyObj = $AdminTask->Get_Species_Family_Name($familyId);
                                    $familyCache[$familyId] = $familyObj ? htmlspecialchars($familyObj->family_name, ENT_QUOTES) : 'N/A';
                                }
                                $familyName = $familyCache[$familyId];
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($species->ids_no, ENT_QUOTES) ?></td>
                                <td><a href="species-details?specy=<?= $speciesLink ?>"><?= $speciesName ?></a></td>
                                <td><?= $familyName ?></td>
                                <td><?= htmlspecialchars($species->common_name, ENT_QUOTES) ?></td>
                                <td><?= htmlspecialchars($species->local_name, ENT_QUOTES) ?></td>
                                <td><?= $species->compound_count ?></td>
                            </tr>
                            <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <?php include_once 'layout/footer.php'; ?>
    </div>
    <?php include_once 'layout/footer-props.php'; ?>

    <script>
    $(document).ready(function() {
        console.log("🚀 STARTING JAVASCRIPT MASTER LOAD...");
        
        $('#example').DataTable({
            "responsive": true,
            "pageLength": 15,
            "dom": 'frtip'
        });
    });
    </script>
</body>
</html>