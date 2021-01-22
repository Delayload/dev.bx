INSERT IGNORE INTO team (ID, NAME)
VALUES (1, 'Uruguay'),
       (2, 'Portugal'),
       (3, 'France'),
       (4, 'Argentina'),
       (5, 'Brazil'),
       (6, 'Mexico'),
       (7, 'Belgium'),
       (8, 'Japan'),
       (9, 'Spain'),
       (10, 'Russia'),
       (11, 'Croatia'),
       (12, 'Denmark'),
       (13, 'Sweden'),
       (14, 'Switzerland'),
       (15, 'Colombia'),
       (16, 'England');

INSERT IGNORE INTO stage (ID, NAME)
VALUES (1, '8'),
       (2, '4'),
       (3, '2'),
       (4, '1'),
       (5, '0');

INSERT IGNORE INTO game (ID, FIRST_TEAM_ID, SECOND_TEAM_ID, FIRST_TEAM_SCORE, SECOND_TEAM_SCORE, STAGE)
VALUES (1, 1, 2, 2, 1, 1),
       (2, 3, 4, 4, 3, 1),
       (3, 5, 6, 2, 0, 1),
       (4, 7, 8, 3, 2, 1),
       (5, 9, 10, 1, 1, 1),
       (6, 11, 12, 1, 1, 1),
       (7, 13, 14, 1, 0, 1),
       (8, 15, 16, 1, 1, 1),
       (9, 1, 3, 0, 2, 2),
       (10, 5, 7, 1, 2, 2),
       (11, 10, 11, 2, 2, 2),
       (12, 13, 16, 0, 2, 2),
       (13, 3, 7, 1, 0, 3),
       (14, 11, 16, 2, 1, 3),
       (15, 7, 16, 0, 0, 4),
       (16, 3, 11, 0, 0, 5);