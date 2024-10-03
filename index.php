<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <?php include "header.php"; ?>
    <?php include "page.php"; ?> -->

    <?php echo "Hello World" ?>
    <?php print "Hello Son" ?>

    <?php $login = true;
    if ($login === true) {
        echo "Login Succfull";
    } else {
        echo "Try again to login";
    } ?>

    <?php $name = "Nandakishore";
    echo $name ?>

    <?php $phoneNumber = 7893797371;
    echo strlen($phoneNumber) ?>

    <?php $phoneNumber = 7893797371;
    echo strrev($phoneNumber) ?>

    <?php $phoneNumber = 7893797371;
    echo var_dump((string) $phoneNumber) ?>

    <?php $age = "25";
    echo (int) $age ?>

    <?php echo pi();
    echo rand(1, 5); ?>

    <?php echo abs(-33); ?>
    <?php echo -33; ?>
    <?php echo -33; ?>
    <?php $Name = "Kishore";
    echo "Nanda" . $Name;
    ?>

    <?php $i = 1;
    while ($i < 6) {
        echo $i;
        $i++;
    } ?>

    <?php function myFun()
    {
        echo "hello Function";
    }
    myFun(); ?>

    <?php function myFamilyNames($name)
    {
        echo " Hello $name";
    }
    myFamilyNames("Nandakishore");
    myFamilyNames("Vishwanath");
    myFamilyNames("Priya");
    ?>

    <?php function myDefault($ValueIs = "25")
    {
        echo $ValueIs === "25" ? "true" : "false";
    }
    myDefault();
    ?>

    <?php $fruits = ["apple", "banana", "Mango", "Kiwi"];
    echo $fruits[1];
    ?>
    <?php $fruits = ["apple", "banana", "Mango", "Kiwi"];
    $fruits[] = "ornage";
    foreach ($fruits as $i) {
        echo "$i <br>";
    }
    ?>

    <?php $fruits = ["apple", "banana", "Mango", "Kiwi"];
    echo $fruits[1];
    echo $fruits[1] = "Watermelon";
    echo $fruits[] = "Green apple";
    ?>

    <?php $person = ["Name" => "nandakishore", "age" => "26", "email" => "nandakishoerf@gmail.com"];
    $person["number"] = "77777777";
    foreach ($person as $i => $j) {
        echo "$i : $j <br> ";
    }
    ?>

    <?php $person = ["Name" => "nandakishore", "age" => "26", "email" => "nandakishoerf@gmail.com"];
    array_splice($person, 1, 1);
    foreach ($person as $i => $j) {
        echo "$i : $j <br> ";
    } ?>
    <?php $person = ["Name" => "nandakishore", "age" => "26", "email" => "nandakishoerf@gmail.com", "number" => "77777777"];
    array_splice($person, 1, 3);
    foreach ($person as $i => $j) {
        echo "$i : $j <br> ";
    } ?>

    <?php $number = [1, 2, 3, 4, 5, 6, 7,];
    array_pop($number);
    echo $number[5];
    ?>

    <?php $number = [1, 2, 3, 7, 4, 5, 6,];
    sort($number);
    foreach ($number as $i) {
        echo "$i <br>";
    }

    "<br>";
    rsort($number);
    foreach ($number as $i) {
        echo "$i <br>";
    }
    ?>

    <?php $personObject = [
        "Name" => "Kiran",
        "Address" => ["area" => "Puranpool", "pincode" => "500006",],
        "Phone" => "78937976371",
        "Age" => 2,
        "Ischeck" => true,
    ];
    echo $personObject["Name"];
    echo $personObject["Address"]["area"];
    ?>

    <?php $reg = "/w3school/i";
    echo preg_match($reg, "w3school") ?>

    <?php $stringIs = "My name is nandakishore my name";
    $result = preg_match_all("/na/i", $stringIs);
    echo "<h1>$result</h1>" ?>


    <?php $partten = "/[123]/";
    $stringIs = "The number is 5 to  between";
    if (preg_match($partten, $stringIs)) {
        echo "Is found";
    } else {
        echo "Is not found";
    } ?>

    <?php $isLogin = true;
    if ($isLogin) {
        echo "Is login";
    } else {
        echo "You not lgoing";
    } ?>


    <?php const name = "Nadakishore";
    $numberValue = 33;
    echo name;

    ?>

    <?php const personDetail = ["Ramesh", "25"];
    foreach (personDetail as $i) {
        echo "$i <br>";
    } ?>

    <?php
    function myfunctionValue()
    {
        echo $GLOBALS['numberValue'];
    }
    myfunctionValue();
    ?>


    <?php function tofunction()
    {
        $GLOBALS['pvalue'] = 22;
    }

    tofunction();
    echo $pvalue;
    ?>

    <?php
    echo "<br>";
    print_r($_SERVER);
    echo "<br>" ?>


    <form method="POST" action="index.php">
        <label>Name: <input type="text" name="name"/></label>
        <label>E-Mail: <input type="text" name="email"/></label>
        <input type="submit" />
    </form>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
</body>

</html>