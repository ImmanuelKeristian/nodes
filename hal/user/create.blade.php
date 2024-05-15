<head>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Content Wrapper */
        .content-wrapper {
            margin: 20px;
        }

        /* Content Header */
        .content-header {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .content-header h1 {
            font-size: 24px;
            margin: 0;
        }

        /* Breadcrumb (Navbar) */
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin: 0;
        }

        .breadcrumb-item {
            display: inline-block;
            margin-right: 5px;
        }

        .breadcrumb-item a {
            color: #333;
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            text-decoration: underline;
        }

        .breadcrumb-item.active {
            color: #007bff;
        }


        /* Main Content */
        .content {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Card */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f8f9fa;
            padding: 10px;
        }

        .card-body {
            padding: 20px;
        }

        /* Table */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        /* Buttons */
        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-info {
            background-color: #17a2b8;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.8;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select {
            color: #555;
        }

        button[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kartu Keluarga</h1>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?menu=home">Home</a></li>
                            <li class="breadcrumb-item"><a href="?menu=kk">Kartu Keluarga</a></li>
                            <li class="breadcrumb-item"><a href="?menu=ctz">Penduduk</a></li>
                            <li class="breadcrumb-item"><a href="?menu=user">Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="card p-4">
                    <div class="card-body">
                        <form method="post" action="{{ route('user-store') }}">
                            <div class="form-group">
                                <label for="user-name">Nama</label>
                                <input type="text" class="form-control" id="user-name" placeholder="Contoh: John Doe"
                                    name="name" required autofocus maxlength="100">
                            </div>
                            <div class="form-group">
                                <label for="user-email">Email</label>
                                <input type="email" class="form-control" id="user-email"
                                    placeholder="Contoh: jdoe@domain.com" required name="name" maxlength="100">
                            </div>
                            <div class="form-group">
                                <label for="user-password">Password</label>
                                <input type="password" class="form-control" id="user-password"
                                    placeholder="Contoh: Your Secret Key" required name="password">
                            </div>
                            <div class="form-group">
                                <label for="user-password-conf">Confirm Password</label>
                                <input type="password" class="form-control" id="user-password-conf"
                                    placeholder="Contoh: Retype Your Secret Key" required name="password_confirmation">
                            </div>
                            <div class="form-group">
                                <label for="user-role">Role</label>
                                <select class="form-control" id="user-role" name="role">
                                    <option value="0" selected>--Select Role--</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
