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
        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            /* Allow vertical resizing of textarea */
        }

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
                    <h1 class="m-0">Tambah Penduduk</h1>
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
                        <form method="post" action="{{ route('ctz-store') }}">
                            <div class="form-group row">
                                <label for="ctz-nik" class="col-form-label col-sm-2">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ctz-nik"
                                        placeholder="Contoh: 3171021415230005" name="nik" required autofocus
                                        maxlength="16">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-nama" class="col-form-label col-sm-2">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ctz-nama"
                                        placeholder="Contoh: John Doe" name="nama" required maxlength="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-alamat" class="col-form-label col-sm-2">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="ctz-alamat" name="alamat" placeholder="Contoh: Jl Asia Afrika No. 12"
                                        maxlength="300"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-tgl" class="col-form-label col-sm-2">Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="date" id="ctz-tgl" name="tgl_lahir" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-agama" class="col-form-label col-sm-2">Agama</label>
                                <div class="col-sm-4">
                                    <select id="ctz-agama" name="agama" required class="form-control">
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-goldar" class="col-form-label col-sm-2">Golongan Darah</label>
                                <div class="col-sm-4">
                                    <select id="ctz-goldar" name="gol_darah" required class="form-control">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                        <option value="AB">AB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-kk" class="col-form-label col-sm-2">Nomor KK</label>
                                <div class="col-sm-8">
                                    <select id="ctz-kk" name="kartu_keluarga_no" required
                                        class="form-control select2">
                                        <option value="{{ $kk->no }}">1875697555482*</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
