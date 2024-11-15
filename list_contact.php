<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact List</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.7/css/pico.min.css" />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <li><a href="add_contact.php">Add Contact</a></li>
            <li><a href="list_contacts.php">View Contacts</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Contact List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- You can repeat this structure for each contact -->
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>1234567890</td>
                <td><a href="delete_contact.php?id=1" class="contrast">Delete</a></td>
            </tr>
        </tbody>
    </table>
    <a href="add_contact.php">Add New Contact</a>
</main>
</body>
</html>
