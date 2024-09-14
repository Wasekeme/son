<!DOCTYPE html>
<html>
<head>
    <title>İletişim Formu</title>
</head>
<body>
    <h1>İletişim Formu</h1>
    <?php if (!empty($successMessage)) : ?>
        <p><?php echo $successMessage; ?></p>
    <?php endif; ?>
    <form action="contact_form" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone">
        
        <input type="submit" value="Contact Now">
    </form>
</body>
</html>
