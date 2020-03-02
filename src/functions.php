<?php
    $fileData = file_get_contents('data.xml');
    //var_dump($fileData);
    $xml = new SimpleXMLElement($fileData);
    //echo '<table border="1px solid black">';

    foreach ($xml->Address as $address)
    {
        echo "<b>Name: </b>".$address->Name->__toString().'<br>';
        echo "<b>Street: </b>".$address->Street->__toString().'<br>';
        echo "<b>City: </b>".$address->City->__toString().'<br>';
        echo "<b>State: </b>".$address->State->__toString().'<br>';
        echo "<b>Zip: </b>".$address->Zip->__toString().'<br>';
        echo "<b>Country: </b>".$address->Country->__toString().'<br>'.'<br>';

        foreach ($xml->Items as $items)
        {
            foreach ($items as $key=>$value ){
                echo "<b>ProductName: </b>".$value->ProductName->__toString().'<br>';
                echo "<b>Quantity: </b>".$value->Quantity->__toString().'<br>';
                echo "<b>USPrice: </b>".$value->USPrice->__toString().'<br>';
                echo "<b>Comment: </b>".$value->Comment->__toString().'<br>'.'<br>';
            }
        }

    }
