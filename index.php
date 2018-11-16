<h3>Received request headers</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Value</th>
    </tr>
<?php
foreach (apache_request_headers() as $name => $value) {
?>
    <tr>
        <td><?= $name ?></td>
        <td><?= $value ?></td>
    </tr>
<?php
}
?>
</table>

<?php
header('Content-Type: text/html');
header('Connection: close');
header('X-Test-Header: Test-Value');
?>
<h3>Response headers</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Value</th>
    </tr>
<?php
foreach (apache_response_headers() as $name => $value) {
?>
    <tr>
        <td><?= $name ?></td>
        <td><?= $value ?></td>
    </tr>
<?php
}
?>
</table>
