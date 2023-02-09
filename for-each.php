<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each</title>
</head>
<body>
    <?php
    $bdDistrict=[
"Dhaka",
"Faridpur",
"Gazipur",
"Gopalganj",
"Jamalpur",
"Kishoreganj",
"Madaripur",
"Manikganj",
"Munshiganj",
"Mymensingh",
"Narayanganj",
"Narsingdi",
"Netrokona",
"Rajbari",
"Shariatpur",
"Sherpur",
"Tangail",
"Bogura",
"Joypurhat",
"Naogaon",
"Natore",
"Nawabganj",
"Pabna",
"Rajshahi",
"Sirajgonj",
"Dinajpur",
"Gaibandha",
"Kurigram",
"Lalmonirhat",
"Nilphamari",
"Panchagarh",
"Rangpur",
"Thakurgaon",
"Barguna",
"Barishal",
"Bhola",
"Jhalokati",
"Patuakhali",
"Pirojpur",
"Bandarban",
"Brahmanbaria",
"Chandpur",
"Chattogram",
"Cumilla",
"Coxs Bazar",
"Feni",
"Khagrachari",
"Lakshmipur",
"Noakhali",
"Rangamati",
"Habiganj",
"Maulvibazar",
"Sunamganj",
"Sylhet",
"Bagerhat",
"Chuadanga",
"Jashore",
"Jhenaidah",
"Khulna",
"Kushtia",
"Magura",
"Meherpur",
"Narail",
"Satkhira",
    ]
    ?>
    <?php
    echo "<h2>Exploring for Each</h2>";
    $friends = ['Rahim', 'Karim', 'Salam', 'jabbar', 'Rafik'];

    foreach ($friends as $friend) {
        echo "<li>$friend</li>";
    }
    ?>
    <h2>Select Your Best Friend</h2>
    <select name="" id="">
        <?php 
        foreach ($friends as $friend) {
        echo "<option>$friend</option>";
    }
        ?>
        
    </select>

<section>
        <h2>Select Your Home District</h2>
    <select name="" id="">
        <?php 
        foreach ($bdDistrict as $district) {
        echo "<option>$district</option>";
    }
        ?>
    </select>
</section>
    
</body>
</html>