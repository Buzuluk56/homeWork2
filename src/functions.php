<?php
    function task1()
    {
        $fileData = file_get_contents('data.xml');
        //var_dump($fileData);
        $xml = new SimpleXMLElement($fileData);
        //echo '<table border="1px solid black">';

        foreach ($xml->Address as $address) {
            echo "<b>Name: </b>" . $address->Name->__toString() . '<br>';
            echo "<b>Street: </b>" . $address->Street->__toString() . '<br>';
            echo "<b>City: </b>" . $address->City->__toString() . '<br>';
            echo "<b>State: </b>" . $address->State->__toString() . '<br>';
            echo "<b>Zip: </b>" . $address->Zip->__toString() . '<br>';
            echo "<b>Country: </b>" . $address->Country->__toString() . '<br>' . '<br>';
        }

        foreach ($xml->Items as $items) {
            foreach ($items as $key => $value) {
                echo "<b>ProductName: </b>" . $value->ProductName->__toString() . '<br>';
                echo "<b>Quantity: </b>" . $value->Quantity->__toString() . '<br>';
                echo "<b>USPrice: </b>" . $value->USPrice->__toString() . '<br>';
                echo "<b>Comment: </b>" . $value->Comment->__toString() . '<br>' . '<br>';
            }
        }
    }
    function task2(){
        $users=['Anton','Anton','Anton','Dima'];

         $a=json_encode($users);
         file_put_contents('output.json',$a); //сохраняем файл

        $file=file_get_contents('output.json'); // открываем файл
        $taskList = json_decode($file,TRUE);//строка в массив

        if (rand(0,1) == 1) {
           $file = file_get_contents('output.json');
            foreach ($users as $value)
            {
                for ($i=0;$i<count($users);$i++)
                {
                    $users[$i]= 'Dima';
                }
            }
            $a=json_encode($users);
            file_put_contents('output2.json',$a); //сохраняем файл
       } else {
           $b=json_encode($users);
            file_put_contents('output2.json',$b);
        }
        $file1=file_get_contents('output.json'); // открываем файл
        $taskList1 = json_decode($file1);//строка в массив

        $file2=file_get_contents('output2.json'); // открываем файл
        $taskList1 = json_decode($file2);//строка в массив

        $raz=array_diff($taskList,$taskList1);

        foreach ($raz as $value1)
        {
            echo $value1 . "<br>";
        }

    }
    function task3()
    {
        $arr=[];

        for($i=0;$i<50;$i++)
        {
            $arr[]=rand(1,100);
        }

        $a=json_encode($arr);
        file_put_contents('array.json',$a); //сохраняем файл

        $file3=file_get_contents('array.json'); // открываем файл
        $taskList = json_decode($file3,TRUE);//строка в массив

        echo "Сумма = " . array_sum($taskList) . "\n";


    }
    function task4()
    {
        $file4 = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json'); // открываем файл
        $array1=json_decode($file4,true);

        echo print_r($array1['query']);
    }

    echo task4();

