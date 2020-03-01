<?php
    $fileData = file_get_contents('data.xml');
    //var_dump($fileData);
    $xml = new SimpleXMLElement($fileData);
    //echo '<table border="1px solid black">';
    echo '<table border="1">';
    foreach ($xml->Address as $address)
    {
        echo "<tr><td><b>Name</b></td>"."<td><b>Street</td>"."<td><b>City</td>".
             "<td><b>State</td>"."<td><b>Zip</td>"."<td><b>Country</td>"."</tr><br>";
        echo "<tr><td>$address->Name</b></td>";
        echo "<td>$address->Street</td>";
        echo "<td>$address->City</td>";
        echo "<td>$address->State</td>";
        echo "<td>$address->Zip</td>";
        echo "<td>$address->Country</td></tr>";
    }

    foreach ($xml->Items as $items)
    {
        foreach ($items as $key=>$value ){
            echo $value->ProductName->__toString().'<br>';
            echo $value->Quantity->__toString().'<br>';
            echo $value->USPrice->__toString().'<br>';
            echo $value->Comment->__toString().'<br>'.'<br>';
        }
    }
    echo '</table>';