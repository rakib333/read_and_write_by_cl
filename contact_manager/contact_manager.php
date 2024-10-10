<?php


function add_contact($name, $email, $age)
{
    $contacts = " Name: $name, Email: $email, Age: $age \n";
    file_put_contents('contact.txt', $contacts, FILE_APPEND | LOCK_EX);
    echo "Contact added successfully";
}

// $name = readline("Enter your name: ");
// $email = readline("Enter your email: ");
// $age = (float) readline("Enter your age: ");


//call the function
// add_contact($name, $email, $age);

function listenContacts()
{
    if (!file_exists('contact.txt')) {
        echo "No contacts available";
        return;
    }

    $contacts = file_get_contents('contact.txt');

    echo "Contact: \n";
    echo "----------------------------------\n";
    echo $contacts;
}
$options = getopt('al');
if (isset($options['a'])) {
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = (float) readline("Enter your age: ");

    add_contact($name, $email, $age);
} elseif (isset($options["l"])) {
    listenContacts();
}



// listenContacts();
