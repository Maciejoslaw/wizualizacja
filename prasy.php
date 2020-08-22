<?php
if($row['cykle']<72)
{
    echo '<table class="ok">';
}
           
else if($row['cykle']> 72)
{
    echo '<table class="zle">';
}

echo '<tr>
        <th colspan="4">'.$row['nazwa'].'</th>
        </tr>
        <tr>
        <td title="Pierścienie">'.$row['ppd'].'</td>
        <td rowspan="2" colspan="2" title="Membrana">'.$row['membrana'].'</td>
        <td title="Pierścienie">'.$row['plg'].'</td>
        </tr>
        <tr>
        <td title="Pierścienie">'.$row['mulmax'].'</td>
        <td title="Pierścienie"> '.$row['balast'].'</td>
        </tr>
        <tr>
        <td colspan="2" title="Cykle">'.$row['cykle'].'</td>
        <td colspan="2" title="Czas">36h</td>
        </tr>

        </table>';
?>
