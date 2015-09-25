<?php
include 'top.php';

 //now print out each record
    $query = 'SELECT * FROM tblSections WHERE fldStart = "13:10" and fldBuilding = "Kalkin"';
    $info2 = $thisDatabaseReader->testquery($query, "", 1, 0, 2, 0, false, false);
    $columns=11;
    $highlight = 0; // used to highlight alternate rows
   
    print "<table>";
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done