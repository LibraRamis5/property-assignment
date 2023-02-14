<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Average Request Time Details</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

</head>

<body class='container mt-5'>

    <div class="text-center m-3">
        <h2>Daily Average Request Time Details Grouped In Quarters </h2>
    </div>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="Q1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Q1"
                    aria-expanded="true" aria-controls="Q1">
                    Quarter 1
                </button>
            </h2>
            <div id="Q1" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table id="table1" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Even</th>
                                <th>Prime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dataQ1 as $item) {
            echo '<tr>';
            echo '<td>' . $item['date'] . '</td>';
            echo '<td>' . $item['even'] . '</td>';
            echo '<td>' . $item['prime'] . '</td>';
            echo '</tr>';
           } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="Q2">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Q2"
                    aria-expanded="true" aria-controls="Q2">
                    Quarter 2
                </button>
            </h2>
            <div id="Q2" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table id="table2" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Even</th>
                                <th>Prime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dataQ2 as $item) {
            echo '<tr>';
            echo '<td>' . $item['date'] . '</td>';
            echo '<td>' . $item['even'] . '</td>';
            echo '<td>' . $item['prime'] . '</td>';
            echo '</tr>';
           } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Q3"
                    aria-expanded="true" aria-controls="Q3">
                    Quarter 3
                </button>
            </h2>
            <div id="Q3" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table id="table3" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Even</th>
                                <th>Prime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dataQ3 as $item) {
            echo '<tr>';
            echo '<td>' . $item['date'] . '</td>';
            echo '<td>' . $item['even'] . '</td>';
            echo '<td>' . $item['prime'] . '</td>';
            echo '</tr>';
           } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Q4"
                    aria-expanded="true" aria-controls="Q4">
                    Quarter 4
                </button>
            </h2>
            <div id="Q4" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table id="table4" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Even</th>
                                <th>Prime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dataQ4 as $item) {
            echo '<tr>';
            echo '<td>' . $item['date'] . '</td>';
            echo '<td>' . $item['even'] . '</td>';
            echo '<td>' . $item['prime'] . '</td>';
            echo '</tr>';
           } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#table1').DataTable();
        });
        $(document).ready(function () {
            $('#table2').DataTable();
        });
        $(document).ready(function () {
            $('#table3').DataTable();
        });
        $(document).ready(function () {
            $('#table4').DataTable();
        });

    </script>
</body>

</html>