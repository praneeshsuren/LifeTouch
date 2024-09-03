<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <h1>Users</h1>

    <?php foreach($data['users'] as $user): ?>
        <p><?php echo $user->name; ?> - <?php echo $user->age; ?></p>
    <?php endforeach; ?>
    
</body>
</html> 