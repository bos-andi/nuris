<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> <?= ($title) ?>-Charity and Fundraising Template</title>

<!--=====FAB ICON=======-->
<?php if (isset($logo2)): ?>
    <link rel="shortcut icon" href="/img/logo/fav-logo2.png" type="image/x-icon">
<?php elseif (isset($logo3)): ?>
    <link rel="shortcut icon" href="/img/logo/fav-logo3.png" type="image/x-icon">
<?php elseif (isset($logo4)): ?>
    <link rel="shortcut icon" href="/img/logo/fav-logo4.png" type="image/x-icon">
<?php elseif (isset($logo5)): ?>
    <link rel="shortcut icon" href="/img/logo/fav-logo5.png" type="image/x-icon">
<?php else: ?>
    <link rel="shortcut icon" href="/img/logo/fav-logo1.png" type="image/x-icon">
<?php endif; ?>
