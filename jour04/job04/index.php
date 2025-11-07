<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Liste des utilisateurs</title>
    
</head>
<body>

    <h2 style="text-align:center;">Liste des utilisateurs</h2>
    <table id="tableUsers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contenu généré par JavaScript -->
        </tbody>
    </table>

    <button id="btnUpdate">Update</button>

    <script>
        document.getElementById("btnUpdate").addEventListener("click", () => {
            fetch("user.php")
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    const tbody = document.querySelector("#tableUsers tbody");
                    tbody.innerHTML = ""; // vide le tableau

                    data.forEach(user => {
                        const tr = document.createElement("tr");
                        tr.innerHTML = `
                            <td>${user.id}</td>
                            <td>${user.nom}</td>
                            <td>${user.prenom}</td>
                            <td>${user.email}</td>
                        `;
                        tbody.appendChild(tr);
                    });
                })
                .catch(error => console.error("Erreur :", error));
        });
    </script>

</body>
</html>