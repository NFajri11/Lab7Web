<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<form action="" method="post">
    <br>
    <p>
        <label for="judul">Judul</label><br>
        <input type="text" name="judul" id="judul" value="<?= old('judul'); ?>" onfocus="clearText(this)" style="width: 100%;">
    </p>
    <p><br>
        <label for="isi">Isi</label><br>
        <textarea name="isi" id="isi" cols="50" rows="10" onfocus="clearText(this)" style="width: 100%;"></textarea>
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-large">
    </p>
</form>

<script>
    function clearText(element) {
        if (element.value === element.defaultValue) {
            element.value = '';
        }
    }
</script>

<?= $this->include('template/admin_footer'); ?>