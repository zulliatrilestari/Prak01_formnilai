<?php

$Dt1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'assigment' => 78];
$Dt2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'assigment' => 68];
$Dt3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'assigment' => 70];
$Dt4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'assigment' => 82];
$Dt5 = ['id' => 5, 'nim' => $nim, 'uts' => $uts_score, 'uas' => $uas_score, 'assigment' => $assigment_score];

$ar_nilai = [$Dt1, $Dt2, $Dt3, $Dt4, $Dt5];

?>
<h3>List of Student Grades</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Assigment</th>
            <th>Final Score</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $num = 1;
        foreach ($ar_nilai as $DT) {
            echo '<tr><td>' . $num . '</td>';
            echo '<td>' . $DT['nim'] . '</td>';
            echo '<td>' . $DT['uts'] . '</td>';
            echo '<td>' . $DT['uas'] . '</td>';
            echo '<td>' . $DT['assigment'] . '</td>';
            $final_score = ($DT['uts'] + $DT['uas'] + $DT['assigment']) / 3;
            echo '<td>' . number_format($final_score, 2, ',', '.') . '</td>';
            echo '<tr/>';
            $num++;
        }
        ?>
    </tbody>
</table>