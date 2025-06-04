<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Cyberpunk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Fonts et thème */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #111, #0ff);
            color: #fff;
            animation: backgroundEffect 15s infinite ease-in-out;
        }
 
        header {
            background-color: rgba(0, 0, 0, 0.85);
            text-align: center;
            padding: 30px 20px;
            border-bottom: 2px solid #00e6e6;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }
 
        header h1 {
            font-size: 2.8rem;
            color: #00e6e6;
            font-family: 'Orbitron', sans-serif;
            text-shadow: 0 0 10px #00ffff;
        }
 
        nav {
            display: flex;
            justify-content: space-between;
            background: rgba(0, 0, 0, 0.9);
            padding: 15px 30px;
        }
 
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1rem;
            transition: 0.3s;
            position: relative;
        }
 
        nav a:hover, nav a.active {
            color: #00e6e6;
        }
 
        nav a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #00e6e6;
        }
 
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 255, 255, 0.3);
        }
 
        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #00ffff;
        }
 
        .admin-actions {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
 
        .admin-actions a {
            background: #00bcd4;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin: 5px;
            transition: 0.3s;
        }
 
        .admin-actions a:hover {
            background: #0097a7;
        }
 
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
 
        th, td {
            padding: 12px;
            border-bottom: 1px solid #444;
            text-align: left;
        }
 
        th {
            color: #00e6e6;
            background-color: rgba(0, 0, 0, 0.6);
        }
 
        .actions button {
            background-color: #1e90ff;
            border: none;
            color: #fff;
            padding: 6px 12px;
            margin: 0 5px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
        }
 
        .actions .delete {
            background-color: #e63946;
        }
 
        .actions button:hover {
            opacity: 0.8;
        }
 
        footer {
            text-align: center;
            padding: 10px 0;
            background: rgba(0, 0, 0, 0.9);
            color: #ccc;
            font-size: 0.8rem;
            margin-top: 40px;
        }
 
        @keyframes backgroundEffect {
            0% { background: linear-gradient(135deg, #111, #0ff); }
            50% { background: linear-gradient(135deg, #222, #00e6e6); }
            100% { background: linear-gradient(135deg, #111, #0ff); }
        }
 
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: center;
            }
 
            .admin-actions {
                flex-direction: column;
                align-items: flex-start;
            }
 
            .admin-actions a {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Panneau d'Administration</h1>
    </header>
 
    <nav>
        <a href="admin.html" class="active"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
        <a href="#"><i class="fas fa-user-cog"></i> Gestion des admins</a>
        <a href="#"><i class="fas fa-chart-bar"></i> Statistiques</a>
        <a href="#"><i class="fas fa-file-alt"></i> Logs système</a>
        <a href="#"><i class="fas fa-cogs"></i> Paramètres</a>
    </nav>
 
    <div class="container">
        <h2>Liste des Utilisateurs</h2>
 
        <div class="admin-actions">
            <a href="#"><i class="fas fa-user-plus"></i> Ajouter un utilisateur</a>
            <a href="#"><i class="fas fa-database"></i> Exporter la base</a>
            <a href="#"><i class="fas fa-history"></i> Voir l'historique</a>
        </div>
 
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mukilan</td>
                    <td>mukilan@example.com</td>
                    <td>Admin</td>
                    <td class="actions">
                        <button><i class="fas fa-edit"></i> Modifier</button>
                        <button class="delete"><i class="fas fa-trash"></i> Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JeanDupont</td>
                    <td>jean@example.com</td>
                    <td>Utilisateur</td>
                    <td class="actions">
                        <button><i class="fas fa-edit"></i> Modifier</button>
                        <button class="delete"><i class="fas fa-trash"></i> Supprimer</button>
                    </td>
                </tr>
                <!-- Plus d'utilisateurs dynamiquement -->
            </tbody>
        </table>
    </div>
 
    <footer>
        <p>&copy; 2025 CyberPlatform Admin. Tous droits réservés.</p>
    </footer>
</body>
</html>
 
 
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gestion des Admins - CyberPanel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #0f0f0f, #00e6e6);
      color: #fff;
      animation: bgMove 15s ease-in-out infinite;
    }
 
    @keyframes bgMove {
      0% {background: linear-gradient(135deg, #0f0f0f, #00e6e6);}
      50% {background: linear-gradient(135deg, #111111, #009999);}
      100% {background: linear-gradient(135deg, #0f0f0f, #00e6e6);}
    }
 
    header {
      padding: 30px 20px;
      background: rgba(0,0,0,0.85);
      text-align: center;
      border-bottom: 2px solid #00ffff;
    }
 
    header h1 {
      font-family: 'Orbitron', sans-serif;
      font-size: 2.5rem;
      color: #00ffff;
      text-shadow: 0 0 10px #00ffff;
    }
 
    nav {
      display: flex;
      justify-content: space-around;
      background: rgba(0,0,0,0.9);
      padding: 15px 0;
    }
 
    nav a {
      color: #fff;
      text-decoration: none;
      font-size: 1rem;
      padding: 8px 16px;
      position: relative;
      transition: 0.3s;
    }
 
    nav a:hover,
    nav a.active {
      color: #00ffff;
    }
 
    nav a.active::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -5px;
      height: 2px;
      width: 100%;
      background: #00ffff;
    }
 
    .container {
      max-width: 1000px;
      margin: 30px auto;
      background: rgba(0,0,0,0.7);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0,255,255,0.3);
    }
 
    h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #00e6e6;
    }
 
    .admin-tools {
      margin-bottom: 20px;
      display: flex;
      justify-content: flex-start;
      flex-wrap: wrap;
    }
 
    .admin-tools a {
      background-color: #00bcd4;
      color: #fff;
      text-decoration: none;
      padding: 10px 15px;
      margin: 5px;
      border-radius: 5px;
      transition: 0.3s;
    }
 
    .admin-tools a:hover {
      background-color: #0097a7;
    }
 
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(0, 0, 0, 0.5);
    }
 
    th, td {
      padding: 12px;
      border-bottom: 1px solid #444;
      text-align: left;
    }
 
    th {
      color: #00e6e6;
    }
 
    .actions button {
      background: #1e90ff;
      border: none;
      color: #fff;
      padding: 6px 12px;
      margin-right: 5px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.9rem;
    }
 
    .actions .delete {
      background-color: #e63946;
    }
 
    .actions button:hover {
      opacity: 0.85;
    }
 
    footer {
      text-align: center;
      padding: 15px;
      font-size: 0.85rem;
      background: rgba(0, 0, 0, 0.9);
      margin-top: 40px;
    }
 
    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: center;
      }
 
      .admin-tools {
        flex-direction: column;
        align-items: flex-start;
      }
 
      .admin-tools a {
        width: 100%;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Gestion des Administrateurs</h1>
  </header>
 
  <nav>
    <a href="admin.html"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
    <a href="gestion_admin.html" class="active"><i class="fas fa-user-shield"></i> Gestion des admins</a>
    <a href="#"><i class="fas fa-cogs"></i> Paramètres</a>
    <a href="#"><i class="fas fa-database"></i> Sauvegardes</a>
    <a href="#"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
  </nav>
 
  <div class="container">
    <h2>Liste des Administrateurs</h2>
    <div class="admin-tools">
      <a href="#"><i class="fas fa-user-plus"></i> Ajouter un admin</a>
      <a href="#"><i class="fas fa-sync-alt"></i> Rafraîchir la liste</a>
    </div>
 
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Email</th>
          <th>Rôle</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mukilan</td>
          <td>mukilan@admin.com</td>
          <td>SuperAdmin</td>
          <td class="actions">
            <button><i class="fas fa-edit"></i> Modifier</button>
            <button class="delete"><i class="fas fa-trash"></i> Supprimer</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Sarah</td>
          <td>sarah@admin.com</td>
          <td>Admin</td>
          <td class="actions">
            <button><i class="fas fa-edit"></i> Modifier</button>
            <button class="delete"><i class="fas fa-trash"></i> Supprimer</button>
          </td>
        </tr>
        <!-- Ajouter dynamiquement d'autres admins -->
      </tbody>
    </table>
  </div>
 
  <footer>
    &copy; 2025 CyberPlatform Admin. Tous droits réservés.
  </footer>
</body>
</html>
 
 
