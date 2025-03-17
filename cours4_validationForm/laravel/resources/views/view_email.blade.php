<!-- resources/views/view_contenu_email.blade.php -->
<!doctype html>
<html lang='fr'>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Création de manifestation</h2>
    <div>
    La prochaine manifestation aura lieu du : {{ \Carbon\Carbon::parse($start)->format('d F Y') }}
    au : {{ \Carbon\Carbon::parse($end)->format('d F Y') }}
    à {{$lieu}}
    <br>
    Le comité
</div>
</body>

</html>