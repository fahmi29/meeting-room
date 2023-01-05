<?= $this->extend('layout/pageLayout') ?>

<?= $this->section('content') ?>
<div class="row pt-4">
    <div class="col-md-12">
        <div class="card b-orange mb-4 ml-6 radius">
            <div class="card-body">
                <div class="card bg-white p-4 radius">
                    <form class="row g-3">
                        <div class="col-auto">
                            <label for="staticEmail2" class="visually-hidden">Date From</label>
                            <input type="date" class="form-control" id="datefrom" />
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2" class="visually-hidden">Date To</label>
                            <input type="date" class="form-control" id="dateto" />
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-outline-ligth border-orange">Filter</button>
                            <button class="btn btn-ligth bg-orange">Export</button>
                            <a href="/admin/add-user" class="btn btn-outline-primary">Add Ruangan</a>
                        </div>
                    </form>
                    <table id="datauser" class="table table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Ruangan</th>
                                <th>Kapasitas</th>
                                <th>Fasilitas</th>
                                <!-- <th>Gambar</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($room as $key => $ruang) : ?>
                                <tr>
                                    <td><?= $key ?></td>
                                    <td><?= $ruang['namaruang'] ?></td>
                                    <td><?= $ruang['kapasitas'] ?></td>
                                    <td><?= $ruang['fasilitas'] ?></td>
                                    <!-- <td><?= $ruang['gambar'] ?></td> -->
                                    <td>
                                        <a href="/admin/edit-room/<?= $ruang['id_ruangan'];?>" class="btn btn-outline-secondary no-border"><svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.34421 17.2437L17.25 9.1123L13.0199 5.25005L4.11413 13.3814C3.99152 13.4935 3.90443 13.6338 3.86208 13.7874L2.875 18.375L7.89858 17.4738C8.06725 17.4353 8.22154 17.3557 8.34421 17.2437ZM20.125 6.4873C20.4843 6.15912 20.6862 5.71408 20.6862 5.25005C20.6862 4.78601 20.4843 4.34097 20.125 4.0128L18.6051 2.62505C18.2457 2.29697 17.7582 2.11267 17.25 2.11267C16.7418 2.11267 16.2543 2.29697 15.8949 2.62505L14.375 4.0128L18.6051 7.87505L20.125 6.4873Z" fill="#56F253" />
                                            </svg>
                                        </a>
                                        <button class="btn btn-outline-secondary no-border"><svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5001 2.95313C12.2753 2.9531 13.0203 3.22753 13.5785 3.71871C14.1366 4.2099 14.4644 4.87956 14.493 5.58688L14.4949 5.68794L17.7292 5.6875C17.9456 5.68759 18.1535 5.76402 18.3096 5.90083C18.4657 6.03764 18.5578 6.22423 18.5667 6.4216C18.5756 6.61897 18.5006 6.81185 18.3574 6.95991C18.2142 7.10798 18.0139 7.19978 17.7983 7.21612L17.7292 7.21875H17.1701L16.3905 16.6556C16.3518 17.1232 16.1211 17.5602 15.7445 17.879C15.3679 18.1978 14.8733 18.375 14.3597 18.375H8.64041C8.12685 18.375 7.63225 18.1978 7.25567 17.879C6.8791 17.5602 6.64837 17.1232 6.60971 16.6556L5.82962 7.21875H5.27091C5.06039 7.21873 4.85758 7.14642 4.70276 7.01617C4.54795 6.88592 4.45245 6.70726 4.43525 6.51569L4.43237 6.45312C4.43239 6.26091 4.51159 6.07573 4.65425 5.93438C4.79691 5.79302 4.99258 5.70583 5.20239 5.69012L5.27091 5.6875H8.50529C8.50529 4.24462 9.72956 3.0625 11.2816 2.96012L11.3904 2.95488L11.5001 2.95313ZM13.297 8.64062C13.1487 8.64056 13.0056 8.69072 12.8955 8.7814C12.7854 8.87208 12.7161 8.99682 12.7009 9.1315L12.698 9.1875V14.4375L12.7009 14.4935C12.7154 14.6286 12.7845 14.754 12.8947 14.8452C13.0049 14.9363 13.1483 14.9869 13.297 14.9869C13.4457 14.9869 13.5891 14.9363 13.6992 14.8452C13.8094 14.754 13.8785 14.6286 13.893 14.4935L13.8959 14.4375V9.1875L13.893 9.1315C13.8779 8.99682 13.8085 8.87208 13.6984 8.7814C13.5883 8.69072 13.4452 8.64056 13.297 8.64062ZM9.70321 8.64062C9.55492 8.64056 9.41189 8.69072 9.30178 8.7814C9.19167 8.87208 9.12231 8.99682 9.10712 9.1315L9.10425 9.1875V14.4375L9.10712 14.4935C9.12168 14.6286 9.19076 14.754 9.30094 14.8452C9.41111 14.9363 9.5545 14.9869 9.70321 14.9869C9.85191 14.9869 9.9953 14.9363 10.1055 14.8452C10.2157 14.754 10.2847 14.6286 10.2993 14.4935L10.3022 14.4375V9.1875L10.2993 9.1315C10.2841 8.99682 10.2147 8.87208 10.1046 8.7814C9.99452 8.69072 9.85149 8.64056 9.70321 8.64062ZM11.5806 4.48656L11.5001 4.48438C11.1645 4.48436 10.8416 4.60123 10.5972 4.81114C10.3528 5.02105 10.2053 5.3082 10.1848 5.614L10.1824 5.68794L12.8178 5.6875C12.8178 5.38112 12.6898 5.08628 12.4599 4.86312C12.23 4.63996 11.9155 4.50528 11.5806 4.48656Z" fill="#FF3C00" />
                                            </svg>
                                        </button>
                                        <button class="btn btn-outline-secondary no-border"><svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.9833 5.60694C8.14955 5.63626 7.39582 5.90794 6.99284 6.27632C6.94832 6.31694 6.89547 6.34915 6.83732 6.37113C6.77916 6.3931 6.71684 6.4044 6.6539 6.40438C6.59096 6.40436 6.52864 6.39302 6.47051 6.37101C6.41237 6.349 6.35955 6.31675 6.31506 6.2761C6.27057 6.23545 6.23529 6.1872 6.21122 6.1341C6.18716 6.081 6.17478 6.0241 6.1748 5.96663C6.17483 5.90917 6.18725 5.85227 6.21135 5.79919C6.23546 5.7461 6.27078 5.69787 6.3153 5.65725C6.93678 5.08982 7.94878 4.76782 8.94592 4.73238C9.94978 4.69694 11.0456 4.94763 11.8133 5.64851C11.9031 5.7306 11.9536 5.84192 11.9535 5.95797C11.9535 6.07403 11.9029 6.18531 11.813 6.26735C11.7231 6.34938 11.6012 6.39545 11.4741 6.39541C11.347 6.39537 11.2251 6.34922 11.1352 6.26713C10.6129 5.78982 9.81082 5.57719 8.9833 5.6065V5.60694Z" fill="#6534AA" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8652 11.9805C14.8153 10.9554 15.3356 9.65541 15.3333 8.3125C15.3333 5.17125 12.5446 2.625 9.10417 2.625C5.66375 2.625 2.875 5.17125 2.875 8.3125C2.875 11.4538 5.66375 14 9.10417 14C10.6351 14 12.0367 13.496 13.1215 12.6595L12.9375 13.6255L16.538 16.9129L18.5236 15.0999L14.9232 11.8125L13.8652 11.9805ZM9.10417 12.6875C11.7506 12.6875 13.8958 10.7288 13.8958 8.3125C13.8958 5.89619 11.7506 3.9375 9.10417 3.9375C6.45773 3.9375 4.3125 5.89619 4.3125 8.3125C4.3125 10.7288 6.45773 12.6875 9.10417 12.6875Z" fill="#6534AA" />
                                                <path d="M17.2156 17.5315L19.2012 15.7185L19.851 16.3118C20.2166 16.6456 20.2166 17.1868 19.851 17.5201L19.1888 18.1248C18.8232 18.4586 18.2305 18.4586 17.8653 18.1248L17.2156 17.5315Z" fill="#6534AA" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript') ?>
<script>
    $(document).ready(function() {
        var table = $('#datauser').DataTable({
            responsive: true,
            lengthChange: false
        });

        new $.fn.dataTable.FixedHeader(table);

        $('.dataTables_filter').addClass('pull-left');
    });
</script>
<?= $this->endSection(); ?>