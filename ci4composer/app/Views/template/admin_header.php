<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="<?= base_url('admin.css'); ?>">
</head>

<body>
    <h1>Admin Portal Berita</h1>
    <header>
        <nav>
            <ul>
                <li class="dash"><a href="#">Dashboard</a></li>
                <li><a href="<?= base_url('/admin/artikel'); ?>">Daftar Artikel</a></li>
                <li><a href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a></li>
            </ul>
        </nav>
    </header>
    <main>