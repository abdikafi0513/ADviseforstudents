<?php
session_start();
?>

<h2>Admin Table</h2>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"></head>
<link rel="stylesheet" href="styles/admin.css">


<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div>
        <div class="navbar-nav">
                <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="http://abdikafi.greenriverdev.com/advise-pro/"><h1>Home</h1></a>
            <a class="nav-item nav-link" href="http://abdikafi.greenriverdev.com/advise-pro/planning"><h1>Planner</h1></a>

        </div>
        </nav>
<h4 class="text-center mt-b">welcome to admin page</h4>

<div>
    <!-- table with dark head and repeated rows -->
    <table  class="table table-striped table-bordered table-responsive-md">

        <thead class="thead-dark">
        <tr>
            <th>token</th>
            <th>fall</th>
            <th>winter</th>
            <th>spring</th>
            <th>summer</th>
            <th>advisor</th>
            <th>lastUpdate</th>

        </tr>
        </thead>

        <tbody>
        <!-- using the repeat block for rows -->
        <repeat group="{{@persons}}" value="{{@person}}">
            <tr>
                <th>{{@person.token}}</th>
                <td>{{@person.fall}}</td>
                <td>{{@person.winter}}</td>
                <td>{{@person.spring}}</td>
                <td>{{@person.summer}}</td>
                <td>{{@person.advisor}}</td>
                <td>{{@person.lastUpdate}}</td>
                <td><a href='planning.php?token={{@person.token}}'>$token</a></td>




            </tr>
        </repeat>
        </tbody>
    </table>
</div>

</table>


<script>
    $('#admin').DataTable(
        {
            responsive: true
        }
    );
</script>

<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

