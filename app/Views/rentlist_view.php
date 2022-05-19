<?= $this->extend("base"); ?>


<?= $this->section("content"); ?>
<style>
    .card {
        box-shadow: 0 0 5px 0;
        background: inherit;
        backdrop-filter: blur(10px);
        /* margin: 100px; */

    }

    table {
        /* border: 1px solid #ccc; */
        border-collapse: collapse;
        margin: 0;
        padding: 0;

        width: 100%;
        table-layout: fixed;
    }

    table caption {
        font-size: 1.5em;
        margin: 0.5em 0 0.75em;
    }

    table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: 0.35em;
        background: inherit;
    }

    table th,
    table td {
        padding: 0.625em;
        text-align: center;
    }

    table th {
        font-size: 0.85em;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }

    @media screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        table tr {
            /* border-bottom: 3px solid #ddd; */
            display: block;
            margin-bottom: 0.625em;
        }

        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: 0.8em;
            /* text-align: right; */
        }

        table td::before {
            /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td:last-child {
            border-bottom: 0;
        }
    }

    /* general styling */
    body {
        font-family: "Open Sans", sans-serif;
        line-height: 1.25;
    }
</style>

<!-- ======= Hero Section ======= -->
<section id="about">
    <br>
    <br>
    <div class="row">
        <div class="col-lg-8">
            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                <div class="container">
                    <div class="card card-body">
                        <Table>
                            <tr>
                                <td rowspan="4"><img height="250px" width="250px" src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Renault/Kiger/8364/1648113940854/front-left-side-47.jpg" alt="..." class="img-thumbnail"></td>

                                <head colspan="2">
                                    <p>RENAULT KiGER</p>
                                </head>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>Price: <strong> ₹ 750/Day </strong> </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>BHUBANESWAR, ODiSHA</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a class="buy-tickets scrollto">Login</a></td>

                            </tr>
                        </Table>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="card card-body">
                        <Table>
                            <tr>
                                <td rowspan="4"><img height="250px" width="250px" src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Honda/City/6909/1645419537509/front-left-side-47.jpg?tr=w-456" alt="..." class="img-thumbnail"></td>

                                <head colspan="2">
                                    <p>HONDA CiTY</p>
                                </head>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>Price: <strong> ₹ 850/Day</strong> </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>NAGPUR, MAHARASHTRA</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a class="buy-tickets scrollto">Login</a></td>

                            </tr>
                        </Table>
                    </div>
                </div>
                <br>

                <div class="container">
                    <div class="card card-body">
                        <Table>
                            <tr>
                                <td rowspan="4"><img height="250px" width="250px" src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maruti/Alto-800/7072/1650542631570/front-left-side-47.jpg?tr=w-456" alt="..." class="img-thumbnail"></td>

                                <head colspan="2">
                                    <p>MARUTi ALTO 800</p>
                                </head>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>Price: <strong> ₹ 550/Day</strong> </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>AGRA, DELHi</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a class="buy-tickets scrollto">Login</a></td>

                            </tr>
                        </Table>
                    </div>
                </div>
            </div>
            <br><br>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3">
            <div class="card card-body">
                <p> Sort By :
                <div class="btn-group">

                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section><!-- End Hero Section -->

<?= $this->endSection(); ?>