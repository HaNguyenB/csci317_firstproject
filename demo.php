<!--
    I think this program showcases PHP's server-side scripting capabilities in that it dynamically generates 
    HTML content based on users interaction. In this case, the user can click on a link to view the details of
    each members, then the PHP script will generate the HTML content based on the member's name you click on.

    Program is written with help from Github copilot.
-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>45 N Cedar Street</title>
</head>
<body>
    <h1 style = "color: pink">Welcome to the 45 N Cedar Street</h1>
    <?php
    //create an array instead of using sql database
    $members = array(
        array(
            'name' => 'Jenna Gu',
            'age' => '21',
            'year' => 'senior',
            'major' => 'Anthropology and East Asian Studies'
        ),
        array(
            'name' => 'Ha Nguyen',
            'age' => '20',
            'year' => 'junior',
            'major' => 'Computer Sciene and Cinema Studies'
        ),
        array(
            'name' => 'Dan-Ha Le',
            'age' => '20',
            'year' => 'junior',
            'major' => 'Computer Sciene and Politics'
        ),
        array(
            'name' => 'Owen Do',
            'age' => '19',
            'year' => 'junior',
            'major' => 'Economics and Cinema Studies'
        ),
    );
    echo '<h2>Current members in Fall 2023:</h2>';
    echo '<ul>';
    //for each loop to loop through each member in the members array
    foreach ($members as $member) {
        //generate a link for each member
        echo '<li><a href="?member=' . urlencode($member['name']) . '">' . $member['name'] . '</a></li>';
    }
    echo '</ul>';
    //if the user clicks on a link, then display the member's details, using '$_GET' - a superglobal variable
    if (isset($_GET['member'])) {
        $selectedMember = $_GET['member'];
        echo '<h2>Member Details:</h2>';
        //array_search() function to find the index of the selected member in the members array
        echo '<p>Name: ' . $members[array_search($selectedMember, array_column($members, 'name'))]['name'] . '</p>';
        echo '<p>Age: ' . $members[array_search($selectedMember, array_column($members, 'name'))]['age'] . '</p>';
        echo '<p>Year: ' . $members[array_search($selectedMember, array_column($members, 'name'))]['year'] . '</p>';
        echo '<p>Major(s): ' . $members[array_search($selectedMember, array_column($members, 'name'))]['major'] . '</p>';
    }
    ?>

</body>
</html>
