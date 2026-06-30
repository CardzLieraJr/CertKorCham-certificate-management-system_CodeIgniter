<div class="wrapper">
<?php
            if (isset($show_table)) {
                echo "<div>";
                if ($show_table == 'Database is empty !') {
                    echo $show_table;
                } else {
                    echo '<caption>Table</caption><br/><br/>';
                    echo "<table>";
                    echo "<tr>
                            <th>RefNo</th>
                            <th>RefCode</th>
                            <th>Date</th>
                            <th>GoodsConsignedFrom</th>
                            <th>Address1</th>
                            <th>GoodsConsignedTo</th>
                            <th>Address2</th>
                            <th>PortOfLoading</th>
                            <th>PortOfDischarge</th>
                            <th>VesselName</th>
                            <th>DepartureDate</th>
                            <th>ItemNumber</th>
                            <th>Description</th>
                            <th>GrossWeight</th>
                            <th>InvoiceNumDate</th>
                        <tr/>";
                    foreach ($show_table as $value) {
                        echo "<tr>" .
                            "<td>" . $value->RefNo . "</td>" .
                            "<td>" . $value->RefCode . "</td>" .
                            "<td>" . $value->Date . "</td>" .
                            "<td>" . $value->GoodsConsignedFrom . "</td>" .
                            "<td>" . $value->Address1 . "</td>" .
                            "<td>" . $value->GoodsConsignedTo . "</td>" .
                            "<td>" . $value->Address2 . "</td>" .
                            "<td>" . $value->PortOfLoading . "</td>" .
                            "<td>" . $value->PortOfDischarge . "</td>" .
                            "<td>" . $value->VesselName . "</td>" .
                            "<td>" . $value->DepartureDate . "</td>" .
                            "<td>" . $value->ItemNumber . "</td>" .
                            "<td>" . $value->Description . "</td>" .
                            "<td>" . $value->GrossWeight . "</td>" .
                            "<td>" . $value->InvoiceNumDate . "</td>" .
                        "<tr/>";
                    }
                    echo '</table>';
                }
                echo "</div>";
            }
            ?>
</div>