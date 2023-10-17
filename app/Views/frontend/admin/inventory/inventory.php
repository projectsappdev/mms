<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/_components/basic/header.php') ?>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        <?= $this->include('frontend/_components/admin/sidebar.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?= $this->include('frontend/_components/admin/navbar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-3 grid-margin">
                            <button class="btn btn-sm btn-secondary" type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Search filter product"> <i class="mdi mdi-filter"></i>Filter</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-circle btn-outline-secondary"> <i class="mdi mdi-plus"></i></button>
                    <div class="row filter-input">
                        <div class="col-4 ">
                            <div class="form-group">
                                <input type="text" placeholder="Search by Category" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" placeholder="Search by Product" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row" >
                                <div class="col-6">
                                    <input type="text" placeholder="Search by Product" name="" id="" class="form-control">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Search by Product" name="" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0">
                        <div class="col-8 grid-margin"></div>
                        <div class="col grid-margin text-end"><button type="button" class="btn btn-outline-success" aria-haspopup="true" aria-expanded="false">Search</button></div>
                    </div>
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Track Inventory</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <th> Product Name</th>
                                                    <th> Category</th>
                                                    <th> Stock </th>
                                                    <th>Sold</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <span class="ps-2">HalleJ Glass</span>
                                                    </td>
                                                    <td> Float Glass </td>
                                                    <td> 120 </td>
                                                    <td> 413 </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary " type="button" aria-haspopup="true" aria-expanded="false">View</button>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <span class="ps-2">Grame</span>
                                                    </td>
                                                    <td> Labanette Glass </td>
                                                    <td> 23 </td>
                                                    <td> 1900 </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary " type="button" aria-haspopup="true" aria-expanded="false">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <span class="ps-2">Granite Glass</span>
                                                    </td>
                                                    <td> Wooden Glass </td>
                                                    <td> 120 </td>
                                                    <td> 41 </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary " type="button" aria-haspopup="true" aria-expanded="false">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <span class="ps-2">Brownies</span>
                                                    </td>
                                                    <td> Float Glass </td>
                                                    <td> 12 </td>
                                                    <td> 27 </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary" type="button" aria-haspopup="true" aria-expanded="false">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <span class="ps-2">Lorem ipsum</span>
                                                    </td>
                                                    <td> Gg Glass </td>
                                                    <td> 7 </td>
                                                    <td> 23 </td>

                                                    <td>
                                                        <div class="form-group">

                                                            <button class="btn btn-sm btn-outline-primary " type="button" aria-haspopup="true" aria-expanded="false">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?= $this->include('frontend/_components/basic/footer.php') ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?= $this->include('frontend/_components/basic/script.php') ?>
    <?= $this->include('frontend/admin/product/modals/add_product.php') ?>


</body>


</html>