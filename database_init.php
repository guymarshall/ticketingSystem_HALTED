<?php

$create_database_sql = 'CREATE DATABASE ticketingsystem;';

$ticket_sql = 'CREATE TABLE ticketingsystem.ticket (
    id int NOT NULL AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    studentID int NOT NULL,
    roomID int NOT NULL,
    description varchar(255) NOT NULL,
    priorityID int NOT NULL,
    statusID int NOT NULL,
    closureReasonID int NOT NULL,
    commentsByAdministrator varchar(255) NOT NULL,
    commentsByOriginator varchar(255) NOT NULL,
    PRIMARY KEY (id)
)';

$room_sql = 'CREATE TABLE ticketingsystem.room (
    id int NOT NULL AUTO_INCREMENT,
    shortName varchar(255) NOT NULL,
    fullName varchar(255) NOT NULL,
    hasComputers int NOT NULL,
    locationID int NOT NULL,
    PRIMARY KEY (id)
)';

$example_room_table = [
    [
        'id' => 0,
        'shortName' => 'Ma9',
        'fullName' => 'Maths 9',
        'hasComputers' => '1',
        'locationID' => '0'
    ],
    [
        'id' => 1,
        'shortName' => 'Eng2',
        'fullName' => 'English 2',
        'hasComputers' => '0',
        'locationID' => '1'
    ]
];

$location_sql = 'CREATE TABLE ticketingsystem.location (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    PRIMARY KEY (id)
)';

$example_location_table = [
    [
        'id' => 0,
        'name' => 'Bottom Floor',
        'description' => 'The bottom floor of classrooms'
    ],
    [
        'id' => 1,
        'name' => 'Top Floor',
        'description' => 'The top floor of classrooms'
    ]
];

$priority_sql = 'CREATE TABLE ticketingsystem.priority (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    PRIMARY KEY (id)
)';

$example_priority_table = [
    [
        'id' => 0,
        'name' => 'Unallocated'
    ],
    [
        'id' => 1,
        'name' => 'Low'
    ],
    [
        'id' => 2,
        'name' => 'Medium'
    ],
    [
        'id' => 3,
        'name' => 'High'
    ],
    [
        'id' => 4,
        'name' => 'Critical'
    ]
];

$status_sql = 'CREATE TABLE ticketingsystem.status (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    displayName varchar(255) NOT NULL,
    PRIMARY KEY (id)
)';

$example_status_table = [
    [
        'id' => 0,
        'name' => 'AwaitTriage',
        'displayName' => 'Awaiting triage'
    ],
    [
        'id' => 1,
        'name' => 'Fixing',
        'displayName' => 'Fixing'
    ],
    [
        'id' => 2,
        'name' => 'WaitResponseFromOriginator',
        'displayName' => 'Waiting response from originator'
    ],
    [
        'id' => 3,
        'name' => 'ResponseReceivedFromOriginator',
        'displayName' => 'Response received from originator'
    ],
    [
        'id' => 4,
        'name' => 'Closed',
        'displayName' => 'Closed'
    ]
];

$closure_reason_sql = 'CREATE TABLE ticketingsystem.closureReason (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    displayName varchar(255) NOT NULL,
    PRIMARY KEY (id)
)';

$example_priority_table = [
    [
        'id' => 0,
        'name' => 'StillOpen',
        'displayName' => 'Still open'
    ],
    [
        'id' => 1,
        'name' => 'FixedSuccessfully',
        'displayName' => 'Fixed successfully'
    ],
    [
        'id' => 2,
        'name' => 'CouldNotFix',
        'displayName' => 'Could not fix'
    ],
    [
        'id' => 3,
        'name' => 'NotFixed',
        'displayName' => 'Not fixed'
    ]
];

$student_sql = 'CREATE TABLE ticketingsystem.student {
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    fullName varchar(255) NOT NULL,
    yearStart int NOT NULL,
    PRIMARY KEY (id)
}';

$example_student_table = [
    [
        'id' => 0,
        'username' => 'mar6770',
        'password' => 4230,
        'fullName' => 'Guy Marshall',
        'yearStart' => 2010
    ]
];