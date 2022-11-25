INSERT INTO roles (name) VALUES ('SuperAdmin');
INSERT INTO roles (name) VALUES ('Administrador');
INSERT INTO roles (name) VALUES ('Docente');
INSERT INTO roles (name) VALUES ('Analista');

INSERT INTO faculties (name) VALUES ('Ciencias de la Ingeniería');
INSERT INTO faculties (name) VALUES ('Ciencias de la Salud');
INSERT INTO faculties (name) VALUES ('ciencias de la Educación');

INSERT INTO careers (name, faculty_id) VALUES ('Ingeniería Civil Informática', 1);
INSERT INTO careers (name, faculty_id) VALUES ('Ingeniería Civil Industrial', 1);
INSERT INTO careers (name, faculty_id) VALUES ('Ingeniería Civil en Construcción', 1);
INSERT INTO careers (name, faculty_id) VALUES ('Kinesiología', 2);
INSERT INTO careers (name, faculty_id) VALUES ('Medicina', 2);
INSERT INTO careers (name, faculty_id) VALUES ('Fonoaudiología', 2);
INSERT INTO careers (name, faculty_id) VALUES ('Pedagogía en Ingles', 3);
INSERT INTO careers (name, faculty_id) VALUES ('Pedagogía en Historia', 3);

INSERT INTO contracts (name) VALUES ('Planta Ordinario');
INSERT INTO contracts (name) VALUES ('Planta Asociado');
INSERT INTO contracts (name) VALUES ('Planta Administrativo');

INSERT INTO campuses (name) VALUES ('Talca');
INSERT INTO campuses (name) VALUES ('Curico');
INSERT INTO campuses (name) VALUES ('Ambos');

INSERT INTO dimensions (name, description) VALUES ('Investigación en Docencia Universitaria ', 'Esta dimensión tiene como propósito proporcionar herramientas técnicas para favorecer el desarrollo e implementación de proyectos de investigación aplicados al contexto local y a las demandas de las distintas áreas del conocimiento, articulando de esta manera la investigación en docencia y los planes formativos de las carreras, los aprendizajes de los estudiantes y las necesidades del medio.');
INSERT INTO dimensions (name, description) VALUES ('Metodologías Activas de Enseñanza y Aprendizaje', 'Esta dimensión tiene como propósito proporcionar herramientas técnico-pedagógicas que permitan diseñar e implementar procesos de enseñanza y aprendizaje centrados en el estudiante por medio del uso de metodologías activas que posibiliten la transferencia e integración de los contenidos curriculares, y el desarrollo del pensamiento crítico y creativo, aplicado a contextos reales.');
INSERT INTO dimensions (name, description) VALUES ('Modelo Formativo y Planificación de la Enseñanza', 'Esta dimensión tiene como propósito proporcionar herramientas técnico-pedagógicas para que los docentes puedan comprender y relacionar las áreas de formación general, disciplinar y profesional para facilitar los procesos de enseñanza y aprendizaje, y la implementación de metodologías y estrategias según un modelo curricular orientado a competencias y resultados de aprendizaje.');

INSERT INTO states (name) VALUES ('En curso');
INSERT INTO states (name) VALUES ('Realizado');
INSERT INTO states (name) VALUES ('Pendiente');
INSERT INTO states (name) VALUES ('Sin asistencia');

INSERT INTO course_names (name, dimension_id, contents) VALUES ('Normas APA/Mendeley', 1, '');
INSERT INTO course_names (name, dimension_id, contents) VALUES ('SAP Docente', 2, '');
INSERT INTO course_names (name, dimension_id, contents) VALUES ('Comunicación efectiva y liderazgo educativo', 3, 'Como comunicarse con los estudiantes y maneras de motivar y encausar a los estudiantes');
INSERT INTO course_names (name, dimension_id, contents) VALUES ('¿Cómo buscar información científica y no fallar en el intento?', 3, 'Alfabetización informacional, Identificar necesidad de información, Delimitar el tema, Identificar conceptos principales, Tesauros, Operadores booleanos, Estrategias de búsqueda, Operadores de proximidad, Símbolos de truncamiento, Recurso de información, Evaluación de la información, Fuentes de información, Criterios de valoración, Recursos de información SIBIB, Búsquedas de información, Fake News, Uso ético de la información y Gestores bibliográficos');

INSERT INTO course_teachers (name, rut, mail, phone) VALUES ('Juanita Perez', '169517260', 'juanita@perez.cl', 967587243);
INSERT INTO course_teachers (name, rut, mail, phone) VALUES ('Jon Doe', '154679870', 'jon@doe.cl', 067815263);
INSERT INTO course_teachers (name, rut, mail, phone) VALUES ('Obi-Wan Kenobi', '148957212', 'Obi-Two@jedi.cl',97567128);
insert into course_teachers (name, rut, mail, phone) values ('Sarene Pauel', '14734567', 'spauel0@apple.com', 692544795);
insert into course_teachers (name, rut, mail, phone) values ('Flo Oakwell', '117482721', 'foakwell1@disqus.com', 1514654428);
insert into course_teachers (name, rut, mail, phone) values ('Alissa Godlonton', '59812637762', 'agodlonton2@ifeng.com', 2416906884);
insert into course_teachers (name, rut, mail, phone) values ('Natasha Malim', '835867109', 'nmalim3@wufoo.com', 6512552266);
insert into course_teachers (name, rut, mail, phone) values ('Kacy Cullabine', '1293876237', 'kcullabine4@bloglovin.com', 2261178764);
insert into course_teachers (name, rut, mail, phone) values ('Claudia Spurgin', '85691239', 'cspurgin5@si.edu', 6084441894);
insert into course_teachers (name, rut, mail, phone) values ('Becka Borgars', '848234712', 'bborgars6@devhub.com', 9368556222);
insert into course_teachers (name, rut, mail, phone) values ('Hanan Jerrom', '46235908', 'hjerrom7@bbb.org', 2908000057);
insert into course_teachers (name, rut, mail, phone) values ('Mick Farfoot', '1071239487', 'mfarfoot8@photobucket.com', 4046071349);
insert into course_teachers (name, rut, mail, phone) values ('Gennie Beeze', '159081273', 'gbeeze9@irs.gov', 2524606130);

INSERT INTO target_audiences (name) VALUES ('Convocatoria abierta');
INSERT INTO target_audiences (name) VALUES ('Docentes curso TIC');

INSERT INTO types (name) VALUES ('Charla');
INSERT INTO types (name) VALUES ('Taller');
INSERT INTO types (name) VALUES ('Curso');
INSERT INTO types (name) VALUES ('Seminario web');

INSERT INTO modalities (name) VALUES ('Presencial');
INSERT INTO modalities (name) VALUES ('Online');
INSERT INTO modalities (name) VALUES ('Presencial y online');

INSERT INTO certificates (title, directorName, position, constancy, constancyM, constancyF, varRut, participation, organization, varDuration, varContent, end, endM, endF) VALUES ('CONSTANCIA DE PARTICIPACIÓN', 'SRA. ANA JARA ROJAS', 'Directora General de Docencia de la Universidad Católica del Maule', 'deja constancia que el académico Sr/a.', 'deja constancia que el académico Sr.', 'deja constancia que la académica Sra.', 'RUN', 'participó en el taller', 'organizado por el Centro de Desarrollo e Innovación Docente (CDID), realizado el día', 'con una duración total de', 'Los contenidos abordados fueron:', 'Se extiende la presente constancia de participación a petición del interesado para los fines que estime convenientes.', 'Se extiende la presente constancia de participación a petición del interesado para los fines que estime convenientes.', 'Se extiende la presente constancia de participación a petición de la interesada para los fines que estime convenientes.');

INSERT INTO users (rut, name, pass, mail, phone, sex, role_id)
VALUES ('1', 'Luis Varela', '$2y$10$AQGVPEK3EIyAs1m18mf0Z.uikJ2K3JXsSNDl1HRMyWFKHYTe8gOLa', 'luisvarelag@outlook.com',
'982262817', 'M', 1);

INSERT INTO users (rut, name, pass, mail, phone, sex, role_id)
VALUES ('2', 'Juan Caceres', '$2y$10$AQGVPEK3EIyAs1m18mf0Z.uikJ2K3JXsSNDl1HRMyWFKHYTe8gOLa', 'luisvarelag@outlook.com',
'982262817', 'M', 2);

INSERT INTO users (rut, name, pass, mail, phone, sex, role_id)
VALUES ('3', 'Ignacio Perez', '$2y$10$AQGVPEK3EIyAs1m18mf0Z.uikJ2K3JXsSNDl1HRMyWFKHYTe8gOLa', 'luisvarelag@outlook.com',
'982262817', 'M', 3);

INSERT INTO users (rut, name, pass, mail, phone, sex, role_id)
VALUES ('4', 'Marcelo Lillo', '$2y$10$AQGVPEK3EIyAs1m18mf0Z.uikJ2K3JXsSNDl1HRMyWFKHYTe8gOLa', 'luisvarelag@outlook.com',
'982262817', 'M', 3);

INSERT INTO users (rut, name, pass, mail, phone, sex, role_id)
VALUES ('5', 'Diego Perez', '$2y$10$AQGVPEK3EIyAs1m18mf0Z.uikJ2K3JXsSNDl1HRMyWFKHYTe8gOLa', 'luisvarelag@outlook.com',
'982262817', 'M', 3);

INSERT INTO users (rut, name, pass, mail, phone, sex, role_id)
VALUES ('6', 'Enzo Pigattil', '$2y$10$AQGVPEK3EIyAs1m18mf0Z.uikJ2K3JXsSNDl1HRMyWFKHYTe8gOLa', 'luisvarelag@outlook.com',
'982262817', 'M', 3);

INSERT INTO users (rut, name, pass, mail, phone, sex, role_id)
VALUES ('7', 'Victor Valenzuela', '$2y$10$AQGVPEK3EIyAs1m18mf0Z.uikJ2K3JXsSNDl1HRMyWFKHYTe8gOLa', 'luisvarelag@outlook.com',
'982262817', 'M', 3);
