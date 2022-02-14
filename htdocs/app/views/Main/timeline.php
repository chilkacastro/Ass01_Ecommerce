<?php
    $SITENAME="MAIN: TIMELINE";
?>

<?php require APPROOT . '/views/includes/header.php'; ?>
    <br>
    <table class="table">
        <thead class>
            <tr>
                <th scope="col">Student Name</th>
                <th scope="col">Student ID</th>
                <th scope="col">Task</th>
                <th scope="col">Timeline</th>
            </tr>
            <tbody>
                <tr scope="row">
                    <td>John</td>
                    <td>123456</td>
                    <td>Front-end Programming</td>
                    <td>2 weeks</td>
                </tr>
                <tr scope="row">
                    <td>Mary</td>
                    <td>223456</td>
                    <td>PHP Routing</td>
                    <td>1 weeks</td>
                </tr>
                <tr scope="row">
                    <td>July</td>
                    <td>323456</td>
                    <td>PHP MVC Application</td>
                    <td>2 weeks</td>
                </tr>
            </tbody>
    </table>
<?php require APPROOT . '/views/includes/footer.php'; ?>