<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calc.php" method="POST">
        <input type="checkbox" id="strawberry" name="foods[]" value="Strawberry">
            <label for="strawberry">
                Strawberry
            </label>
        
            <input type="checkbox" id="melon" name="foods[]" value="Melon">
            
            <label for="melon">Melon</label>
        
            <input type="checkbox" id="watermelon" name="foods[]" value="watermelon">
            
            <label for="watermelon">Watermelon</label>
        <input type="submit" name="submit" value="submit">
    </form>    

</body>
</html>
<?php

    // $hours = 75;
    // $rate = 13;
    // $weekly_pay = null;
    // if ($hours <= 0){
    //     $weekly_pay = 0;
    // }
    
    // elseif($hours <= 40) {
    //     $weekly_pay = $hours * $rate;
    // } else {
    //     $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5)); 
    // }

    // echo "You made \${$weekly_pay} this week";

    for($i = 0; $i < 10; $i++) {
        echo "No. {$i} </br>";
    }
    $food = [
        'veggies' => [
            'cabbage',
            'carrot',
            'potato',
            'cucumber'
            ],
            'fruits' => [
                'watermelon',
                'melon',
                'strawberry',
                'banana'
                ]
            ];
            
    echo '<pre>';
        // var_dump($food);
        
        foreach($food as $category => $cat_food) {
            for ($i = 0; $i < count($cat_food); $i++) {
                echo "In category {$category} has {$cat_food[$i]} \n";
            }
        }

        $last_element = array_pop($food);
        var_dump($last_element);
        foreach($last_element as $fruit) {
            echo "{$fruit} was rotten \n";
        }
    echo '</pre>';

    var_dump($_POST);