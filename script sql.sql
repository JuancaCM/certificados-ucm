INSERT INTO roles (name) VALUES ('Administrador');
INSERT INTO roles (name) VALUES ('Docente');
INSERT INTO roles (name) VALUES ('Analista');

INSERT INTO faculties (name) VALUES ('Ingenieria');
INSERT INTO faculties (name) VALUES ('Salud');
INSERT INTO faculties (name) VALUES ('Educacion');

INSERT INTO careers (name, faculty_id) VALUES ('Informatica', 1);
INSERT INTO careers (name, faculty_id) VALUES ('Kinesiologia', 2);
INSERT INTO careers (name, faculty_id) VALUES ('Pedagogia', 3);

INSERT INTO contracts (name) VALUES ('Planta Ordinario');
INSERT INTO contracts (name) VALUES ('Planta Asociado');
INSERT INTO contracts (name) VALUES ('Planta Administrativo');

INSERT INTO campuses (name) VALUES ('Sede Talca');
INSERT INTO campuses (name) VALUES ('Sede Curico');
