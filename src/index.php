<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bills</title>
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://bootswatch.com/5/materia/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-warning" href="#">
                    <i class="fas fa-user-secret"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-info" href="#">Mes Factures
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-sm mb-5 mx-auto">
                <h1 class="fs-4 text-center lead text-warning"><strong>CRUD</strong></h1>
            </div>
        </div>
        <div class="dropdown-divider border-warning"></div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="fw-boldmb-0">Listes de factures</h5>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#createModal">
                        <i class="fas fa-folder-plus"></i> Ajouter
                    </button>
                    <a href="" class="btn btn-success btn-sm">
                        <i class="fas fa-table" id="export"></i> Exporter
                    </a>
                </div>
            </div>
        </div>
        <div class="dropdown-divider border-warning"></div>
        <div class="row mt-3">
            <table class="table table-hover table-responsive table-striped text-center" id="orderTable">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Client</th>
                    <th scope="col">Caissier</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Perçu</th>
                    <th scope="col">Retourné</th>
                    <th scope="col">État</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i=1; $i<100; $i++): ?>
                <tr class="table-light">
                    <th scope="row"><?=$i?></th>
                    <td>Datas</td>
                    <td>Datas</td>
                    <td>Datas</td>
                    <td>Datas</td>
                    <td>Datas</td>
                    <td>Datas</td>
                    <td>
                        <button class="btn btn-primary btn-sm me-3 infoBtn" title="consulter">
                            <i class="fas fa-info-circle"></i>
                        </button>
                        <button class="btn btn-warning btn-sm me-3 text-light editBtn" title="modifier">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btn-sm me-3 deleteBtn" title="supprimer">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <div class="dropdown-divider border-warning"></div>
    </section>

    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Nouvelle facture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="formOrder">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="customer" name="customer">
                            <label for="customer">Nom du client</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="cashier" name="cashier">
                            <label for="cashier">Nom du caissier</label>
                        </div>
                        <div class="row g-2">
                            <div class="col md">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="amount" name="amount">
                                    <label for="amount">Montant</label>
                                </div>
                            </div>
                            <div class="col md">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="receive" name="receive">
                                    <label for="receive">Perçu</label>
                                </div>
                            </div>
                            <div class="col md">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="state" id="state" name="state">
                                        <option value="Facturée">Facturée</option>
                                        <option value="Payée">Payée</option>
                                        <option value="Annulée">Annulée</option>
                                        <label for="state">État</label>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="create" name="create">Ajouter</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" ></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>