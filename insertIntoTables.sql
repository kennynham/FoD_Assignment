INSERT INTO clients (id, name) VALUES (100, 'Kenny');
INSERT INTO clients (id, name) VALUES (101, 'Eric');
INSERT INTO clients (id, name) VALUES (102, 'Stan');
INSERT INTO clients (id, name) VALUES (103, 'Kyle');
INSERT INTO clients (id, name) VALUES (104, 'Butters');

INSERT INTO sections (id, client_id, name) VALUES (200, 100, 'SectionA');
INSERT INTO sections (id, client_id, name) VALUES (201, 100, 'SectionB');
INSERT INTO sections (id, client_id, name) VALUES (202, 101, 'SectionC');
INSERT INTO sections (id, client_id, name) VALUES (203, 101, 'SectionD');
INSERT INTO sections (id, client_id, name) VALUES (204, 102, 'SectionE');
INSERT INTO sections (id, client_id, name) VALUES (205, 102, 'SectionF');
INSERT INTO sections (id, client_id, name) VALUES (206, 103, 'SectionG');
INSERT INTO sections (id, client_id, name) VALUES (207, 103, 'SectionH');
INSERT INTO sections (id, client_id, name) VALUES (208, 104, 'SectionI');

INSERT INTO links (id, section_id, name) VALUES (001, 200, 'http://southpark.com');
INSERT INTO links (id, section_id, name) VALUES (002, 200, 'http://whokilledkenny.com');
INSERT INTO links (id, section_id, name) VALUES (003, 201, 'http://thereallorde.com');
INSERT INTO links (id, section_id, name) VALUES (004, 202, 'http://snarf.com');
INSERT INTO links (id, section_id, name) VALUES (005, 203, 'http://mintberrycrunch.com');
INSERT INTO links (id, section_id, name) VALUES (006, 204, 'http://token.com');
INSERT INTO links (id, section_id, name) VALUES (007, 205, 'http://respectmyauthority.com');
INSERT INTO links (id, section_id, name) VALUES (008, 206, 'http://thatsabadkitty.com');
INSERT INTO links (id, section_id, name) VALUES (009, 207, 'http://israndymarshlorde.com');
INSERT INTO links (id, section_id, name) VALUES (010, 208, 'http://membaberries.com');