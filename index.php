<?php
$jsonData = '{
    "name": "Agry",
    "age": 49,
    "email": "agryagry200@gmail.com",
    "skills": ["PHP", "JavaScript", "HTML"]
}';

// Decode ke dalam PHP Object
$phpObject = json_decode($jsonData);

echo "Name: " . $phpObject->name . "\n";
echo "Age: " . $phpObject->age . "\n";
echo "Email: " . $phpObject->email . "\n";
echo "First Skill: " . $phpObject->skills[0] . "\n";

// Decode ke dalam PHP Array
$phpArray = json_decode($jsonData, true);

echo "\nArray Representation:\n";
echo "Name: " . $phpArray['name'] . "\n";
echo "Age: " . $phpArray['age'] . "\n";
echo "Email: " . $phpArray['email'] . "\n";
echo "First Skill: " . $phpArray['skills'][0] . "\n";
