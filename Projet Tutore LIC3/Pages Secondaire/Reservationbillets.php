<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservationbillet";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $destination = $_POST['destination'];
    $date_depart = $_POST['date_depart'];
    $heure_depart = $_POST['heure_depart'];
    $classe_num = $_POST['classe_num'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    //$statut = $_POST['statut'];
    $utilisateur_id = 1; // Par défaut, à remplacer par l'ID de l'utilisateur connecté.

    // Insérer les données dans la table voyages
    $sql_voyage = "INSERT INTO voyages (destination, date_depart, heure_depart, prix)
                   VALUES ('$destination', '$date_depart', '$heure_depart', '$prix')";

if ($conn->query($sql_voyage) === TRUE) {
    $voyage_id = $conn->insert_id; // Récupère l'ID du voyage ajouté

    // Insérer les données dans la table reservations
    $sql_reservation = "INSERT INTO reservations (utilisateur_id, nom, classe_num, destination, date_depart, heure_depart, prix)
                        VALUES ('$utilisateur_id', '$nom', '$classe_num','$destination', '$date_depart','$heure_depart', '$prix')";

if ($conn->query($sql_voyage) === TRUE) {
    $voyage_id = $conn->insert_id; // Récupère l'ID du voyage ajouté

    // Insérer les données dans la table reservations
    $sql_reservation = "INSERT INTO reservations (utilisateur_id, nom, classe_num, destination, date_depart, heure_depart, prix)
                        VALUES ('$utilisateur_id', '$nom', '$classe_num','$destination', '$date_depart','$heure_depart', '$prix')";

    if ($conn->query($sql_reservation) === TRUE) {
        // Réservation réussie, générer le billet PDF
        require(__DIR__ . '/../librarie/fpdf.php');

        // Initialiser le PDF
        $pdf = new FPDF();
        $pdf->AddPage();

        // En-tête du PDF
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetFillColor(0, 102, 204); // Couleur de fond bleue
        $pdf->SetTextColor(255, 255, 255); // Couleur du texte blanche
        $pdf->Cell(190, 10, 'Billet de Reservation', 0, 1, 'C', true);
        $pdf->Ln(10);

        // Réinitialiser la couleur du texte
        $pdf->SetTextColor(0, 0, 0);

        // Ajout du contenu du billet à gauche
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(100, 10, 'Nom : ', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $nom, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(100, 10, 'Classe Num : ', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $classe_num, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(100, 10, 'Destination : ', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $destination, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(100, 10, 'Date de Depart : ', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $date_depart, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(100, 10, 'Heure de Depart : ', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $heure_depart, 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(100, 10, 'Prix : ', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $prix . ' FC', 0, 1);
        $pdf->Ln(10);

        // Ajout de l'image à droite (modifie le chemin pour correspondre à ton image)
        $pdf->Image(file: '../img/battt-860x642.jpg', x: 10, y: 150, w: 180, h: 100, type: 'JPG');

        // Ajouter le filigrane "ETS SILIMU"
        $pdf->SetFont('Arial', 'B', 50);
        $pdf->SetTextColor(200, 200, 200); // Couleur grise pour l'effet de filigrane
        //$pdf->RotatedText(30, 210, 'ETS SILIMU', 45); // Position, texte, et angle de rotation

        // Ajouter un pied de page
        $pdf->SetY(-15);
        $pdf->SetFont('Arial', 'I', 8);
        $pdf->Cell(0, 10, 'Merci de voyager avec nous!', 0, 0, 'C');

        // Nom du fichier PDF
        $filename = 'billet_' . $nom . '.pdf';

        // Sauvegarder le fichier PDF
        $pdf->Output('D', $filename);

        echo "Réservation réussie. Votre billet a été généré.";

    } else {
        echo "Erreur lors de l'enregistrement de la réservation : " . $conn->error;
    }
}
} else {
    echo "Erreur lors de l'ajout du voyage : " . $conn->error;
}
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation Billet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Ajouter un style personnalisé pour gérer l'effet de flou */
        .blurred {
            filter: blur(5px);
        }

        /* Style pour le modal (formulaire) */
        .modal {
            display: none; /* Cacher le formulaire par défaut */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fond semi-transparent */
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            max-width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
    <!-- Modal de réservation -->
    <div id="reservation-modal" class="modal flex items-center justify-center fixed inset-0 bg-gray-800 bg-opacity-75">
    <div class="modal-content bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-md">
        <h2 class="text-xl font-bold mb-4 text-center">Réservez votre billet</h2>
        
        <!-- Formulaire de réservation -->
        <form method="POST">
            <label for="nom" class="block text-xs font-medium text-gray-500">Nom et Postnom</label>
            <input type="text" id="nom" name="nom" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">
            
            <label for="classe_num" class="block text-xs font-medium text-gray-500">Classe Num</label>
            <input type="text" id="classe_num" name="classe_num" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">
            
            <label for="destination" class="block text-xs font-medium text-gray-500">Destination</label>
            <input type="text" id="destination" name="destination" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">
            
            <label for="date_depart" class="block text-xs font-medium text-gray-500">Date de départ</label>
            <input type="date" id="date_depart" name="date_depart" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">
            
            <label for="heure_depart" class="block text-xs font-medium text-gray-500">Heure de départ</label>
            <input type="time" id="heure_depart" name="heure_depart" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">
            
            <label for="prix" class="block text-xs font-medium text-gray-500">Prix</label>
            <input type="number" id="prix" name="prix" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm" placeholder="En franc Congolais">
            
            <!-- Section de paiement -->
            <h3 class="text-sm font-semibold mb-2">Moyen de paiement</h3>
            
            <div class="mb-3">
                <label for="payment-method" class="block text-xs font-medium text-gray-500">Choisir un moyen de paiement :</label>
                <select id="payment-method" name="payment-method" class="block w-full p-1 border border-gray-300 rounded-md text-sm">
                    <option value="credit-card">Carte de crédit</option>
                    <option value="paypal">PayPal</option>
                    <option value="mobile-money">Mobile Money</option>
                </select>
            </div>

            <!-- Informations de paiement pour Carte de crédit -->
            <div id="credit-card-info" class="payment-info hidden">
                <label for="card-number" class="block text-xs font-medium text-gray-500">Numéro de la carte</label>
                <input type="text" id="card-number" name="card-number" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">

                <label for="card-expiry" class="block text-xs font-medium text-gray-500">Date d'expiration (MM/AA)</label>
                <input type="text" id="card-expiry" name="card-expiry" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">

                <label for="card-cvc" class="block text-xs font-medium text-gray-500">CVC</label>
                <input type="text" id="card-cvc" name="card-cvc" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">
            </div>

            <!-- Informations de paiement pour PayPal -->
            <div id="paypal-info" class="payment-info hidden">
                <p class="text-xs text-gray-500">Vous serez redirigé vers PayPal pour finaliser votre paiement.</p>
            </div>

            <!-- Informations de paiement pour Mobile Money -->
            <div id="mobile-money-info" class="payment-info hidden">
                <label for="mobile-money-number" class="block text-xs font-medium text-gray-500">Numéro de téléphone (Mobile Money)</label>
                <input type="text" id="mobile-money-number" name="mobile-money-number" class="block w-full p-1 border border-gray-300 rounded-md mb-3 text-sm">
            </div>

            <button type="submit" class="mt-4 w-full bg-indigo-600 text-white py-2 px-3 rounded-md hover:bg-indigo-500 text-sm">Confirmer la réservation</button>
        </form>
    </div>
</div>

<script>
    // Gestion de l'affichage des informations de paiement selon le moyen choisi
    document.getElementById('payment-method').addEventListener('change', function() {
        // Cacher toutes les sections de paiement
        document.querySelectorAll('.payment-info').forEach(function(el) {
            el.classList.add('hidden');
        });

        // Afficher la section de paiement correspondante
        const paymentMethod = this.value;
        if (paymentMethod === 'credit-card') {
            document.getElementById('credit-card-info').classList.remove('hidden');
        } else if (paymentMethod === 'paypal') {
            document.getElementById('paypal-info').classList.remove('hidden');
        } else if (paymentMethod === 'mobile-money') {
            document.getElementById('mobile-money-info').classList.remove('hidden');
        }
    });
    // Récupérer les éléments
    const reserveBtn = document.getElementById('reserve-btn');
        const modal = document.getElementById('reservation-modal');
        const mainContent = document.getElementById('main-content');

        // Fonction pour ouvrir le formulaire modal
        reserveBtn.addEventListener('click', function(e) {
            e.preventDefault(); // Empêcher le comportement par défaut
            modal.style.display = 'flex'; // Afficher le modal
            mainContent.classList.add('blurred'); // Ajouter un effet de flou à l'arrière-plan
        });

        // Fonction pour fermer le formulaire modal en cliquant à l'extérieur
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none'; // Masquer le modal
                mainContent.classList.remove('blurred'); // Retirer l'effet de flou
            }
        });
</script>

</html>
