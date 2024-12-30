<?php if (!empty($_GET['ref'])) { ?>
    <form method="post" id="form-asli-bawah" action="https://127.0.0.1:8000/prospect">
    <?php } else { ?>
        <form method="post" id="form-lp-bawah" action="#">
        <?php } ?>

        <input type="hidden" name="source" value="<?php echo $_GET['share']; ?>">
        <input type="hidden" name="program" id="program" value="1">

        <div class="px-4 py-4 warna-bg-putih">
            <label for="nama" class="styling-label-form">Nama Lengkap (wajib diisi)</label>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="text" name="name" id="name-bawah" placeholder="Budi Setiawan"
                        class="form-control styling-form" onkeyup="nameValidationBawah()"
                        required="">
                </div>
                <div class="col-md-12 mt-2 text-center" id="div-name-validation-bawah"
                    style="display: none;">
                    <span style="color: red;">Nama Lengkap harus diisi</span>
                </div>
            </div>

            <label for="phone" class="styling-label-form">HP (wajib diisi)</label>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="text" name="phone" id="hp-bawah"
                        placeholder="+6289123456789"
                        class="form-control numeric styling-form" required=""
                        onkeypress="phoneValidationBawah()" onkeyup="phoneValidationBawah()"
                        maxlength="15" autocomplete="disabled">
                    <input type="hidden" id="phone-value-validation-bawah" value="false">
                    <input type="hidden" name="country-code" id="country-code-bawah" value="">
                </div>
                <div class="col-md-12 mt-2 text-center">
                    <span id="phone-validation-message-bawah"></span>
                </div>
            </div>
            <div class="mb-3" style="display: none;">
                <div>
                    <input type="text" name="phone" id="hp" placeholder="No WA"
                        class="form-control numeric" required=""
                        onkeypress="phoneValidation()" onkeyup="phoneValidation()" maxlength="15"
                        autocomplete="disabled">
                    <input type="hidden" id="phone-value-validation" value="false">
                    <input type="hidden" name="country-code" id="country-code" value="">
                </div>
                <div class="col-md-12 mt-2 text-center">
                    <span id="phone-validation-message"></span>
                </div>
            </div>

            <label for="email" class="styling-label-form">Email (wajib diisi)</label>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="email" name="email" id="email-bawah" placeholder="budi@gmail.com"
                        autocomplete="disabled" onkeyup="emailValidationBawah()"
                        class="form-control styling-form" required="">
                    <input type="hidden" id="email-value-validation-bawah" value="false"></input>
                </div>
                <div class="col-md-12 mt-2 text-center">
                    <span id="email-validation-message-bawah"></span>
                </div>
            </div>

            <label for="source" class="styling-label-form">Source</label>
            <div class="row mb-3">
                <div class="col-md-12">
                    <select name="source" id="source" class="form-control" style="height:72px; font-family:'Nunito Sans', Sans-serif; font-size:24px">
                        <option selected value="">- PILIH - </option>
                        <option value="MR">Social Media @MerryRiana</option>
                        <option value="ig">Instagram @merryrianalearningcentre</option>
                        <option value="iklan">Iklan</option>
                        <option value="google">Google</option>
                        <option value="wa">WhatsApp</option>
                        <option value="email">Email</option>
                        <option value="other">Others</option>
                    </select>
                </div>

                <div class="px-4 py-4 warna-bg-putih">
                    <label for="invitional" class="styling-label-form">Kode Invitasi</label>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="text" name="invite" id="invitional-code" placeholder="Isi Kode Invitasi Yang diberikan"
                                class="form-control styling-form"
                                autocomplete="disable">
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-12">
                            <label for="labelcta" class="styling-label-form">Apakah Anda ingin anak Anda belajar dari Ms. Merry Riana?</label>
                            <button type="button" class="btn btn-block styling-button"
                                disabled
                                id="btn-modal-bawah" data-target="#modal_psa_bawah" data-toggle="modal">
                                Ya Saya Mau!</button>
                            <!--<button type="button" class="btn btn-block styling-button"
                        disabled
                    style="display: none;"
                    id="btn-waiting-bawah">
                    Mohon Tunggu...</button>-->
                        </div>
                        <div class="col-md-12 mt-2">
                            <span>Informasi Anda terjamin 100% aman.</span>
                        </div>

                    </div>
                    <!--<div style="text-align: center; display: none;" class="free-ticket">
            <div style="color: #ae0001; font-weight: 700">Free 1 Ticket Online Inspirafest 2022 (senilai Rp.100.000)</div>
            <div style="color: #ae0001;">* Jika melakukan pembayaran s/d tanggal 10 Agustus 2022 pk 23:59 WIB</div>
        </div>-->
                </div>

                <div class="modal fade" id="modal_psa_bawah" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sesi Perkenalan MERRY RIANA SCHOOL OF PUBLIC SPEAKING</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="table_psa_bawah">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center" width="200">Pilih Cabang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td id="response">
                                            <select class="form-control psa_bawah" id="cabang" name="cabang" required>
                                                <option value="">Select</option>
                                            </select>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <label for="labelcta" class="styling-label-form">Apakah Anda ingin anak Anda belajar dari Ms. Merry Riana?</label>
                                <button type="button" class="btn btn-block styling-button"
                                    onclick="submitForm()"
                                    disabled
                                    id="btn-submit-bawah">Ya Saya Mau!</button>
                                <button type="button" class="btn btn-block styling-button"
                                    disabled
                                    style="display: none;"
                                    id="btn-waiting-bawah">
                                    Mohon Tunggu...</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

        <script>
            const apiEndpoint = "http://127.0.0.1:8000/api/branches";

            const cabangSelect = document.getElementById('cabang');
            const submitButton = document.getElementById('btn-submit-bawah');

            async function fetchCabangData() {
                try {
                    const response = await fetch(apiEndpoint);
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    const data = await response.json();

                    cabangSelect.innerHTML = '<option value="">Select</option>';

                    data.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.id;
                        option.textContent = `${item.name}, ${item.kota}`;
                        cabangSelect.appendChild(option);
                    });

                    enableSubmitButton();
                } catch (error) {
                    console.error('Error fetching cabang data:', error);
                }
            }

            function enableSubmitButton() {
                if (cabangSelect.value) {
                    submitButton.disabled = false;
                } else {
                    submitButton.disabled = true;
                }
            }

            cabangSelect.addEventListener('change', enableSubmitButton);

            document.addEventListener('DOMContentLoaded', fetchCabangData);

            async function submitForm() {
                const apiSubmitEndpoint = "http://127.0.0.1:8000/api/form-submit";
                const invitationalCodeInput = document.getElementById('invitional-code').value;
                const name = document.getElementById('name-bawah').value;
                let phone = document.getElementById('hp-bawah').value;
                const email = document.getElementById('email-bawah').value;
                const source = document.getElementById('source').value;
                const program = document.getElementById('program').value;
                const cabangValue = cabangSelect.value;

                phone = phone.replace('+', '');

                const formData = {
                    name: name,
                    phone: phone,
                    email: email,
                    source: source,
                    id_cabang: cabangValue,
                    id_program: program,
                    invitional_code: invitationalCodeInput || null
                };

                try {
                    const response = await fetch(apiSubmitEndpoint, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(formData),
                    });

                    if (!response.ok) {
                        throw new Error(`Error submitting data: ${response.status}`);
                    }

                    const result = await response.json();

                    if (result.error) {
                        alert(result.error);
                        return;
                    }

                    if (result.redirect) {
                        window.location.href = result.redirect;
                    } else if (result.invoice_link) {
                        window.open(result.invoice_link, '_blank');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert("Terjadi kesalahan saat mengirim data atau pesan.");
                }
            }
        </script>