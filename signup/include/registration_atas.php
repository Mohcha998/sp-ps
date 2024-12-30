<?php if (!empty($_GET['ref'])) { ?>
    <form method="post" id="form-asli" action="">
    <?php } else { ?>
        <form method="post" id="form-lp" action="#">
        <?php } ?>

        <input type="hidden" name="source" value="<?= isset($_GET['share']) ? $_GET['share'] : null; ?>">
        <input type="hidden" name="quantity" value="0">
        <input type="hidden" name="merch_id" value="0">
        <input type="hidden" name="id_program" value="1">
        <input type="hidden" name="subkategori_id" value="48">
        <input type="hidden" name="fighter_id" value="<?= isset($_GET['ref']) ? $_GET['ref'] : 'null'; ?>">
        <input type="hidden" name="redirect" value="http://127.0.0.1:3001/login" id="redirect_yt" />

        <div class="px-4 py-4 warna-bg-putih">
            <label for="nama" class="styling-label-form">Nama Lengkap (wajib diisi)</label>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="text" name="name" id="name" placeholder="Budi Setiawan"
                        class="form-control styling-form" required="">
                </div>
                <div class="col-md-12 mt-2 text-center" id="div-name-validation"
                    style="display: none;">
                    <span style="color: red;">Nama Lengkap harus diisi</span>
                </div>
            </div>

            <label for="phone" class="styling-label-form">HP (wajib diisi)</label>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="text" name="phone" id="hp" placeholder="+6289123456789"
                        class="form-control numeric styling-form" required=""
                        maxlength="15" autocomplete="disabled">
                </div>
                <div class="col-md-12 mt-2 text-center">
                    <span id="phone-validation-message"></span>
                </div>
            </div>

            <label for="email" class="styling-label-form">Email (wajib diisi)</label>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="email" name="email" id="email" placeholder="budi@gmail.com"
                        autocomplete="disabled" class="form-control styling-form" required="">
                </div>
                <div class="col-md-12 mt-2 text-center">
                    <span id="email-validation-message"></span>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <button type="button" class="btn btn-block styling-button"
                        id="btn-submit-atas-modal">
                        LANJUTKAN!</button>
                </div>
                <div class="col-md-12 mt-2">
                    <span>Informasi Anda terjamin 100% aman.</span>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal_sl_atas" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">PUBLIC SPEAKING</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="table_sl">
                        <table class="table namausiaanak" style="display:block">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" width="50%">Nama Anak</th>
                                    <th scope="col" class="text-center" width="50%">Usia Anak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="name_anak" id="name_anak" placeholder="Budi Setiawan"
                                            class="form-control styling-form" required="">
                                        <div class="text-center" id="div-name-validation-anak" style="display: none;">
                                            <span style="color: red;">Nama Lengkap Anak harus diisi</span>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="number" name="usia_anak" id="usia_anak" placeholder="12"
                                            class="form-control styling-form" required="">
                                        <div class="text-center" id="div-name-validation-usia" style="display: none;">
                                            <span style="color: red;">Usia Anak harus diisi</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-block styling-button"
                            id="btn-submit-atas">
                            LANJUTKAN!</button>
                        <button type="button" style="display: none;"
                            class="btn btn-block styling-button" id="btn-waiting">Mohon
                            Tunggu...</button>
                    </div>
                </div>
            </div>
        </div>
        </form>

        <script>
            document.getElementById('btn-submit-atas-modal').addEventListener('click', function() {
                const name = document.getElementById('name').value.trim();
                const phone = document.getElementById('hp').value.trim();
                const email = document.getElementById('email').value.trim();
                const id_program = document.getElementsByName('id_program')[0].value;
                const redirect = document.getElementById('redirect_yt').value;

                if (!name || !phone || !email) {
                    alert('Semua field wajib diisi!');
                    return;
                }

                const formData = {
                    name,
                    phone,
                    email,
                    id_program
                };

                const submitButton = document.getElementById('btn-submit-atas-modal');
                const waitingButton = document.getElementById('btn-waiting');

                submitButton.style.display = 'none';
                waitingButton.style.display = 'block';

                fetch('http://127.0.0.1:8000/api/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(formData),
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        alert('Data berhasil dikirim!');
                        window.location.href = redirect;
                    })
                    .catch(error => {
                        alert('Terjadi kesalahan saat mengirim data.');
                        console.error('Error:', error);
                    })
                    .finally(() => {
                        submitButton.style.display = 'block';
                        waitingButton.style.display = 'none';
                    });
            });
        </script>