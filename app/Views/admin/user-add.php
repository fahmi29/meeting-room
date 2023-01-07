<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row ml-12 mt-4">
    <form action="<?= base_url('/admin/store') ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>User Management</h6>
                    </div>
                    <div class="card-body" style="padding: 4%">
                        <?php if (isset($validation)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name <b style="color: red">*</b></label>
                                <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Name" />
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email <b style="color: red">*</b></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="test@test.com" />
                            </div>

                            <div class="col-md-6">
                                <label for="username" class="form-label">Username <b style="color: red">*</b></label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" />
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password <b style="color: red">*</b></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="******" />
                            </div>
                        
                            <div class="col-md-6">
                                <label for="divisi" class="form-label">Divisiion <b style="color: red">*</b></label>
                                <select name="divisi" id="divisi" class="form-select">
                                    <option value="">--- Pick One ---</option>
                                    <?php foreach ($divisi as $divisis) : ?>
                                        <option value="<?= $divisis['id_divisi']; ?>"><?= $divisis['divisi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="jabatan" class="form-label">Position <b style="color: red">*</b></label>
                                <select name="jabatan" id="jabatan" class="form-select">
                                    <option value="">--- Pick One ---</option>
                                    <?php foreach ($jabatan as $jabatans) : ?>
                                        <option value="<?= $jabatans['id_jabatan']; ?>"><?= $jabatans['jabatan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3 mt-4">
                                <button type="button" onclick="save()" class="btn btn-sm btn-outline-success">Submit</button>
                                <button hidden type="submit" id="btn_save" class="btn btn-sm btn-success">Save</button>
                            </div>
                            <div class="mt-3">
                                <small style="font-size: 11px"><b>NOTE : This field is required (<b style="color: red">*</b>)</b></small> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>
<?= $this->section('javascript') ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript"> 

        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 1500);
        }); 

        function save(){
            var nama = $('#namalengkap').val();
            var email = $('#email').val();
            var user = $('#username').val();
            var pass = $('#password').val();
            var divisi = $('#divisi').val();
            var jabatan = $('#jabatan').val();
            if(nama == ''){
                Swal.fire("Failed!", "Nama harus diisi!", "info");    
            }else if(email == ''){
                Swal.fire("Failed!", "Email harus diisi!", "info");    
            }else if(user == ''){
                Swal.fire("Failed!", "Username harus diisi!", "info");    
            }else if(pass == ''){
                Swal.fire("Failed!", "Password harus diisi!", "info");    
            }else if(divisi == ''){
                Swal.fire("Failed!", "Divisi harus diisi!", "info");    
            }else if(jabatan == ''){
                Swal.fire("Failed!", "Jabatan harus diisi!", "info");    
            }else{
                Swal.fire({
                    title: "Save Changes",
                    text: "Do you want to save changes?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "Save",
                    cancelButtonText: "Cancel",
                }).then(function(e){
                    if(e.value === true){
                        $("#btn_save").trigger('click');
                    }
                });
            }
        }

    </script>
<?= $this->endSection(); ?>
