<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <style>
        body {
    display: flex;
    min-height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4f4f4;
}

.sidebar {
    width: 250px;
    background: #4CAF50;
    color: white;
    padding: 15px;
    position: fixed;
    height: 100%;
}

.sidebar .logo {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 30px;
}

.sidebar .logo img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 20px;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

.sidebar ul li a i {
    margin-right: 10px;
}

.main-content {
    margin-left: 250px;
    padding: 20px;
    flex-grow: 1;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

header h1 {
    margin: 0;
}

.user-wrapper {
    display: flex;
    align-items: center;
}

.user-wrapper img {
    border-radius: 50%;
    margin-right: 10px;
}

.cards {
    display: flex;
    gap: 20px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    flex: 1;
}

.card-content h2 {
    margin: 0;
}

.card-content p {
    margin: 10px 0 0;
}

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../../assets/img/pdi.jpeg" alt="Logo">
            <h2>Koperasi Niggas</h2>
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-clipboard-list"></i> Kegiatan Koperasi</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Data Pegawai</a></li>
            <li><a href="#"><i class="fas fa-images"></i> Gallery</a></li>
            <li><a href="#"><i class="fas fa-concierge-bell"></i> Services</a></li>
            <li><a href="#"><i class="fas fa-user"></i> User Management</a></li>
            <li><a href="#"><i class="fas fa-cogs"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Admin Dashboard</h1>
            <div class="user-wrapper">
                <img src="../../assets/img/pdi.jpeg" alt="Admin" width="40px" height="40px">
                <div>
                    <h4>Admin Name</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <h2>Data 1</h2>
                        <p>Details about data 1</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h2>Data 2</h2>
                        <p>Details about data 2</p>
                    </div>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </main>
    </div>
</body>
</html>
