<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - MyShowz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #181818;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }
    .sidebar {
      min-height: 100vh;
      background: #23272b;
      padding-top: 1rem;
    }
    .sidebar .nav-link {
      color: #fff;
      margin-bottom: 1rem;
      border-radius: 0.5rem;
      transition: background 0.2s;
    }
    .sidebar .nav-link.active, .sidebar .nav-link:hover {
      background: #343a40;
      color: #00d8ff;
    }
    .dashboard-header {
      background: #23272b;
      padding: 1.5rem 2rem;
      border-radius: 0.75rem;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .dashboard-header .balance {
      font-size: 1.5rem;
      color: #00d8ff;
    }
    .card {
      background: #23272b;
      border: none;
      border-radius: 0.75rem;
      color: #fff;
    }
    .table {
      color: #fff;
    }
    .table th, .table td {
      vertical-align: middle;
    }
    .btn-primary {
      background: #00d8ff;
      border: none;
    }
    .btn-primary:hover {
      background: #00bcd4;
    }
    .modal-content {
      background: #23272b;
      color: #fff;
    }
    .form-control, .form-select {
      background: #181818;
      color: #fff;
      border: 1px solid #343a40;
    }
    .form-control:focus, .form-select:focus {
      border-color: #00d8ff;
      box-shadow: none;
    }
  </style>
</head>
<body>
@yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>