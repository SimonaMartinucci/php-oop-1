<?php

require_once __DIR__ . '/../Model/Movie.php';

$db = [
    new Movie("Harry Potter and the Philosopher's Stone", 'Chris Columbus', 152, 'Fantasy', ['Daniel Radcliffe', 'Emma Watson', 'Rupert Grint']),
    new Movie("The Lord of the Rings: The Fellowship of the Ring", 'Peter Jackson', 178, 'Fantasy', ['Elijah Wood', 'Ian McKellen', 'Viggo Mortensen']),
    new Movie("Star Wars: Return of the Jedi", 'George Lucas', 131, 'Fantasy', ['Mark Hamill', 'Harrison Ford', 'Carrie Fisher']),
    new Movie("8 Mile", 'Curtis Hanson', 111, 'Drama', ['Eminem', 'Mekhi Phifer', 'Kim Basinger']),
    new Movie("Pride & Prejudice", 'Joe Wright', 126, 'Historical', ['Keira Knightley', 'Matthew Macfadyen', 'Donald Sutherland']),
    new Movie("Home Alone", 'Chris Columbus', 103, 'Comedy', ['Macaulay Culkin', 'Joe Pesci', "Catherine O'Hara"])
];

