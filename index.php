<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <nav class="navbar ps-4 pe-4">
    <h1 style="display: inline-block;" class="me-4">Index page</h1>
    <div>
    <a class="me-3" href="pages/test.php">Test page</a>
    <a class="me-3" href="pages/form.php">Form page</a>
    <a class="me-3" href="pages/products.php">Products</a>
    <a href="pages/logout.php">Logout page</a>
    </div>

    <form class="form-control w-25" action="" method="post" type="submit">
    <select class="form-select" name="theme">
      <option selected>Select navbar color</option>
      <option value="light-theme">Light</option>
      <option value="yellow-theme">Yellow</option>
      <option value="green-theme">Green</option>
    </select>
      <button class="btn btn-outline-secondary mt-3">Change</button>
    </form>

  </nav>
  <div class="container">
  <p class="text-success">SESSION INFO</p>
  <?php

// tasks with session

session_start();

$_SESSION['test'] = 'test';
echo $_SESSION['test'] . '</br>';

if (isset($_SESSION['count'])) {
    $_SESSION['count'] += 1;
} else {
    $_SESSION['count'] = 1;
}
echo 'Total page views: ' . $_SESSION['count'] . '</br>';

if (isset($_POST['country'])) {
    $_SESSION['country'] = $_POST['country'];
    echo $_SESSION['country'] . '</br>';
}

if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}

if (isset($_POST['age'])) {
    $_SESSION['age'] = $_POST['age'];
}

if (!isset($_SESSION["first-visit"])) {
    $_SESSION["first-visit"] = date("Y-m-d h:i:s");
} else {
    $result = diffInSeconds();
    echo "Your last visit was {$result} seconds ago" . '</br>';
    $_SESSION["first-visit"] = date("Y-m-d h:i:s");
}

function diffInSeconds()
{
    $last = strtotime($_SESSION["first-visit"]);
    $current = strtotime(date("Y-m-d h:i:s"));
    return $current - $last;
}
?>
<hr>
<p class="text-success">COOKIE INFO</p>

<?php
// tasks with cookie

if (isset($_COOKIE['count'])) {
    $_COOKIE['count'] += 1;
} else {
    $_COOKIE['count'] = 1;
}

setcookie('count', $_COOKIE['count'], time() + 60 * 60 * 48);
echo "Ви відвідали наш сайт {$_COOKIE['count']} разів!" . '</br>';

if (isset($_GET['functionPhp']) && function_exists($_GET['functionPhp'])) {
    call_user_func($_GET['functionPhp']);
}

function hideBaner()
{
    $hideDate = strtotime(date('Y-m-d'));
    $openDate = date("Y-m-d", strtotime("+1 month", $hideDate));

    setcookie('open-date', $openDate, time() + 60 * 60 * 24 * 31);
}

if (isset($_COOKIE['open-date'])) {
    if ($_COOKIE['open-date'] === strtotime(date('Y-m-d'))) {
        echo '
        <style>
          #baner {
            display: block;
          }
        </style>
        ';
    } else {
        echo '<style>
  #baner {
    display: none;
  }
  </style>';
    }
}

function diffInDays()
{
    $last = date_create($_COOKIE['first-visit']);
    $current = date_create(date('Y-m-d'));
    $diff = date_diff($last, $current);
    return abs($diff->format("%R%a"));
}

if (!isset($_COOKIE['first-visit'])) {
    $_COOKIE['first-visit'] = date('Y-m-d');
    echo "You visit our site today for the first time" . '</br>';
    setcookie('first-visit', $_COOKIE['first-visit'], time() + 60 * 60 * 24 * 30 * 12);
} else {
    $resultInDay = diffInDays();
    echo "Your last visit was {$resultInDay} days ago" . '</br>';
    $_COOKIE['first-visit'] = date('Y-m-d');
}

function diffBirthDate()
{
    $date = explode('-', $_POST['birth-date']);
    $birthday = mktime(0, 0, 0, $date[1], $date[2], $date[0]);
    $today = time();
    $diffDays = ($birthday - $today);
    $days = (int) ($diffDays / 86400);
    return $days;
}

if (isset($_POST['birth-date'])) {
    $_COOKIE['birth-date'] = $_POST['birth-date'];
    setcookie('birth-date', $_COOKIE['birth-date'], time() + 60 * 60 * 24 * 30 * 12);
    $diff = diffBirthDate();
    if ($diff === 0) {
        echo 'Happy birthday to you!';
    } else {
        echo "{$diff} days left for your birthday";
    }
}

if (isset($_POST['theme'])) {
    $_COOKIE['theme'] = $_POST['theme'];
    setcookie('theme', $_COOKIE['theme'], time() + (60 * 60 * 24 * 30));
}

if (isset($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] === 'light-theme') {
        echo '<style>nav {
            background-color: rgb(217, 228, 238);
            }</style>';
    }
    if ($_COOKIE['theme'] === 'yellow-theme') {
        echo '<style>nav {
            background-color: rgb(240, 240, 11);
            }</style>';
    }
    if ($_COOKIE['theme'] === 'green-theme') {
        echo '<style>nav {
            background-color: rgb(29, 235, 22);
            }</style>';
    }
}

?>

<!-- Baner -->
<div id="baner" class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">
  <h2>Baner</h2>
  <p>
    This is a simple hero unit, a simple Hero-style component for calling extra
    attention to featured content or information.
  </p>

  <hr class="my-4" />
  <button type="button" id="hide-btn" class="btn btn-outline-danger" onclick="hideBanerOnClick()">
    Don't show
  </button>
</div>
<!-- Baner -->

<p id="info-baner" class="text-danger mt-3 mb-3" style="display: none;">
<?php echo "Ви не будете бачити цей банер до {$_COOKIE['openDate']}"; ?>
</p>

<form class="mt-4" action="" method="post">
  <label for="date" class="text-success">Enter your date of birth</label>
  <input type="date" class="form-control" id="date" name="birth-date"/>
  <button class="btn btn-outline-success mt-3 mb-4">Submit</button>
</form>

<hr>

<form class="mt-4" action="" method="post">
  <div class="mb-3">
    <label for="country" class="form-label text-primary">Country</label>
    <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label text-primary">Age</label>
    <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label text-primary">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <button class="btn btn-primary mt-3 mb-4">Submit</button>
</form>
</div>

<script>
  function hideBanerOnClick() {
    console.log('click')
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "index.php?functionPhp=hideBaner", true);
    xhttp.send();

    document.getElementById('baner').style.display = 'none';
  }
</script>
</body>
</html>