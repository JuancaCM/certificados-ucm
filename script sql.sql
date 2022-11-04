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

INSERT INTO dimensions (name, description) VALUES ('Investigación en Docencia Universitaria ', 'Esta dimensión tiene como propósito proporcionar herramientas técnicas para favorecer el desarrollo e implementación de proyectos de investigación aplicados al contexto local y a las demandas de las distintas áreas del conocimiento, articulando de esta manera la investigación en docencia y los planes formativos de las carreras, los aprendizajes de los estudiantes y las necesidades del medio.');
INSERT INTO dimensions (name, description) VALUES ('Metodologías Activas de Enseñanza y Aprendizaje', 'Esta dimensión tiene como propósito proporcionar herramientas técnico-pedagógicas que permitan diseñar e implementar procesos de enseñanza y aprendizaje centrados en el estudiante por medio del uso de metodologías activas que posibiliten la transferencia e integración de los contenidos curriculares, y el desarrollo del pensamiento crítico y creativo, aplicado a contextos reales.');
INSERT INTO dimensions (name, description) VALUES ('Modelo Formativo y Planificación de la Enseñanza', 'Esta dimensión tiene como propósito proporcionar herramientas técnico-pedagógicas para que los docentes puedan comprender y relacionar las áreas de formación general, disciplinar y profesional para facilitar los procesos de enseñanza y aprendizaje, y la implementación de metodologías y estrategias según un modelo curricular orientado a competencias y resultados de aprendizaje.');

INSERT INTO states (name) VALUES ('En curso');
INSERT INTO states (name) VALUES ('Realizado');
INSERT INTO states (name) VALUES ('Pendiente');

INSERT INTO course_names (name) VALUES ('Normas APA/Mendeley');
INSERT INTO course_names (name) VALUES ('SAP Docente');
INSERT INTO course_names (name) VALUES ('Comunicación efectiva y liderazgo educativo');

INSERT INTO course_teachers (name, rut, mail, phone) VALUES ('Juanita Perez', '169517260', 'juanita@perez.cl', 967587243);
INSERT INTO course_teachers (name, rut, mail, phone) VALUES ('Jon Doe', '154679870', 'jon@doe.cl', 067815263);
INSERT INTO course_teachers (name, rut, mail, phone) VALUES ('Obi-Wan Kenobi', '148957212', 'Obi-Two@jedi.cl',97567128);

INSERT INTO target_audiences (name) VALUES ('Convocatoria abierta');
INSERT INTO target_audiences (name) VALUES ('Docentes curso TIC');

INSERT INTO types (name) VALUES ('Charla');
INSERT INTO types (name) VALUES ('Taller');
INSERT INTO types (name) VALUES ('Curso');
INSERT INTO types (name) VALUES ('Seminario web');

INSERT INTO modalities (name) VALUES ('Presencial');
INSERT INTO modalities (name) VALUES ('Online');
INSERT INTO modalities (name) VALUES ('Presencial y online');
